<?php

namespace App\Http\Controllers;

abstract class MainController
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
