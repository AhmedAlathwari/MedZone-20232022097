<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ffaq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $data = Ffaq::all();

        return view(
            'admin.faq.index',
            [
                'data' => $data
            ]
        );
    }

    public function create()
    {
        return view(
            'admin.faq.create'
        );
    }

    public function store(Request $request)
{
    $data = new \App\Models\Ffaq();

    $data->question =
    $request->question;

    $data->answer =
    $request->answer;

    $data->status =
    $request->status;

    $data->save();

    return redirect()->route(
        'admin.faq.index'
    );
}

    public function show($id)
    {
        $data = Ffaq::find($id);

        return view(
            'admin.faq.show',
            [
                'data'=>$data
            ]
        );
    }

    public function edit($id)
    {
        $data = Ffaq::find($id);

        return view(
            'admin.faq.edit',
            [
                'data'=>$data
            ]
        );
    }

    public function update(
    Request $request,
    $id
)
{
    $data = Ffaq::find($id);

    $data->question =
    $request->question;

    $data->answer =
    $request->answer;

    $data->status =
    $request->status;

    $data->save();

    return redirect()->route(
        'admin.faq.index'
    );
}

    public function destroy($id)
    {
        $data = Ffaq::find($id);

        $data->delete();

        return redirect()->route(
            'admin.faq.index'
        );
    }
}