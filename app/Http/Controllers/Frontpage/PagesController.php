<?php
declare(strict_types=1);

namespace App\Http\Controllers\Frontpage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;

class PagesController extends Controller
{
    public function frontPageIndex(): View|Factory
    {
        return view('pages.frontpage');
    }

    public function greetPage(): View|Factory
    {
        return view('pages.greetpage');
    }
}
