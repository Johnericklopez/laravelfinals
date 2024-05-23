<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class employeemngcontroller extends Controller
{
    public function index()
    {
        return view('employee.index');
    }
}
