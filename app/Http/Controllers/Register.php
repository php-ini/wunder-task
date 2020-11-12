<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ViewModels\Step;
use App\Domains\User\Services\RegisterService;

class Register extends Controller
{
    public function index(Request $request)
    {
        return view('index', []);
    }
}
