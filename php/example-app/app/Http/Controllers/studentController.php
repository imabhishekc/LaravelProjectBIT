<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\student;
class studentController extends Controller
{
    public function index(){
        $students = student::all();
        return view('students.index', [
            'students' => $students
        ]);
    }
    public function create(){
        return view('students.create');
    }
    public function store(Request $request){
        try{
            if(student::create($request->all())){
                return redirect('/students')->with('status', 'data added successfully!');
            }
        }catch(Exception $e){
            return "data addition error";
        }
    }
    public function delete($id){
        try{
            $student = student::findOrFail($id);
            if($student->delete()){
                return redirect('/students')->with('status', 'data deleted successfully!');
            }
        }catch(Exception $e){
            return "data deletion error";
        }
    }
    public function edit(student $student){
        return view('students.edit', [
            'student' => $student
        ]);
    }
}
