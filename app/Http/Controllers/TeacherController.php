<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\teacher;

class TeacherController extends Controller
{
    function addteacher(Request $request) {
        // Create a new teacher record
        $teacher = new Teacher();
        $teacher->name = $request->name;
        $teacher->email = $request->email;
        $teacher->phone = $request->phone;

        // Save the teacher to the database
        if ($teacher->save()) {
            return 'Data added to the database';
        } else {
            return 'Error occurred while adding data to the database';
        }
    }
}
