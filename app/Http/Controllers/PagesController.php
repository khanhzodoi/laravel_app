<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function Index()
    {
        $title = "Welcome to laravel";
        return view('pages.index') -> with ('title', $title);
    }

    public function About()
    {
        $title = "Welcome to laravel";
        return view('pages.about') -> with ('title', $title);
    }

    public function Services()
    {
        $data = array (
            'title' => 'services',
            'services' => ['kkkkk', 'aaaaaa', 'aaaaaaaaa']
        );
        return view('pages.services') -> with ($data);
    }
}
