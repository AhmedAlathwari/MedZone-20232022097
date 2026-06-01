<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    public function index()
{


    return view(
        'admin.index'
    );
}

    public function settings()
    {
        $data = Setting::first();

        if ($data === null) {

            $data = new Setting();

            $data->title =
            'MedZone Pharmacy Store';

            $data->save();

            $data = Setting::first();
        }

        return view(
            'admin.setting',
            [
                'data' => $data
            ]
        );
    }

    public function settingUpdate(
        Request $request
    )
    {
        $id = $request->input(
            'id'
        );

        $data = Setting::find(
            $id
        );

        $data->title =
        $request->title;

        $data->keywords =
        $request->keywords;

        $data->description =
        $request->description;

        $data->company =
        $request->company;

        $data->address =
        $request->address;

        $data->phone =
        $request->phone;

        $data->email =
        $request->email;

        $data->smtp_server =
        $request->smtp_server;

        $data->smtp_email =
        $request->smtp_email;

        $data->smtp_password =
        $request->smtp_password;

        $data->smtp_port =
        $request->smtp_port;

        $data->facebook =
        $request->facebook;

        $data->instagram =
        $request->instagram;

        $data->about_us =
        $request->about_us;

        $data->contact =
        $request->contact;

        $data->references =
        $request->references;

        if(
        $request->hasFile(
        'icon'
        )
        ){

        $data->icon =
        $request
        ->file(
        'icon'
        )
        ->store(
        'images',
        'public'
        );

        }

        $data->save();

        return redirect()
        ->route(
        'admin.setting'
        );
    }
}