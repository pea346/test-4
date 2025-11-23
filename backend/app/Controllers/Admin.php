<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function dashboard(): string
    {
        return view('admin/dashboard');
    }

    public function service(): string
    {
        return view('admin/service');
    }

    public function accounts(): string
    {
        return view('admin/accounts');
    }
}
