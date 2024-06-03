<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\gracemodel;
class gracecontroller extends Controller
{
    public function index()
    {
       return view('grace.index');
    }
   
    public function store(Request $request)
    {
       $employees = [
           'firstname' => $request->input('firstname'),
           'lastname' => $request->input('lastname'),
           'middlename' => $request->input('middlename'),
           'address' => $request->input('address'),
           'country' => $request->input('country'),
           'state'=> $request->input('state'),
           'city'=> $request->input('city'),
           'zip'=> $request->input('zip'),
           'birth' => $request->input('birth'), 
           'hired' => $request->input('hired'),
           'department' => $request->input('department'),
        
       ];
   
   gracemodel::create($employees);   
       return redirect('grace');
    }
}
