<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function create(){
        return view('students.create');
    }
    public function store(Request $request){
        $data = $request->all();
        Student::create($data);
        $students = Student::all();
        // echo"success create students";
        return redirect('/students')
                        ->with('success','Product created successfully.');
    }
    public function get_all_students(){
        
        $students = Student::all();
       
        
        return view('students.student_manager', compact('students'));
    }
    public function get_student_by_id($id){
        // Tìm đến đối tượng muốn update
        $students = Student::findOrFail($id);

        // điều hướng đến view edit user và truyền sang dữ liệu về user muốn sửa đổi
        return view('students.student_edit', compact('students'));
    }

    public function edit(Request $request, $id){
        // Tìm đến đối tượng muốn update
        $students = Student::findOrFail($id);

        // gán dữ liệu gửi lên vào biến data
        $data = $request->all();
        

        // Update user
        
        Student::where('id',$id)->update([
            'fullname' => $request->fullname,
            'address' => $request->address,
            'date' => $request->date,
        ]);
        $students = Student::all();
        
        return redirect('/students');
    }
    public function destroy($id)
    {
        $students = Student::find($id);
        $students->delete();
        return redirect('/students');
    }


}