<?php

namespace App\Http\Controllers;

use App\Http\Requests\TanahStoreRequest;
use App\Http\Requests\TanahUpdateRequest;
use App\Models\Tanah;
use Illuminate\Http\Request;

class TanahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tanahs = Tanah::latest()->paginate(15);
        return view('tanah.tanah', compact('tanahs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tanah.addtanah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\TanahStoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TanahStoreRequest $request)
    {
        $input = $request->safe([
            'inp_name', 'inp_project', 'inp_barang', 'inp_harga', 'inp_lokasi', 'inp_kondisi', 'inp_tglpembelian'
        ]);

        $add = Tanah::create([
            'name' => $input['inp_name'],
            'project' => $input['inp_project'],
            'thing' => $input['inp_barang'],
            'location' => $input['inp_lokasi'],
            'price' => $input['inp_harga'],
            'condition' => $input['inp_kondisi'],
            'date_buy' => $input['inp_tglpembelian'],

        ]);
        return redirect()->route('tanah.index')->with('success', "Data produk berhasil ditambahkan");;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tanah  $tanah
     * @return \Illuminate\Http\Response
     */
    public function edit(Tanah $tanah)
    {
        return view('tanah.edittanah', compact('tanah'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\TanahUpdateRequest $request
     * @param  \App\Models\Tanah  $tanah
     * @return \Illuminate\Http\Response
     */
    public function update(TanahUpdateRequest $request, Tanah $tanah)
    {
        $input = $request->safe([
            'inp_name', 'inp_project', 'inp_barang', 'inp_harga', 'inp_lokasi', 'inp_kondisi', 'inp_tglpembelian'
        ]);
        $update = $tanah->update([
            'name' => $input['inp_name'],
            'project' => $input['inp_project'],
            'thing' => $input['inp_barang'],
            'location' => $input['inp_lokasi'],
            'price' => $input['inp_harga'],
            'condition' => $input['inp_kondisi'],
            'date_buy' => $input['inp_tglpembelian'],

        ]);
        if (!$update) {
            return redirect()->back()->with('error', "Terjadi kesalahan pada sistem");
        }

        return redirect()->route('tanah.index')->with('success', "Data tanah berhasil diubah");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tanah  $tanah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tanah $tanah)
    {
        $tanah->delete();
        return redirect()->route('tanah.index')->with('success', "Data tanah berhasil dihapus");
    }
}
