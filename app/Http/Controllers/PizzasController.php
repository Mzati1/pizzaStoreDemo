<?php

namespace App\Http\Controllers;

use App\Models\pizzas;
use Illuminate\Http\Request;

class PizzasController extends Controller
{
    public function index()
    //this takes the user to the create page
    {
        return view('create');
    }
    
    public function show()
    //this shows all the orders
    {
        $pizzas = pizzas::all();
        return view('show', ['pizzas' => $pizzas]);
    }

    public function showOrder($id)
{

    $pizza = pizzas::findOrFail($id); 
    $pizzaToppings = json_decode($pizza['pizzaToppings']);
    return view('report', ['pizza' => $pizza], ['pizzaToppings' => $pizzaToppings]);
}


    
  public function create()
    //post method to submit new data
    {
        $data = new pizzas();
        //attributes
        $data['usernameOrder'] = request('username');
        $data['pizzaKind'] = request('pizza_type');
        $data['pizzaToppings'] = json_encode(request('toppings')); ///ndekuti ill use json decode when receiving the data, would still be nice if i found a way to cast data type in the model
        $data->save();
        session()->put('order_status', 'Order made');
        return redirect('show')->with('order_status', 'Order made');
    }

    public function destroy($id)
    {
        $pizza = pizzas::findorfail($id);
        $pizza->delete();
        session()->put('order_status', 'Order has been completed');
        return redirect('show')->with('order_status', 'Order has been completed');
    }
}
