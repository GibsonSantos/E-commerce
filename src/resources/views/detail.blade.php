@extends('master')
@section("content")
<div class="container detail-container">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$product['gallery']}}" alt="">
        </div>
        <div class="col-sm-6">
            <a href="/">Go back</a>
            <h2>{{$product['name']}}</h2>
            <h3>Price : {{$product['price']}}</h3>
            <h4>Details : {{$product['description']}}</h4>
            <h4>Details : {{$product['category']}}</h4>
            <br><br>
            @if(Session::has('user'))
            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="text" name="product_id" value="{{$product['id']}}" hidden>
                <button class="btn btn-primary" >Add to CART</button>
            </form>
            @else
            <form action="/login" method="GET">
                <button class="btn btn-primary" >Add to CART</button>
            </form>
            @endif
            <br><br>
            <button class="btn btn-success" >Buy Now</button>
        </div>
    </div>
</div>
@endsection
