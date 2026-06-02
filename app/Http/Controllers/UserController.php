<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    return view('home.user.index');
}

public function reviews()
{
    $comments = Comment::where(
        'user_id',
        Auth::id()
    )->get();

    return view(
        'home.user.comments',
        compact('comments')
    );
}

public function reviewdestroy($id)
{
    $data = Comment::find($id);

    $data->delete();

    return redirect()->route('userpanel.reviews');
}





    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
