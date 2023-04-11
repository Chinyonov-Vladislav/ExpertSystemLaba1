<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorController extends Controller
{
    public function index($message)
    {
        return view('pages/ErrorPage', compact('message'));
    }
}
