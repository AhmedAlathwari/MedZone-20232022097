<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
  
   public function index()
{
    $data = Category::all();

    return view('admin.category.index', [
        'data' => $data
    ]);
}
    
    public function create()
{
    return view('admin.category.create');
}

    
    public function store(Request $request)
{
    $data = new Category();

    $data->parent_id = 0;

    $data->title = $request->input('title');

    $data->keywords = $request->input('keywords');

    $data->description = $request->input('description');

    $data->status = $request->input('status');

    $data->save();

    return redirect('/admin/category');
}
    
    public function show($id)
{
    $data = Category::find($id);

    return view(
        'admin.category.show',
        [
            'data' => $data
        ]
    );
}

    
    public function edit($id)
{
    $data = Category::find($id);

    return view('admin.category.edit', [
        'data' => $data
    ]);
}
    
    public function update(Request $request, $id)
{
    $data = Category::find($id);

    $data->parent_id = 0;

    $data->title = $request->input('title');

    $data->keywords = $request->input('keywords');

    $data->description = $request->input('description');

    $data->status = $request->input('status');

    $data->save();

    return redirect('/admin/category');
}

    
    public function destroy(string $id)
    {
        //
    }
}
