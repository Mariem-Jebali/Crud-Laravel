@extends('template')

@section('content')
@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}} </p>
        </div>
    @endif
    @if ($message = Session::get('error'))
        <div class="alert alert-danger">
            <p>{{$message}} </p>
        </div>
    @endif
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Roles</p>
            <a class="button is-info" href="{{ route('roles.create') }}">ADD Role</a>
        </header>
        <div class="card-content">
            <div class="content">
                <table class="table table-bordered table-responsive-lg">
                    <thead>
                        <tr>
                              <th>Id</th>
                            <th>Nom</th>
                            <th  width="250px" > Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($roles as $role)
                        <tr>
                        <td>{{ $role->id }}</td>
                          <td>{{ $role->name }}</td>
                           <td>
                         <form action="{{route( 'roles.destroy', $role->id) }}" method="POST">
                           <a href="{{route('roles.edit',  $role->id) }}" class="btn btn-success"> Edit </a>
                           <a href="{{route('roles.show',  $role->id) }}" class="btn btn-info"> show </a>

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
            {{ $roles->links() }}
        </footer>
    </div>
@endsection