<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        return view('user/landingPage');
    }

    public function moodBoardPage(): string
    {
        return view('user/moodBoardPage');
    }

    public function roadMapPage(): string
    {
        return view('user/roadMapPage');
    }

    public function signUpPage(): string
    {
        return view('user/signUpPage');
    }

    public function loginPage(): string
    {
        return view('user/loginPage');
    }
}
