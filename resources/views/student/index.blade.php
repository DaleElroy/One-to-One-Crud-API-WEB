@extends('layouts.app')

@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">

                @if (session('message'))
                    <h4 class="alert alert-success">{{ session('message') }}</h4>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h4>Student List
                            <a href="{{ url('students/create') }}" class="btn btn-primary float-end">Add Students</a>
                        </h4>
                        <div class="card-body">
                            <table class="table table-boarded table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Age</th>
                                        <th>Address</th>
                                        <th>Course</th>
                                        <th>Year</th>
                                        <th>Continent</th>
                                        <th>Name</th>
                                        <th>Capital</th>

                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($students as $student)
                                        <tr>
                                            <td>{{ $student->id }}</td>
                                            <td>{{ $student->name }}</td>
                                            <td>{{ $student->age }}</td>
                                            <td>{{ $student->address }}</td>
                                            <td>{{ optional($student->academic)->course }}</td>
                                            <td>{{ optional($student->academic)->year }}</td>
                                            <td>{{ optional($student->country)->continent }}</td>
                                            <td>{{ optional($student->country)->name }}</td>
                                            <td>{{ optional($student->country)->capital }}</td>
                                            <td>
                                                <a href="{{ url('students/' . $student->id) . '/edit' }}"
                                                    class="btn btn-success btn-sm">Edit</a>
                                                <form action="{{ url('students/' . $student->id) }}" method= "POST"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                </form>

                                            </td>
                                        </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
