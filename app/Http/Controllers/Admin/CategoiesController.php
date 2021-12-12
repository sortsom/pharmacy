<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Customer;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CategoiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $categories=Category::paginate(5);
        return view('admin.categories.index',['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
       return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return string
     */
    public function store(Request $request): string
    {
      Category::create([
          'name'=>$request->name,
          'description'=>$request->description,
      ]);
        return redirect()->route('admin.categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View|void
     */
    public function show(int $id)
    {
        $categories = Category::findOrFail($id);
        return view('admin.categories.show',['categories'=>$categories]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View|Response
     */
    public function edit(int $id)
    {
        $categories = Category::findOrFail($id);
       return view('admin.categories.edit',['categories'=>$categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(Request $request, int $id)
    {
        $data = [
            'name' => $request->name,
            'address' => $request->address,
        ];
        $categories = Category::findOrFail($id);
        $categories->update($data);
        return redirect()->route('admin.categories.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id)
    {
        $categories = Category::findOrFail($id);
       $categories->Delete();
       return redirect()->route('admin.categories.index');
    }
}
