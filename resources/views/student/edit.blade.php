@extends('layouts.app')


@section('content')

<form action="{{ route('student.update', $student->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="stud_fname" class="form-label">First Name</label>
        <input type="text" class="form-control" id="stud_fname" name="stud_fname" value="{{ $student->stud_fname }}" required>
    </div>
    <div class="mb-3">
        <label for="stud_mname" class="form-label">Middle Name</label>
        <input type="text" class="form-control" id="stud_mname" name="stud_mname" value="{{ $student->stud_mname }}" required>
    </div>
    <div class="mb-3">
        <label for="stud_lname" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="stud_lname" name="stud_lname" value="{{ $student->stud_lname }}" required>
    </div>
    <div class="mb-3">
        <label for="stud_email" class="form-label">Email</label>
        <input type="email" class="form-control" id="stud_email" name="stud_email" value="{{ $student->stud_email }}" required>
    </div>
    <div class="mb-3">
        <label for="stud_age" class="form-label">Age</label>
        <input type="number" class="form-control" id="stud_age" name="stud_age" value="{{ $student->stud_age }}" required>
    </div>
    <button type="submit" class("btn btn-primary")>Update</button>

</form>

@endsection