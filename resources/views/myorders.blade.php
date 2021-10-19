@extends('master')
@section('content')
<section>
    <div class="custom-product">
        <div class="col-sm-10">
            <div class="tranding-wrapper">
                <h4 class="h4-align">My Orders</h4>
                        @foreach($orders as $items)   
                            <div class="row search-item cart_list_devider">
                                <div class="col-sm-3">
                                    <a href="detail/{{$items->id}}">
                                        <img class="tranding-img" src="{{$items->gallery}}">
                                    </a>
                                </div>
                                <div class="col-sm-4">
                                    <div class="">
                                        <h4>Name: {{$items->name}}</h4>
                                        <h6>Delivery Status: {{$items->status}}</h6>
                                        <h6>Address: {{$items->address}}</h6>
                                        <h6>Payment Status: {{$items->payment_status}}</h6>
                                        <h6>Payment Method: {{$items->payment_method}}</h6>
                                    </div>
                                </div>
                            </div>
                        @endforeach
            </div>
        </div>
    </div>
</section>
@endsection