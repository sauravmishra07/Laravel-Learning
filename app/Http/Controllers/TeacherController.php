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
            return redirect('list');
        } else {
            return 'Error occurred while adding data to the database';
        }
    }

    function getTeacher() {
        $teacherData = Teacher::all();

        return view('list-teacher', ['Teachers' => $teacherData]);
    }

    function delete($id) {
        $isDeleted=Teacher::destroy($id);
        if($isDeleted) {
            return redirect('list');
        }
    }

    function edit($id)
    {
        $teacher = Teacher::find($id);
        return view('edit-teacher', ['data' => $teacher]);
    }

    public function update(Request $request, $id)
{
    $teacher = Teacher::find($id);
    $teacher->name = $request->name;
    $teacher->email = $request->email;
    $teacher->phone = $request->phone;
    $teacher->save();

    return redirect('list')->with('success', 'Teacher updated successfully!');
}
}
