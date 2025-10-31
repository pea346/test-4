<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        return view('users/landingPage');
    }

    public function moodBoardPage(): string
    {
        return view('users/moodBoardPage');
    }
}
