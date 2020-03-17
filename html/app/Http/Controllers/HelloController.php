<?php

namespace App\Http\Controllers;

class HelloController extends Controller
{
    public function index()
    {
        return 'こんにちは、世界！';
    }
    public function view()
    {
        $data = [
            'msg' => 'こんにちは、世界のビュー！',
        ];
        return view('hello.view', $data);
    }
}
