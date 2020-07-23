<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PizzaModel;

class PizzaController extends Controller
{
    public function index(){
        // $pizzas = PizzaModel::all();
        // $pizzas = PizzaModel::orderBy('pizza_name')->get();
        $pizzas = PizzaModel::where('pizza_name','pizza keju')->get();
        return view('pizza.home',['listPizza'=>$pizzas]);
    }
    public function show($name){
        $pizzas = PizzaModel::where('pizza_name',$name)->get();
        return view('pizza.detail-show',[
            'listPizza'=>$pizzas,
        ]);
    }
    public function getElementById($id){
        $pizza_id = $id;
        $pizzas = PizzaModel::find($pizza_id);
        return view('pizza.detail-show',['listPizza'=>$pizzas]);
    }
    public function showForm(){
        return view('pizza.form');
    }
    public function store(){
        $pizzaModel = new PizzaModel();
        $pizzaModel->pizza_name = request('pizzaName');
        $pizzaModel->pizza_prize = request('pizzaHarga');
        $pizzaModel->save();
        return redirect('/');
    }
}
