@extends('master')
@section('content')
<section>
    <div class="custom-product">
        <div class="col-sm-10">
            <div class="tranding-wrapper">
                <h4 class="h4-align">Product in Cart</h4>
                    @foreach($products as $items)   
                        <div class="row search-item cart_list_devider">
                            <div class="col-sm-3">
                                <a href="detail/{{$items->id}}">
                                    <img class="tranding-img" src="{{$items->gallery}}">
                                </a>
                            </div>
                            <div class="col-sm-4">
                                <div class="">
                                        <h4>{{$items->name}}</h4>
                                        <h5>{{$items->description}}</h5>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <a href="removecart/{{$items->cart_id}}" class="btn btn-warning">Remove from Cart</a>
                            </div>
                        </div>
                    @endforeach
            </div>
        </div>
    </div>
</section>
@endsection