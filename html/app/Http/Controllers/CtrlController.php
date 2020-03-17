<?php

namespace App\Http\Controllers;

class CtrlController extends Controller
{
    public function plain()
    {
        return response('こんにちは世界。コントローラより', 200)
            ->header('Content-Type', 'text/plain');
    }
}
