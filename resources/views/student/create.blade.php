@extends('layouts.app')

@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Students Data</h4>
                        <a href="{{ url('students') }}" class="btn btn-primary float-end ">Back</a>
                        <div class="card-body">

                            <form action="{{url('students')}}" method = "POST">
                                @csrf
                            
                                <h4>Students</h4>
                                <div class="mb-3">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label>Age</label>
                                    <input type="text" name="age" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label>Address</label>
                                    <input type="text" name="address" class="form-control">
                                </div>

                                <h4>Academic of the Student</h4>
                                <div class="mb-3">
                                    <label>Course</label>
                                    <input type="text" name="course" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Year</label>
                                    <input type="text" name="year" class="form-control">
                                </div>
                    

                                

                                <h4>Country of the Student</h4>
                                <div class="mb-3">
                                    <label>Continent</label>
                                    <input type="text" name="continent" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Name</label>
                                    
                                    <input type="text" name="name" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Capital</label>
                                    <input type="text" name="capital" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <button type = "submit" class="btn btn-primary ">save</button>
                                    </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
