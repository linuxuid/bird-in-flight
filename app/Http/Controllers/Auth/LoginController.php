<?php
declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use \Illuminate\Routing\Redirector;
use \Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use \Illuminate\Contracts\View\View;
use \Illuminate\Contracts\View\Factory;

class LoginController extends Controller
{
    public function createLoginForm(): View|Factory
    {
        return view('auth.login.index');
    }

    public function storeLoginForm(Request $request): RedirectResponse|Redirector
    {
        $attributes = $request->validate([
            'login' => ['required'],
            'password' => ['required'],
        ]);

        if(auth()->attempt($attributes)){
            User::whereId(auth()->id())->update([
                'api_token' => Str::random(80),
            ]);

            return redirect()->route('frontpage.index');
        }

        return back()->withErrors([
            'login' => ' Проверьте правильность набора логина',
            'password' => 'Проверьте правильность набора пароля'
        ]);
    }
}
