@extends('layout') @section('content')
<div class="container" style="margin-top:20px;">
    <h2>Buy</h2>
    <form>
        <div class="form-group" style="margin-top:10px;">
            <select id="select" class="form-control">
            <option>Paypal</option>
            <option>Credit card</option>
      </select>
        </div>
        <div class="form-group" style="margin-top:10px;">
            <select id="select" class="form-control">
            <option>Legal entity</option>
            <option>Natural person</option>
      </select>
        </div>
        <div class="form-row" style="margin-top:10px;">
            <div class="col">
                <input type="text" class="form-control" placeholder="First name">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Last name">
            </div>
        </div>
        <div class="form-row" style="margin-top:10px;">
            <div class="col">
                <input type="text" class="form-control" placeholder="Number of card">
            </div>
        </div>
        Links to confirm and get started will be sent to the following address:
        <h5 class="text-primary">{{ Auth::user()->email }}</h5>
    </form>
</div>

@endsection
