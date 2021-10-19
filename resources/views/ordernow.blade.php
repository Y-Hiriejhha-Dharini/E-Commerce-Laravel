@extends('master')
@section('content')
<section>
    <div class="container">
    <div class="custom-product">
        <div class="col-sm-10">
            <table class="table">
                <tbody>
                    <tr>
                        <td>Amount</td>
                        <td>$ {{$total}}</td>
                    </tr>
                    <tr>
                        <td>Tax</td>
                        <td>$ 0</td>

                    </tr>
                    <tr>
                        <td>Delivery</td>
                        <td>$ 10</td>
                    </tr>
                    <tr>
                        <td>Total Amount</td>
                        <td>${{$total +10}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
            <div>
                <form>
                    <div class="mb-3">
                        <textarea type="text" placeholder="Enter your address" class="form-control"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Payment Method</label><br><br>
                        <input type="radio" name="payment"><span> Online Payment</span><br><br>
                        <input type="radio" name="payment"><span> Cash on Delivery</span><br><br>
                    </div>
                    <button type="submit" class="btn btn-primary">Order Now</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection