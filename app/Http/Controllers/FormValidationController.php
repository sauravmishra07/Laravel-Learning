<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormValidationController extends Controller
{
    public function formData(Request $request)
    {

        $request->validate([
            'name' => 'required | min:3 | max:10',
            'email' => 'required | email ',
            'gender' => 'required',
            'skills' => 'required',

        ]);

        return $request->all();
    }
}
