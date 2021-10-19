@extends('master')
@section('content')
<section>
    <div class="custom-product">
        <div class="col-sm-4">
            <a href="#">Filter</a>
        </div>
        <div class="col-sm-4">
            <div class="tranding-wrapper">
                <h4>Result of Products</h4>
                    @foreach($products as $items)   
                        <div class="search-item">
                            <a href="detail/{{$items['id']}}">
                                <img class="tranding-img" src="{{$items['gallery']}}">
                                    <div class="">
                                        <h4>{{$items['name']}}</h4>
                                        <h5>{{$items['description']}}</h5>
                                    </div>
                            </a>
                        </div>
                    @endforeach
            </div>
        </div>
    </div>
</section>
@endsection