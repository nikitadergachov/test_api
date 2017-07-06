<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderedCoffee;
use App\OrderedCoffeeTopping;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index()
    {
        $response = [
            'orders'  => []
        ];
        $orders = Order::all();
        $ordered_coffee = OrderedCoffee::all();
        $ordered_coffee_toppings = OrderedCoffeeTopping::all();
        foreach ($orders as $order){
            $response['orders'] = [
                'id' => $order->id,
                'buyer_name' => $order->buyer_name,
                'toppings' => [

                ]

            ];


        }

        return new JsonResponse($ordered_coffee);

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }



}
