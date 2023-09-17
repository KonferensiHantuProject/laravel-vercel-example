<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Test'
        ];

        return view('Example/index', $data);
    }
}
