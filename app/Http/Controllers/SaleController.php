<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Purchase;
use App\Models\Sale;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $lastId = DB::table('sales')->max('id') ?? 0;
        $nextId = $lastId + 1;
        $no_struk = 'SL-' . date('Ymd') . '/' .str_pad($nextId, 5, '0', STR_PAD_LEFT);

        return view('sale.create', [
            'title' => 'Sale',
            'products' => Product::all(),
            'datas' => DB::table('vwpurchases')->get(),
            'no_struk' => $no_struk
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
