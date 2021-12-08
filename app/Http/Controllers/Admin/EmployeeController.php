<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $employees=Employee::paginate(5);
        return view('admin.employees.index', ['employees' => $employees]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
      return view('admin.employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        Employee::create([
            'name'=>$request->name,
            'gender'=>$request->gender,
            'date_start'=>$request->date_start,
            'idcard'=>$request->idcard,
            'date_end'=>$request->date_end,
            'position'=>$request->position,
            'graduate'=>$request->graduate,
            'salary'=>$request->salary,
            'address'=>$request->address,
            'phone'=>$request->phone,
            'images'=>$request->images,
        ]);
     return  redirect()->route('admin.employees.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return void
     */
    public function show(int $id)
    {
//    $employees =Employee::findOrFail($id);
//    return view('admin.employees.show',['employee'=>$employees]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit(int $id): Response
    {
//        $employees=Employee::findOrFail($id);
//        return view('employees.edit',['Employee'=>$employees]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
