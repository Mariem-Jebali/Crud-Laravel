@extends('template')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Eomployee</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{route('employees.index')}}" title="Go back">back </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Error!</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li> {{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Empoyee</p>
        
        </header>
        <div class="card-content">
            <div class="content">
    <form action="{{ route('employees.update',$employee->id) }}" method="POST">
    @csrf
    @method('PUT')
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>first Name:</strong>
                    <input type="text" name="firstname" value="{{ $employee->firstname }}"   class="form-control" placeholder="firstName">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>last Name:</strong>
                    <input type="text" name="lastname" value="{{ $employee->lastname }}"   class="form-control" placeholder="lastName">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>birthday:</strong>
                    <input type="date" name="birthday"  class="form-control" placeholder="">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="email" name="email"  value="{{ $employee->email}}" class="form-control" placeholder="email">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Address:</strong>
                    <input type="text" name="address" value="{{ $employee->address }}"   class="form-control" placeholder="address">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>phone:</strong>
                    <input type="number" name="phone"  class="form-control" value="{{ $employee->number }}"  placeholder="phone">
                </div>
            </div>
           <label class="label">Role</label>
                        <div class="select ">
                        <select name="role_id">
                            <?php $roles = App\Models\Role::all() ?>
                                @foreach($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach 
                            </select>
                        </div>
           
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </div>
    </form>
    </div>
    </div>
        </div>
@endsection