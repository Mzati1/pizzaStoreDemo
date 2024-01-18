@extends('layouts.app') <!-- Use a different layout file -->
@section('content')
    

<form action="{{ route('pizza.create.submit') }}" method="post"> <!--add url to add pizza-->
    @csrf
<div class="text-center">

    <div class="row g-2">
        <div class="col-md">
            <div class="form-floating">
                <input name="username" type="text" class="form-control" id="floatingInputGrid" placeholder="John Doe" value="John Doe">
                <label for="floatingInputGrid">Your Name</label>
            </div>
        </div>
        <div class="col-md">
            <div class="form-floating">
                <select class="form-select" name="pizza_type" id="floatingSelectGrid">
                    <option value="Neapolitan">Neapolitan Pizza</option>
                    <option value="NewYork">New York-Style Pizza</option>
                    <option value="ChicagoDeepDish">Chicago Deep Dish Pizza</option>
                    <option value="Sicilian">Sicilian Pizza</option>
                    <option value="Margherita">Margherita Pizza</option>
                    <option value="California">California Pizza</option>
                    <option value="DetroitStyle">Detroit-Style Pizza</option>
                    <option value="Greek">Greek Pizza</option>
                    <option value="Pepperoni">Pepperoni Pizza</option>
                    <option value="Hawaiian">Hawaiian Pizza</option>
                    <option value="BBQChicken">BBQ Chicken Pizza</option>
                    <option value="Vegan">Vegan Pizza</option>
                    <option value="GlutenFree">Gluten-Free Pizza</option>
                </select>
                <label for="floatingSelectGrid">Works with selects</label>
            </div>
        </div>
    </div>

    <div class="container text-center">

        <div class="card">
            <div class="card-body">

                <label class="btn btn-primary">Toppings</label>
                <div class="row row-cols-2">
                    <div class="col" id="non-vegan">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="pepperoni" name="toppings[]" value="pepperoni">
                            <label class="form-check-label" for="pepperoni">Pepperoni</label>
                        </div>
                    
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="italianSausage" name="toppings[]" value="italianSausage">
                            <label class="form-check-label" for="italianSausage">Italian Sausage</label>
                        </div>
                    
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="ham" name="toppings[]" value="ham">
                            <label class="form-check-label" for="ham">Ham</label>
                        </div>
                    
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="prosciutto" name="toppings[]" value="prosciutto">
                            <label class="form-check-label" for="prosciutto">Prosciutto</label>
                        </div>
                    
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="anchovies" name="toppings[]" value="anchovies">
                            <label class="form-check-label" for="anchovies">Anchovies</label>
                        </div>
                    
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="shrimp" name="toppings[]" value="shrimp">
                            <label class="form-check-label" for="shrimp">Shrimp</label>
                        </div>
                    
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="chicken" name="toppings[]" value="chicken">
                            <label class="form-check-label" for="chicken">Grilled Chicken</label>
                        </div>                                                
                    </div>
                    
                    <div class="col" id="vegan">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="peppers" name="toppings[]" value="peppers">
                            <label class="form-check-label" for="peppers">Bell Peppers</label>
                        </div>
                    
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="mushrooms" name="toppings[]" value="mushrooms">
                            <label class="form-check-label" for="mushrooms">Mushrooms</label>
                        </div>
                    
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="onions" name="toppings[]" value="onions">
                            <label class="form-check-label" for="onions">Onions</label>
                        </div>
                    
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="olives" name="toppings[]" value="olives">
                            <label class="form-check-label" for="olives">Black Olives</label>
                        </div>
                    
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="artichokes" name="toppings[]" value="artichokes">
                            <label class="form-check-label" for="artichokes">Artichoke Hearts</label>
                        </div>
                    
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="spinach" name="toppings[]" value="spinach">
                            <label class="form-check-label" for="spinach">Spinach</label>
                        </div>
                    
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="broccoli" name="toppings[]" value="broccoli">
                            <label class="form-check-label" for="broccoli">Broccoli</label>
                        </div>
                    </div>
                                                                    
                    </div>
                </div>

            </div>
        </div>

    </div>

    <button type="submit" name="makeOrderBtn" class="btn btn-success">Make Order!</button>
</div>

</form>

@endsection
