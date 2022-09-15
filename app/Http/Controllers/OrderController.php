<?php

namespace App\Http\Controllers;
use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = auth()->user()->id;
        $orders = Order::where('id_user', $id)->get();
        $sumorders = Order::where('id_user', $id)->sum('total_harga');
        

        return view('pesanan.index', [
            'orders' => $orders,
            'sumorders' => $sumorders
        ]);
    }
    public function navindex()
    {
        
        if(auth()->user()){
            $id = auth()->user()->id;
            $orders = Order::where('id_user', $id)->get();
            $sumorders = Order::where('id_user', $id)->sum('total_harga');
            $totalpesan = Order::where('id_user', $id)->count();
        }else{
            $orders = [];
            $sumorders = 0;
            $totalpesan = 0;
        }
       
        return view('layout.master', [
            'orders' => $orders,
            'sumorders' => $sumorders,
            'totalpesan' => $totalpesan
        ]);
    }
    public function nav2index()
    {
        
        $id = auth()->user()->id;
        $orders = Order::where('id_user', $id)->get();
        $sumorders = Order::where('id_user', $id)->sum('total_harga');

        return view('layouts.master', [
            'orders' => $orders,
            'sumorders' => $sumorders
        ]);
    }

    public function nav3index()
    {
        
        $id = auth()->user()->id;
        $orders = Order::where('id_user', $id)->get();
        $sumorders = Order::where('id_user', $id)->sum('total_harga');

        return view('layouts.master', [
            'orders' => $orders,
            'sumorders' => $sumorders
        ]);
    }

    public function getOrder()
    {
        $orders = Order::all();

        return view('layout.navbar', [
            'orders' => $orders
        ]);
    }

    public function getDataOrder()
    {
        $orders = Order::all();

        return view('layouts.index', [
            'orders' => $orders
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function invoice()
    {
        $id = auth()->user()->id;
        $orders = Order::where('id_pelanggan',$id)->get();
        // dd($orders);
        return view('pesanan.invoice', [
            'orders' => $orders
        ]);
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $orders= Order::find($id)->delete();
        return redirect()->back();
    }
}
