<?php

namespace App\Http\Controllers;

use App\EmployeeInfo;
use Illuminate\Http\Request;

class EmployeeInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employee = auth()->user()->employee_info;
        if($employee==null){
            return view('employee_info.create')->with('employee_profile', $employee );
        }
        else {
            return view('employee_info.edit')->with('employee_profile', $employee);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // store
        auth()->user()->addProfile(
            new EmployeeInfo([
                'name' => request('name'),
                'email' => request('email'),
                'link' => request('link'),
                'city' => request('city'),
                'skills' => request('skills')
            ])
        );
        // redirect
        return redirect('/profile');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // store
        $employee = auth()->user()->employee_info;
        $this->update($request, $employee);
        // redirect
        return redirect('/profile');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EmployeeInfo  $employeeInfo
     * @return \Illuminate\Http\Response
     */
    public function show(EmployeeInfo $employeeInfo)
    {
        return view('employee_info.show')->with('employeeInfo', $employeeInfo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EmployeeInfo  $employeeInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(EmployeeInfo $employeeInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EmployeeInfo  $employeeInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EmployeeInfo $employeeInfo)
    {
        $input = $request->only('name', 'link', 'city', 'zip', 'skills');
        $employeeInfo->name = $input['name'];
        $employeeInfo->link = $input['link'];
        $employeeInfo->city = $input['city'];
        $employeeInfo->zip = $input['zip'];
        $employeeInfo->skills = $input['skills'];

        $employeeInfo->save();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EmployeeInfo  $employeeInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmployeeInfo $employeeInfo)
    {
        //
    }
}
