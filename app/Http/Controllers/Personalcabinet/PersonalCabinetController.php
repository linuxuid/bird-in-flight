<?php
declare(strict_types=1);

namespace App\Http\Controllers\Personalcabinet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Illuminate\Contracts\View\View;
use \Illuminate\Contracts\View\Factory;

class PersonalCabinetController extends Controller
{
    public function personalCabinetShow(): View|Factory
    {
        return view('personalcabinet.show');
    }
}
