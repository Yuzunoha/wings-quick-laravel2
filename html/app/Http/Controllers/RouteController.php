<?php

namespace App\Http\Controllers;

class RouteController extends Controller
{
    // public function param(int $id)
    public function param(int $id = 1)
    {
        return 'id値：' . $id;
    }

    public function search(string $keywd)
    {
        return 'キーワード：' . $keywd;
    }

    public function info()
    {
        return 'info';
    }

    public function article()
    {
        return 'article';
    }
}
