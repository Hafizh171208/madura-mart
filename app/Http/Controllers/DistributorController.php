<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Distributor;

use Illuminate\Support\Facades\DB;


class DistributorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Menampilkan data distributor
        return view('distributor.index', [
            'title' => 'Distributor',
            'datas' => Distributor::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('distributor.create', [
            'title' => 'Distributor'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $distributor = DB::table('distributors')->where('name_distributor', $request->name_distributor)->value('name_distributor');
        $alamat = DB::table('distributors')->where('alamat_distributor', $request->alamat_distributor)->value('alamat_distributor');
        $notelp = DB::table('distributors')->where('notelp_distributor', $request->notelp_distributor)->value('notelp_distributor');

        if ($request->name_distributor == $distributor && $request->alamat_distributor == $alamat && $request->notelp_distributor == $notelp) {
            return redirect()->route('distributor.create')->with('duplikat', 'Distributor ' . $request->name_distributor . ' data with address ' . $request->alamat_distributor . ' and telephone number ' . $request->notelp_distributor . ' is already in the database!')->withInput();
        }else{
            $data = $request->only(['name_distributor', 'alamat_distributor', 'notelp_distributor']);
            Distributor::create($data);
            return redirect()->route('distributor.index')->with('simpan', 'New Distributor ' . $request->name_distributor . ' has been successfully added to the database!');
        }
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
        return view('distributor.edit', [
            'title' => 'Distributor',
            'data' => Distributor::findOrFail($id)
        ]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $distributor_lama = DB::table('distributors')->where('id', $id)->value('name_distributor');
        $distributor = DB::table('distributors')->where('name_distributor', $request->name_distributor)->value('name_distributor');
        $alamat = DB::table('distributors')->where('alamat_distributor', $request->alamat_distributor)->value('alamat_distributor');
        $notelp = DB::table('distributors')->where('notelp_distributor', $request->notelp_distributor)->value('notelp_distributor');

        if ($request->name_distributor == $distributor && $request->alamat_distributor == $alamat && $request->notelp_distributor == $notelp) {
            return redirect()->route('distributor.edit', $id)->with('duplikat', 'Distributor ' . $request->name_distributor . ' data with address ' . $request->alamat_distributor . ' and telephone number ' . $request->notelp_distributor . ' is already in the database!')->withInput();
    }else{
        $data = $request->only(['name_distributor', 'alamat_distributor', 'notelp_distributor']);
        $distributor = Distributor::findOrFail($id);
        $distributor->update($data);
        return redirect()->route('distributor.index')->with('update', 'The Distributor data, ' . $distributor_lama . ' Change To ' . $request->name_distributor . ' has been succesfully updated!');
    }
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $distributor = Distributor::findOrFail($id);
        $distributor->delete();
        return redirect()->route('distributor.index')->with('hapus', 'The Distributor data, ' . $distributor->name_distributor . ' has been successfully deleted!');
    }
}