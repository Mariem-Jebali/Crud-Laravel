@extends('template')

@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title"> id employee: {{ $employee->id }}</p>
        </header>
        <div class="card-content">
            <div class="content">
                <hr>
                <p>informations :</p>
                <ul>
                        <li>First name : {{ $employee->firstname  }}</li>
                        <li> Last name: {{ $employee-> lastname }}</li>
                        <li>birthday: {{ $employee->birthday }}</li>
                        <li>phone number: {{ $employee->phone }}</li>
                        <li>Address : {{ $employee->address }}</li>
                        <li>Email: {{ $employee->email }}</li>
                        <li>Role: {{ $employee->role->name }}</li>
                </ul>
                <hr>
            </div>
        </div>
    </div>
@endsection