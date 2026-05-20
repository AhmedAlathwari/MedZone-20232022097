<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
  
   public function index()
{
    $data = Category::all();

    return view('admin.category.index', [
        'data' => $data
    ]);
}

public static function getParentsTree($category, $title)
{
    if ($category->parent_id == 0)
    {
        return $title;
    }

    $parent = Category::find($category->parent_id);

    $title = $parent->title . ' > ' . $title;

    return self::getParentsTree($parent, $title);
}

public function create()
{
    $datalist = Category::all();

    return view(
        'admin.category.create',
        ['datalist' => $datalist]
    );
}
    
    

    
    public function store(Request $request)
{
    $data = new Category();

$data->parent_id = $request->input('parent_id');

    $data->title = $request->input('title');

    $data->keywords = $request->input('keywords');

    $data->description = $request->input('description');

    $data->status = $request->input('status');

    if ($request->hasFile('image')) {

        $data->image = $request
    ->file('image')
    ->store('images', 'public');

    }

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
    $data = Category::find($id);

    if ($data->image) {

        Storage::delete($data->image);

    }

    $data->delete();

    return redirect()->route('admin.category.index');
}
}
