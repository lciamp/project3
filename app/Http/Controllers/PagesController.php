<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


class PagesController extends Controller {

    // static home page
    public function home()
    {
        $gitCommands = ['add', 'commit', 'diff', 'push'];

        $laravel = ['new', 'serve', 'help', 'make:controller'];

        $blade = ["@unless('')", "@foreach('')" ,"@yield('')", "@extends('')", "@section('')",];

        $test = array("git" => $gitCommands, "laravel" => $laravel, "blade" => $blade);

        return view('welcome', compact('test'));
    }

    // static about page
    public function about()
    {
        return view('about');
    }
}