<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


class PagesController extends Controller {

    // static home page
    public function home()
    {
        $gitCommands = ['add', 'commit', 'diff', 'push'];

        $directions = ['left', 'right', 'up', 'down'];

        return view('welcome', compact('gitCommands', 'directions'));
    }

    // static about page
    public function about()
    {
        return view('about');
    }
}