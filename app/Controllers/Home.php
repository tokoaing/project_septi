<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'User',
            'link'  => "/home/index",
            'sublink'  => ""
        ];
        return view('user/viewdata', $data);
    }
}
