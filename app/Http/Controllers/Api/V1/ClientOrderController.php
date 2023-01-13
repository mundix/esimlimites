<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreClientOrderRequest;
use App\Http\Requests\UpdateClientOrderRequest;
use App\Models\ClientOrder;
use App\Repositories\ClientOrderRepository;
use Symfony\Component\HttpFoundation\Response;

class ClientOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(['success' => true, 'client/orders/index'], Response::HTTP_OK);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreClientOrderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClientOrderRequest $request)
    {
        (new ClientOrderRepository())->store($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ClientOrder  $clientOrder
     * @return \Illuminate\Http\Response
     */
    public function show(ClientOrder $clientOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ClientOrder  $clientOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(ClientOrder $clientOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClientOrderRequest  $request
     * @param  \App\Models\ClientOrder  $clientOrder
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClientOrderRequest $request, ClientOrder $clientOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClientOrder  $clientOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClientOrder $clientOrder)
    {
        //
    }
}
