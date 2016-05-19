<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Http\Requests;


class PagesController extends Controller {

    // static home page
    public function home()
    {
        $gitCommands = ['add', 'commit', 'diff', 'push'];

        $laravel = ['new', 'serve', 'help', 'make:controller'];

        $blade = ["@unless()", "@foreach()" ,"@yield()", "@extends()", "@section()"];

        $test = ['git' => $gitCommands, 'laravel' => $laravel, 'blade' => $blade];

        $keys = array_keys($test);

        return view('welcome', compact('test', 'keys'));
    }

    // static about page
    public function about()
    {
        return view('pages.about');
    }

    public function icon()
    {
        return view('icon');
    }

}
