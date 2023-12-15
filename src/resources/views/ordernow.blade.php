@extends('master')
@section("content")
<div class="container detail-container">
    <div class="row">
    <table class="table">
        <tbody>
            <tr>
            <td>Total</td>
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
            <td>Total amount</td>
            <td>$ {{$total + 10}}</td>
            </tr>
        </tbody>
        </table>
        <div>
        <form action="/orderplace" method="POST">
            @csrf
            <div class="form-group">
                <textarea name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your address"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Payment method</label><br><br>
                <input type="radio" value="cash" name="payment" > <span>online payment</span><br><br>
                <input type="radio" value="cash" name="payment" > <span>EMI payment</span><br><br>
                <input type="radio" value="cash" name="payment" > <span>Payment on delivery</span><br><br>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
