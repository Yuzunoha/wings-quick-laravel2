<?php

namespace App\Http\Controllers;

class ViewController extends Controller
{
    public function escape()
    {
        $msg = '<img src="https://wings.msn.to/image/wings.jpg" title="ロゴ">';
        $msg .= '<p>WINGSへようこそ</p>';
        return view('view.escape', ['msg' => $msg]);
    }
}
