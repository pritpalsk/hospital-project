@extends('layout.app')

@section('title', 'Page Title')

@section('content')
    <p>Create Patient</p>
    <form action="{{ route('patient.store') }}" method="POST">
    	@csrf

    	First Name: <input type="text" name="fname" value="">
    	Last Name: <input type="text" name="lname" value="">
	    DOB: <input type="text" name="dob" value="">
	    SSN: <input type="text" name="ssn" value="">
			<p>
			What is your Gender?
				<select name="gender">
				<option value="">Select...</option>
				<option value="M">Male</option>
				<option value="F">Female</option>
				</select>
			</p>
	    Phone: <input type="text" name="phonenum" value="">
	    Address: <input type="text" name="address" value="">
	    Department ID: <input type="text" name="deptID" value="">


	    <button type="submit">SUBMIT</button>
    </form>	
@endsection