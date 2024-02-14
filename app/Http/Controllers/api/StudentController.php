<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $students = Student::with(['academic','country'])->get();
        return response()->json(['students'=>$students]);
    }
    public function store(Request $request){
        $student = Student::create($request->all());
    
        // Create Academic if it's present in the request
        if ($request->has('academic')) {
            $student->academic()->create($request->input('academic'));
        }
    
        // Create Country if it's present in the request
        if ($request->has('country')) {
            $student->country()->create($request->input('country'));
        }
    
        return response()->json($student, 201);
    }
    
    public function update(Request $request, $id){
        $student = Student::findOrFail($id);
        $student->update($request->all());
    
        if ($request->has('academic')) {
            $student->academic()->update($request->input('academic'));
        }
    
        if ($request->has('country')) {
            $student->country()->update($request->input('country'));
        }
    
        return response()->json(['student' => $student]);
    }
    public function destroy($id){
        $student = Student::find($id);
        $student->academic()->delete();
        $student->country()->delete();
        $student->delete();
        return response()->json(['message'=>"successfuld deleted"]);
    }
}
