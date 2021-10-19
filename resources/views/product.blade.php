@extends('master')
@section('content')

<section>
    <div class="container-fluid custom-product">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach($products as $items)   
                <div class="carousel-item {{$items['id']==1?'active':''}}" data-bs-interval="10000">
                    <a href="detail/{{$items['id']}}">
                        <img class="slider-img" src="{{$items['gallery']}}">
                        <div class="carousel-caption d-none d-md-block slider-text">
                            <h5>{{$items['name']}}</h5>
                            <p>{{$items['description']}}</p>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>

<section>
    <div class="container tranding-wrapper">
        <h3>Tranding Products</h3>
            @foreach($products as $items)   
                <div class="trending-item">
                    <a href="detail/{{$items['id']}}">
                        <img class="tranding-img" src="{{$items['gallery']}}">
                            <div class="">
                                <h5>{{$items['name']}}</h5>
                            </div>
                    </a>
                </div>
            @endforeach
    </div>
</section>
@endsection