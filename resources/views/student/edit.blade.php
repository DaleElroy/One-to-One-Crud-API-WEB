@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Edit the Students Details</h4>
                    <a href="{{url('students/')}}" class="btn btn-primary float-end">Back</a>
                    
                    <div class="card-body">
                        <form action="{{url('students/'.$student->id)}}" method ="POST">
                        @csrf
                        @method('PUT')

                        <h4>Student</h4>
                        <div class="mb-3">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="{{$student->name}}">
                        </div>
                        <div class="mb-3">
                            <label>Age</label>
                            <input type="text" name="age" class="form-control" value="{{$student->age}}">
                        </div>
                        <div class="mb-3">
                            <label>Address</label>
                            <input type="text" name="address" class="form-control" value="{{$student->address}}">
                        </div>

                        <h4>Student Academic</h4>

                        <div class="mb-3">
                            <label>Course</label>
                            <input type="text" name="course" class="form-control" value="{{$student->academic->course}}">
                        </div>

                        <div class="mb-3">
                            <label>Year</label>
                            <input type="text" name="year" class="form-control" value="{{$student->academic->year}}">
                        </div>

                        <h4>Country of Student</h4>

                        <div class="mb-3">
                            <label>Continent</label>
                            <input type="text" name="continent" class="form-control" value="{{$student->country->continent}}">
                        </div>

                        <div class="mb-3">
                            <label>Name</label>
                            <input type="text" name="name_country" class="form-control" value="{{$student->country->name}}">
                        </div>

                        <div class="mb-3">
                            <label>Capital</label>
                            <input type="text" name="capital" class="form-control" value="{{$student->country->capital}}">
                        </div>

                        <div class="mb-3">
                            <button type="submit " class="btn btn-primary ">Update</button>
                        </div>

                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>