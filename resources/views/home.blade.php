@extends('template')

@section('content')
<div class="card">
        <header class="card-header">
            <p class="card-header-title">Bonjour</p>
           
           
        </header>
        <div class="card-content">
            <div class="content">
      <div class="field">
      <div class="row">
        <div class="col-lg-12 margin-tb">
           
            <div style="margin-left:350px;">
            <a class="btn btn-info" href="{{route('products.index')}}" title="categories">Products</a>
                <a class="button is-warning" href="{{route('employees.index')}}" title="films">Employees</a>
                <a class="btn btn-success" href="{{route('roles.index')}}" title="categories">Roles</a>
            </div>
        </div>
       </div>
        </div>
        </div></div>
<footer class="card-footer is-centered" >

</footer>
   

@endsection
