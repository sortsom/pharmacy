<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Employee;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        $customers=Customer::paginate(5);
        return view('admin.customers.index', ['customers' => $customers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|Response
     */
    public function create()
    {
      return view('admin.customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        Customer::create([
            'name'=>$request->name,
            'gender'=>$request->gender,
            'address'=>$request->address,
            'telephone'=>$request->telephone,
        ]);
        return redirect()->route('admin.customers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */
    public function show(int $id)
    {
        $customers =Customer::findOrFail($id);
        return view('admin.customers.show', ['customers' => $customers]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */
    public function edit(int $id)
    {
        $customers=Customer::findOrFail($id);
        return view('admin.customers.edit', ['customers' => $customers]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(Request $request, int $id)
    {
        $data = [
            'name' => $request->name,
            'gender' => $request->gender,
            'address' => $request->address,
        ];
        $customers = Customer::findOrFail($id);
        $customers->update($data);
        return redirect()->route('admin.customers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id)
    {
        $customers=Customer::findOrFail($id);
        $customers->Delete();
        return redirect()->route('admin.customers.index')->with("Success",'You Delete successful!!');
    }
}
