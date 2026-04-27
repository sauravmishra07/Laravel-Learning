<?php

namespace App\Http\Controllers;

use App\Models\teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function addteacher(Request $request)
    {
        // Create a new teacher record
        $teacher = new teacher;
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

    public function getTeacher()
    {
        $teacherData = teacher::all();

        return view('list-teacher', ['Teachers' => $teacherData]);
    }

    public function delete($id)
    {
        $isDeleted = teacher::destroy($id);
        if ($isDeleted) {
            return redirect('list');
        }
    }

    public function edit($id)
    {
        $teacher = teacher::find($id);

        return view('edit-teacher', ['data' => $teacher]);
    }

    public function update(Request $request, $id)
    {
        $teacher = teacher::find($id);
        $teacher->name = $request->name;
        $teacher->email = $request->email;
        $teacher->phone = $request->phone;
        $teacher->save();

        return redirect('list')->with('success', 'Teacher updated successfully!');
    }

    public function search(Request $request)
    {
        $search = $request->search;

        $teacherData = teacher::where('name', 'like', "%{$search}%")->get();

        return view('list-teacher', [
            'Teachers' => $teacherData,
            'search' => $search,
        ]);
    }
}
