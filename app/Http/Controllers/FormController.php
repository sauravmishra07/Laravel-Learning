<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function addUser(Request $request)
    {
        return $request->all();
    }
}
