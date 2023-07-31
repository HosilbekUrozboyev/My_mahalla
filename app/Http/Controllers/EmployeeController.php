<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::orderBy('id', 'DESC')->get();
//        dd($employees);
        return view('admin_panel/employees/index')->with('employees', $employees);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request);

        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'position' => 'required',
            'telegram_link' => 'nullable',
            'facebook_link' => 'nullable',
            'instagram_link' => 'nullable',
            'telephoneNumber' => 'required',
            'photo' => 'required | image | max:2048',
        ]);
//        dd($request);

        $name = $request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('employees_photos', $name);

        Employee::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'position' => $request->position,
            'telegram_link' => $request->telegram_link,
            'facebook_link' => $request->facebook_link,
            'instagram_link' => $request->instagram_link,
            'telephoneNumber' => $request->telephoneNumber,
            'photo' => 'storage/' . $path,
        ]);
        return redirect()->route('employee.index')->with('success', 'Hodim muvaffaqiyatli qo\'shildi');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Employee $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Employee $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Employee $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
//        dd($employee);

        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'position' => 'required',
            'telegram_link' => 'nullable',
            'facebook_link' => 'nullable',
            'instagram_link' => 'nullable',
            'telephoneNumber' => 'required',
            'photo' => 'required | image | max:2048',
        ]);
//        dd($request);

        $name = $request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('employees_photos', $name);


        $employee->name = $request->name;
        $employee->surname = $request->surname;
        $employee->position = $request->position;
        $employee->telegram_link = $request->telegram_link;
        $employee->facebook_link = $request->facebook_link;
        $employee->instagram_link = $request->instagram_link;
        $employee->telephoneNumber = $request->telephoneNumber;
        $employee->photo = 'storage/' . $path;
        $employee->save();
        return redirect()->route('employee.index')->with('success', 'O\'zgartirish muvafaqiyatli saqlandi.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Employee $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->back()->with('success', 'Muvaffaqiyatli o\'chirildi');
    }
}
