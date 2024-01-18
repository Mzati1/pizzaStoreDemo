@extends('layouts.app')
@section('content')

<style>
body {
      margin: 0;
      font-family: Arial, sans-serif;
    }

    .rectangle {
      position: relative;
      width: 100%;
      max-width: 700px; /* Adjust the maximum width as needed */
      margin: 20px auto;
      background-color: #f0f0f0;
      margin-top: 4%;
      margin-bottom: 4%;
      overflow: hidden;
      border-radius: 5px;
    }

    .image {
      width: 20%; /* Adjust the width of the image */
      float: left;
      padding-left: 5%;
    }

    .text {
      width: 70%; /* Adjust the width of the text */
      float: left;
      padding: 20px;
      scale: 1.1;
      box-sizing: border-box;
      text-align: center;
      text-decoration: none;
      font-family: 'Raleway', sans-serif;
    }

    img {
      width: 100%;
      height: auto;
      display: block;
    }

    .lead{
        text-decoration: none;
    }

    a{
        text-decoration: none;
        color: black;
    }
</style>

@if(session('order_status'))
<div class="toast align-items-center text-white bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="d-flex">
        <div class="toast-body">
            {{ session('order_status') }}
        </div>
        <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
</div>

<script>
    var toastElement = document.querySelector('.toast');
    var toast = new bootstrap.Toast(toastElement);
    
    // Show the toast
    toast.show();
    
    // Hide the toast after 10 seconds
    setTimeout(function() {
        toast.hide();
    }, 10000); // 10000 milliseconds = 10 seconds
</script>
@endif

<div class = "text-center" >
    <a href="/">
    <p class="lead">
        HOMEPAGE
    </p>
    </a>    
</div>


@foreach ($pizzas as $pizza)
<a href="{{ route('pizza.show.order', ['id' => $pizza['id']]) }}">
    <div class="rectangle">
        <div class="content">
          <div class="image">
            <img src="images/pizza.png" alt="Image Description">
          </div>
          <div class="text">
            <p> A {{ $pizza['pizzaKind'] }} Pizza for {{ $pizza['usernameOrder'] }}</p>
          </div>
        </div>
      </div>
    </a>
@endforeach
  






@endsection