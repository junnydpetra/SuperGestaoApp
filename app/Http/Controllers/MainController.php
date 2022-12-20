<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function main()
    {
        $title = 'Super Gestão - Home';
        return view('site.main', compact('title'));
    }
}
