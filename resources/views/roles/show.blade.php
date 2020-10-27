@extends('template')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
        <div class="pull-right">
                <a class="btn btn-primary"href="{{route('roles.index')}}"title="Go back"> back</a>
            </div>
            <div class="pull-left">
                <h2>Show Role number {{ $role->id }} </h2>
            </div>
            
        </div>
    </div>
    </br>  </br>  </br>
      
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
            <p class="card-header-title">Name : {{ $role->name }}</p>
        
            </div>
         
         
        </div>

@endsection