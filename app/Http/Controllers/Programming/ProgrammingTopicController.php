<?php
declare(strict_types=1);

namespace App\Http\Controllers\Programming;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProgrammingTopicController extends Controller
{
    public function indexList()
    {
        return view('programming.indexList');
    }
}
