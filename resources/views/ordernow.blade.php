@extends('master')
@section('content')
<div class="container custom-product " style="background-color:white">
  <div class="col-sm-11">
    <table class="table">
      <tbody>
        <tr>
          <td>Amount</td>
          <td>{{$total}}</td>
        </tr>
        <tr>
          <td>Tax</td>
          <td>$ 0</td>
        </tr>
        <tr>
          <td>Dilivery</td>
          <td>$ 10</td>
        </tr>
        <tr>
          <td>Total Amount</td>
          <td>$ {{$total+10}}</td>
        </tr>
      </tbody>
    </table>

    <div>
      <form action="/orderplace" method="POST">
        @csrf
        <div class="form-group">
          <textarea name="address" type="email" placeholder="enter your address" class="form-control" id="email"></textarea>
        </div>
        <div class="form-group">
          <label for="pwd">Payment Method</label><br>
          <input type="radio" value="cash" name="payment"> <span>online payment</span><br>
          <input type="radio" value="cash" name="payment"> <span>online payment</span><br>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
    </div>
    
  </div>
</div>
@endsection