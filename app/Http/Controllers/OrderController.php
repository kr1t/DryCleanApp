<?php

namespace App\Http\Controllers;

use App\Models\Order;

use Illuminate\Http\Request;
use Carbon\Carbon;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $carts = $request->carts;
        $information = $request->information;
        $informationSender = $request->informationSender;

        $countOrder = Order::count();
        $dateFmt = Carbon::now()->format('ymd');

        $countZeroPad = str_pad(($countOrder+1), 3, "0", STR_PAD_LEFT);
        $orderId = "LN{$dateFmt}{$countZeroPad}";

         $order = Order::create([
             "price_sum"=>  $carts['priceAll'], 
             "order_code" => $orderId,
             'user_id' => 1,
         ]);

         foreach($carts['services'] as $service){
             $order->services()->create([
                'service_id' => $service['id'],
                'price' => $service['price'],
                'model' => $service['model'],
             ]);
         }

        $information['type'] = 1;
         $order->informations()->create($information);
        $informationSender['type'] = 2;
         $order->informations()->create($informationSender);

         

        return [
            'message'=>'success',
            'data'=>[
                'order_code' =>  $order->order_code
            ]
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
