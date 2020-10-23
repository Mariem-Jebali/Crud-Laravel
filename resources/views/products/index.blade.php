@extends('products.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD Example </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('products.create')}}" title="Create a product">create</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}} </p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>description</th>
            <th>Price</th>
            <th width="250px">Actions</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->price}}</td>
                <td>
                    <form action="{{route( 'products.destroy', $product->id) }}" method="POST">

                        <a href="{{route('products.show', $product -> id) }} " title="show" class="btn btn-info"> Show</a>

                        <a href="{{route('products.edit', $product-> id)}}" class="btn btn-primary"> Edit </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger"> delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $products->links() !!}

@endsection
