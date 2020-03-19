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
}
