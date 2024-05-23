<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employeemodel;

class employeecontroller extends Controller
{
 
    public function index()
    {
       return view('employee.index');
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
   
       employeemodel::create($employees);   
       return redirect('employee');
    }
    public function show(){
        $employees = employeemodel::get();
        return view('employee.show', compact('employees'));
    }


    public function edit(int $id){
        $editemp = employeemodel::find($id);
       ;
        return view('employee.edit' , compact('editemp'));
    }
    public function update(Request $request,int $id){
        employeemodel::find($id)->update([
            'firstname'=>$request->firstname,
            'middlename'=>$request->middlename,
            'lastname'=>$request->lastname,
            'address'=>$request->address,
            'country'=>$request->country,
            'state'=>$request->state,
            'city'=>$request->city,
            'zip'=>$request->zip,   
            'birth'=>$request->birth,
            'hired'=>$request->hired    ,
            'department'=>$request->department,
           
           ]);
            return redirect()->back();

    }
}
