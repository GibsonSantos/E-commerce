@extends('master')
@section("content")

<div class="custom-product">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner">
            @foreach($products as $item)
                    <a href="detail/{{$item['id']}}">
                        <div class="carousel-item {{$item['id']==1?'active':''}}" style="align-items:center;">
                            <img class="d-block w-80 mx-auto slider-img" src="{{$item['gallery']}}" alt="First slide">
                            <div class="carousel-caption slider-text" >
                                <h3>{{$item['name']}}</h3>
                                <p>{{$item['description']}}</p>
                            </div>
                        </div>
                    </a>
                @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: rgb(150, 157, 150);"></span>
            <span class="sr-only" >Previous</span>
        </a>

        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next" >
            <span class="carousel-control-next-icon" aria-hidden="true" style="background-color: rgb(150, 157, 150);"></span>
            <span class="sr-only">Next</span>
        </a>

    </div>

    <div class="trending-wrapper">
        <h3>Trending Products</h3>
        <div class="carousel-inner">
                @foreach($products as $item)
                        <a href="detail/{{$item['id']}}">
                            <div class="trening-item" style="align-items:center;">
                                <img class="trending-image" src="{{$item['gallery']}}">
                                <div class="" >
                                    <h3>{{$item['name']}}</h3>
                                </div>
                            </div>
                        </a>
                    @endforeach
            </div>
    </div>
</div>

@endsection
