@extends('layouts.app')
@section('content')

<div style="max-width: 600px; margin: 20px auto; padding: 20px; background-color: #f8f8f8;">
    <h1>Order Details</h1>
    <p><strong>Owner's Name:</strong> {{ $pizza['usernameOrder'] }}</p>
    <p><strong>Type of Pizza:</strong> {{ $pizza['pizzaKind'] }}</p>
    <p><strong>Toppings:</strong>
        @foreach ($pizzaToppings as $topping)
           <br> -{{ $topping }}

        @endforeach
    </p>
    
    <form action = " {{ route('pizza.delete.order', ['id' => $pizza['id']]) }} " method="post">
    @csrf
    @method('DELETE')
    <div style="display: flex; justify-content: space-between; margin-top: 20px;">
        <button type="submit" style="padding: 10px; background-color: #4caf50; color: #fff; border: none; cursor: pointer;">Complete Order</button>
    </form>


     <a href="{{ route('pizza.show') }}">
     <label style="padding: 10px; background-color: #f44336; color: #fff; border: none; cursor: pointer;">Back</label>
     </a>
    </div>
</div>
@endsection