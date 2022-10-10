<?php
declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;


class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register.index');
    }

    public function createRegisterForm()
    {
        return view('auth.register.create');
    }

    public function storeRegisterForm(Request $request): Redirector|RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'min:3', 'max:8',  Rule::unique('users', 'name')],
            'login' => ['required', 'string', 'min:5', 'max:10', Rule::unique('users', 'login')],
            'secret_word' => ['required', 'string', 'min:5', 'max:8'],
            'password' => ['required', 'string', 'confirmed', 'min:8', 'max:255'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'login' => $request->login,
            'secret_word' => bcrypt($request->secret_word),
            'password' => bcrypt($request->password),
            'api_token' => Str::random(80),
        ]);

        if($user){
            return redirect()->route('frontpage.index');
            auth()->login($user);
        }

        $a = 5;
        if($a == 5){
            echo $a;
        } else {
            echo "$a != 5";
        }

        return back()->withErrors([
            'name' => ' Для поля "имя" должно быть минимум 3, максимум 8 символов.',
            'login' => 'Для поля "логин" должно быть минимум 5, максимум 10 символов.',
            'secret_word' => 'Для поля "секретное слово" должно быть минимум 5 максимум 8 символов.'
        ]);
    }
}
