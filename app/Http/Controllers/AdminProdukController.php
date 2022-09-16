<?php

namespace App\Http\Controllers;
use App\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminProdukController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth::user()->role != 'admin')
        {
            return redirect()->back();
        }
        $produks = produk::all();
        return view('admin.produk.index', [
            'produks' => $produks
        ]);
    }

    public function getProduk()
    {
        $produks = produk::all();
        return $produks;
    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    public function create(Request $request)
    {
        return view('admin.produk.create');

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
            'kategori' => 'required|string|max:255' ,
            'nama_produk' => 'required|string|max:255' ,
            'harga_produk' => 'required|integer' ,
            'status_produk' => 'required|string|max:255' ,
            'stock' => 'required|integer' ,
            'pertemuan' => 'required|string|max:255' ,
            'waktu_temu' => 'required|integer' ,
            'umur' => 'required|string|max:255' ,
            'keterangan' => 'required|string' ,
            'manfaat' => 'required|string' ,
            'bundling' => 'required|string|max:255' ,
        ]);

        $produk = new produk($validatedData);
        $produk->save();

        return redirect(route('daftarProduk'));
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
        $produk = produk::find($id);
        return view('admin.produk.edit', [
            'produk' => $produk
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $produk)
    {
    
        $validatedData = $request->validate([
            'kategori' => 'required|string|max:255' ,
            'nama_produk' => 'required|string|max:255' ,
            'harga_produk' => 'required|integer' ,
            'status_produk' => 'required|string|max:255' ,
            'stock' => 'required|integer' ,
            'pertemuan' => 'required|string|max:255' ,
            'waktu_temu' => 'required|integer' ,
            'umur' => 'required|string|max:255' ,
            'keterangan' => 'required|string' ,
            'manfaat' => 'required|string' ,
            'bundling' => 'required|string|max:255' ,
        ]);

        $produk = produk::find($produk);

        $produk->kategori = $request->kategori;
        $produk->nama_produk = $request->nama_produk;
        $produk->harga_produk = $request->harga_produk;
        $produk->status_pertemuan = $request->status_pertemuan;
        $produk->stock = $request->stock;
        $produk->pertemuan = $request->pertemuan;
        $produk->waktu_temu = $request->waktu_temu;
        $produk->umur = $request->umur;
        $produk->keterangan = $request->keterangan;
        $produk->manfaat = $request->manfaat;
        $produk->bundling = $request->bundling;
        $produk->save();

        return redirect(route('daftarProduk'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($produk)
    {
        $produk->delete();
        return redirect(route('daftarProduk'));
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function penyelenggaraindex()
    {
        $produks = produk::all();
        return view('admin.produk.index', [
            'produks' => $produks
        ]);
    }

    public function penyelenggaragetProduk()
    {
        $produks = produk::all();
        return $produks;
    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    public function penyelenggaracreate(Request $request)
    {
        return view('admin.produk.create');

    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function penyelenggarastore(Request $request)
    {
        $validatedData = $request->validate([
            'kategori' => 'required|string|max:255' ,
            'nama_produk' => 'required|string|max:255' ,
            'harga_produk' => 'required|integer' ,
            'status_produk' => 'required|string|max:255' ,
            'stock' => 'required|integer' ,
            'pertemuan' => 'required|string|max:255' ,
            'waktu_temu' => 'required|integer' ,
            'umur' => 'required|string|max:255' ,
            'keterangan' => 'required|string' ,
            'manfaat' => 'required|string' ,
            'bundling' => 'required|string|max:255' ,
        ]);

        $produk = new produk($validatedData);
        $produk->save();

        return redirect(route('daftarProduk'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function penyelenggarashow($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function penyelenggaraedit($id)
    {
        $produk = produk::find($id);
        return view('admin.produk.edit', [
            'produk' => $produk
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function penyelenggaraupdate(Request $request, $produk)
    {
    
        $validatedData = $request->validate([
            'kategori' => 'required|string|max:255' ,
            'nama_produk' => 'required|string|max:255' ,
            'harga_produk' => 'required|integer' ,
            'status_produk' => 'required|string|max:255' ,
            'stock' => 'required|integer' ,
            'pertemuan' => 'required|string|max:255' ,
            'waktu_temu' => 'required|integer' ,
            'umur' => 'required|string|max:255' ,
            'keterangan' => 'required|string' ,
            'manfaat' => 'required|string' ,
            'bundling' => 'required|string|max:255' ,
        ]);

        $produk = produk::find($produk);

        $produk->kategori = $request->kategori;
        $produk->nama_produk = $request->nama_produk;
        $produk->harga_produk = $request->harga_produk;
        $produk->status_pertemuan = $request->status_pertemuan;
        $produk->stock = $request->stock;
        $produk->pertemuan = $request->pertemuan;
        $produk->waktu_temu = $request->waktu_temu;
        $produk->umur = $request->umur;
        $produk->keterangan = $request->keterangan;
        $produk->manfaat = $request->manfaat;
        $produk->bundling = $request->bundling;
        $produk->save();

        return redirect(route('daftarProduk'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function penyelenggaradestroy($produk)
    {
        $produk->delete();
        return redirect(route('daftarProduk'));
    }
}
