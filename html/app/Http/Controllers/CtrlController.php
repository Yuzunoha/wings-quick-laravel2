<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CtrlController extends Controller
{
    public function index(Request $req)
    {
        return 'リクエストパス : ' . $req->path();
    }

    public function plain()
    {
        return response('こんにちは世界。コントローラより', 200)
            ->header('Content-Type', 'text/plain');
    }

    public function form()
    {
        return view('ctrl.form', [
            'result' => '',
        ]);
    }

    public function result(Request $req)
    {
        $msg = 'こんにちは、' . $req->name . 'さん！';
        return view('ctrl.form', [
            'result' => $msg,
        ]);
    }
}
