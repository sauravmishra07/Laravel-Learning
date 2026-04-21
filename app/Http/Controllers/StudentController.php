<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    function add() {
        return 'added';
    }

    function get() {
        return 'studentdetail';
    }

    function show() {
        return 'ShowDetailsSudents';
    }

    function delete() {
        return 'deletestudents';
    }
}
