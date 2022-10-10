<?php
declare(strict_types=1);


namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use \Illuminate\Http\RedirectResponse;
use \Illuminate\Routing\Redirector;
use Illuminate\Support\Str;


class LogOutController extends Controller
{
    public function destroy(): Redirector|RedirectResponse
    {
        auth()->logout();
        
        return redirect()->route('login.create.get');
    }   
}
