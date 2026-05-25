<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;
class CommentController extends Controller
{
    public function index()
    {
        $data = Comment::all();

        return view(
            'admin.comment.index',
            [
                'data' => $data
            ]
        );
    }

public function show($id)
{
    $data = Comment::find($id);

    return view(
        'admin.comment.show',
        [
            'data' => $data
        ]
    );
}

public function update(
    Request $request,
    $id
)
{
    $data = Comment::find(
        $id
    );

    $data->status =
    $request->status;

    $data->save();

    return redirect()
    ->back();
}

public function destroy($id)
{
    $data = Comment::find(
        $id
    );

    $data->delete();

    return redirect(
        '/admin/comment'
    );
}


}