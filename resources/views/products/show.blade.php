 @extends('products.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
        <div class="pull-right">
                <a class="btn btn-primary"href="{{route('products.index')}}"title="Go back"> back</a>
            </div>
            <div class="pull-left">
                <h2>Show Product number {{ $product->id }} </h2>
            </div>
            
        </div>
    </div>
    </br>  </br>  </br>
      
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
            <p class="card-header-title">Titre : {{ $product->name }}</p>
          <p>{{ $product->description }} </p> <br>
          <p>{{ $product->price }} </p> <br>
            </div>
         
         
        </div>

@endsection