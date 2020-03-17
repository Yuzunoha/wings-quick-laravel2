<?php

namespace App\Http\Controllers;

class ViewController extends Controller
{
    function while () {
        return view('view.while');
    }
    public function escape()
    {
        $msg = '<img src="https://wings.msn.to/image/wings.jpg" title="ロゴ">';
        $msg .= '<p>WINGSへようこそ</p>';
        return view('view.escape', ['msg' => $msg]);
    }
    function isset() {
        $msg = 'こんにちは';
        return view('view.isset', ['msg' => $msg]);
    }
    public function master()
    {
        return view('view.master', [
            'msg' => 'こんにちは世界。view.master',
        ]);
    }
}
