<html>
    <head>
        <title>App Name - @yield('title')</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
    </head>
    <body>
    	<div class="navigation">
            <div class="nav-item">
                <a href="{{ route('home') }}">Home</a>
            </div>
            <div class="nav-item">
                <a href="{{ route('patient.index') }}">Patients</a>
            </div>
    		<div class="nav-item">
                <a href="{{ route('patient.create') }}">Add Patient</a>
            </div>
            <div class="nav-item">
                <a href="{{ route('doctor.index') }}">Avaliable Doctors</a>
            </div>
            <div class="nav-item">
                <a href="{{ route('appointment.index') }}">Appointments</a>
            </div>
            <div class="nav-item">
                <a href="{{ route('appointment.create') }}">Add Appointment</a>
            </div>
    	</div>	
        <div class="container">
            <h1>@yield('title')</h1>
            <br>
            @yield('content')
        </div>
    </body>
</html>