<?php

namespace App\Http\Controllers;

use App\Coffee;
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
        $orders = Order::with('orderedItems.toppingItems')->get();
        return new JsonResponse($orders);

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::with('orderedItems.toppingItems')->where('id', $id)->get();

        return $order;
    }



}
