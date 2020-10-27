@extends('template')
@section('content')
@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}} </p>
        </div>
    @endif

    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Employees</p>
            <a class="button is-info" href="{{ route('employees.create') }}">ADD employee</a>
        </header>
        <div class="card-content">
            <div class="content">
                <table class="table table-bordered table-responsive-lg">
                    <thead>
                        <tr>
                              <th>Id</th>
                            <th>Firsy name</th>
                            <th>Last name</th>
                            <th>birthday</th>
                            <th>phone</th>
                            <th>address</th>
                            <th>email</th>
                            <th>Role</th>
                            <th width="200px" > Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($employees as $employee)
                        <tr>
                        <td>{{ $employee->id }}</td>
                          <td>{{ $employee-> firstname }}</td>
                          <td>{{ $employee-> lastname }}</td>
                          <td>{{ $employee->birthday }}</td>
                          <td>{{ $employee->phone }}</td>
                          <td>{{ $employee->address }}</td>
                          <td>{{ $employee->email }}</td>
                          <td>{{ $employee->role->name }}</td>
                           <td>
                         <form action="{{route( 'employees.destroy', $employee->id) }}" method="POST">
                           <a href="{{route('employees.edit',  $employee->id) }}" class="btn btn-success"> Edit </a>
                           <a href="{{route('employees.show',  $employee->id) }}" class="btn btn-info">show </a>

                            @csrf
                            @method('DELETE')

                           <button type="submit" class="btn btn-danger"> delete</button>
                          </form>
                          </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <footer class="card-footer is-centered">
            {{ $employees->links() }}
        </footer>
    </div>
@endsection