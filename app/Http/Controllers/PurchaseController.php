<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Distributor;
use App\Models\Product;
use App\Models\Purchase;
use App\Models\Purchase_Detail;


class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('purchase.index', [
            'title' => 'Purchase',
            'datas' => DB::table('vwpurchases')->get()
            
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('purchase.create', [
            'title' => 'Purchase',
            'distributors' => Distributor::all(),
            'products' => Product::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->has('no_nota')) {
            $purchase = $request->only('no_nota', 'tgl_nota', 'id_distributor');
            $purchase['total_bayar'] = 0;
            $purchase = Purchase::create($purchase);
        }

        $purchaseDetails = $request->only('id_barang', 'harga_beli', 'margin_jual', 'jumlah_beli', 'subtotal');
        $purchaseDetails['id_pembelian'] = DB::table('purchases')->max('id');
        $purchaseDetails = Purchase_Detail::create($purchaseDetails);

        return redirect()->route('purchase.index')->with('success', 'Purchase with invoice no  '. $request->no_nota .' has been created successfully.')
        ->with('success', 'Purchase details for invoice no  '. $request->no_nota .' has been created successfully.')
        ->with('data', DB::table('purchases')->where('id', DB::table('purchases')->max('id'))->first());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}