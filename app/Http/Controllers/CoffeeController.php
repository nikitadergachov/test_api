<?php

namespace App\Http\Controllers;

use App\Coffee;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;


class CoffeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index()
    {
        return new JsonResponse(Coffee::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Coffee
     */
    public function store(Request $request)
    {
        $coffee = new Coffee($request->toArray());
        $coffee->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return JsonResponse
     */
    public function show($id)
    {
        return new JsonResponse(Coffee::where('id', $id)->first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     */
    public function update(Request $request, $id)
    {
        $coffee = Coffee::where('id', $id)->first();
        $coffee->update($request->toArray());
    }

}
