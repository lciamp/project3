<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    // static home page
    public function home()
    {
        $commands = ['add', 'commit', 'diff', 'push'];

        return view('welcome', compact('commands'));
    }

    // static about page
    public function about()
    {
        return view('pages.about');
    }

}

?>