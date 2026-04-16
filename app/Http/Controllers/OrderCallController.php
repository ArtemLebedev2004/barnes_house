<?php

namespace App\Http\Controllers;

use App\Models\OrderCall;
use App\Http\Requests\StoreOrderCallRequest;
use App\Http\Requests\UpdateOrderCallRequest;
use Inertia\Inertia;

class OrderCallController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orderCalls = OrderCall::all();
        return $orderCalls;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderCallRequest $request)
    {
        $data = $request->validated();
        $orderCall = OrderCall::create($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(OrderCall $orderCall)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OrderCall $orderCall)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderCallRequest $request, OrderCall $orderCall)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OrderCall $orderCall)
    {
        $orderCall->delete();
        
    }
}
