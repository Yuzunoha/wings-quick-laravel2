<?php

namespace App\Http\Controllers;

use App\Book;

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
    function list() {
        $data = [
            'records' => Book::all(),
        ];
        return view('hello.list', $data);
    }
}
