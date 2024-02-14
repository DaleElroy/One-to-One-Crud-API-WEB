<?php

namespace App\Http\Controllers;

use App\Models\Academic;
use App\Models\Country;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $students = Student::all();
        return view('student.index',compact('students'));


    }
    
    public function create(){
        return view('student.create');
    }

    public function store(Request $request){
        $student = Student::create([
            'name' =>$request->name,
            'age' => $request->age,
            'address'=> $request->address

        ]);
        $student->academic()->create([
            'course'=>$request->course,
            'year'=>$request->year,
        ]);
        $student ->country()->create([
            'continent'=>$request->continent,
            'name'=>$request->name,
            'capital'=>$request->capital,
        ]);
        return redirect('students')->with('message','Added Successfully');
    }
    public function edit(Student $student){
        return view('student.edit',compact('student'));
    }
    public function update(Request $request, Student $student)
{
    $student->update([
        'name' => $request->input('name'),
        'age' => $request->input('age'),
        'address' => $request->input('address'),
    ]);

    // Update associated academic record
    $student->academic()->update([
        'course' => $request->input('course'),
        'year' => $request->input('year'),
    ]);

    // Update associated country record
    $student->country()->update([
        'continent' => $request->input('continent'),
        'name' => $request->input('name_country'),
        'capital' => $request->input('capital'),
    ]);

    return redirect()->route('students.index')->with('success', 'Student details updated successfully.');
}
    public function destroy(Student $student){
        $student->delete();
        return redirect('students')->with('message',"The Data has been Deleted Successfully");
    }

    public function destroyAcademic(Student $student)
{
    $student->academic->delete();

    return redirect()->back()->with('message', 'Academic record deleted successfully.');
}

public function destroyCountry(Student $student)
{
    $student->country->delete();

    return redirect()->back()->with('message', 'Country record deleted successfully.');
}
    
    
}
