<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        $data = User::all();

        return view(
            'admin.user.index',
            [
                'data' => $data
            ]
        );
    }

    public function show($id)
    {
        $data = User::find($id);

        $roles = Role::all();

        return view(
            'admin.user.show',
            [
                'data' => $data,

                'roles' => $roles
            ]
        );
    }

 public function store(
    Request $request,
    $id
)
{
    $user = User::find($id);

    $user->roleList()->syncWithoutDetaching(
    [
        $request->role_id
    ]
    );

    return redirect()->back();
}

public function destroy(
    $userid,
    $roleid
)
{
    $user = User::find(
        $userid
    );

    $user->roleList()->detach(
        $roleid
    );

    return redirect()->back();
}





}