@extends('master')
@section("content")
<div class="container detail-container">
    <div class="row">
        <div class="col-sm-10">
            <div class="trending-wrapper">
                <h4>Result for Products</h4>
                @foreach($products as $item)
                    <div class="row searched-item cart-list-device">
                        <div class="col-sm-3">
                        <a href="detail/{{$item->id}}">
                            <img src="{{$item->gallery}}" class="trending-image">
                        </a>
                        </div>
                        <div class="col-sm-4">
   
                            <div>
                                <h2>{{$item->name}}</h2>
                                <h5>{{$item->description}}</h5>
                            </div>
  
                        </div>
                        <div class="col-sm-5">
                            <div class="btn btn-warning">Remove to Cart</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
