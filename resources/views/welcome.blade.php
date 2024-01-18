@extends('layouts.app')
@section('content')
<style>
    .text-center{
        margin-top: none;
        background-image: linear-gradient(120deg, #fdfbfb 0%, #ebedee 100%); 
           }

           button{
            margin-top: 2%;
            margin-bottom: 2%;
           }
</style>

<div class="text-center">
    <h1 class="display-3">Welcome To Pizzas</h1>

    <a href="{{ route('pizza.create') }}">
    <button type="button" ALIGN="centre" class="btn btn-secondary btn-lg">Order a Pizza!</button> <br>
    </a>
    
    <a href="{{ route('pizza.show')}}">
     <button type="button" ALIGN="centre" class="btn btn-secondary btn-lg">Show Orders!</button>
    </a>
</div>

@endsection