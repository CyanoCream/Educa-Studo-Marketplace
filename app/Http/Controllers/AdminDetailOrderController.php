<?php

namespace App\Http\Controllers;
use App\Detail_order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminDetailOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detail_orders = Detail_order::all();
        return view('admin.detail_order.index', [
            'detail_orders' => $detail_orders
        ]);
    }

    public function getDetailOrder()
    {
        $detail_orders = Detail_order::all();

        return $detail_orders;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.detail_order.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            // 'id_order' => 'required|integer' ,
            'id_produk' => 'required|integer' ,
            'qty_order' => 'required|integer' ,
        ]);

        $id = DB::table('detail_orders')->latest()->limit(1)->pluck('id_order');
        foreach ($id as $id) {
            # code...
        }
        $detail_order = new detail_order();
        $detail_order->id_order = $id + 1;
        $detail_order->id_produk = $request->id_produk;
        $detail_order->id_varian_order = $request->id_varian_order;
        $detail_order->qty_order = $request->qty_order;
        $detail_order->save();

        return redirect(route('daftarDetail_Order'));
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
        $detail_order = Detail_order::find($id);
        return view('admin.detail_order.edit', [
            'detail_order' => $detail_order
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $detail_order)
    {
        $validatedData = $request->validate([
            'id_order' => 'required|integer' ,
            'id_produk' => 'required|integer' ,
            'qty_order' => 'required|integer' ,
        ]);

        $detail_order = Detail_order::find($detail_order);

        $detail_order->id_order = $request->id_order;
        $detail_order->id_produk = $request->id_produk;
        $detail_order->id_varian_order = $request->id_varian_order;
        $detail_order->qty_order = $request->qty_order;
        $detail_order->save();

        return redirect(route('daftarDetail_Order'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detail_order = Detail_order::find($id)->delete();
        return redirect()->back();
    }
}
