<?php

namespace App\Http\Controllers;
use App\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title='Barang';
        $tesconten=Barang::paginate(5);
       // dd($barang);
        return view('admin.tescontent',compact('title','tesconten'));//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title='Input Pembeli';
        return view('admin.inputbarang',compact('title','barang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $messages = [
            'required'=> 'Kolom: atribute harus lengkap',
            'date'=> 'Kolom: atribute harus Tanggal',
            'numeric'=> 'Kolom: atribute harus Angka', 
        ];
        $validasi = $request->validate([
            'id_pembeli'=>'required',
            'nama'=>'required',
            'alamat'=>'required',
            'no_hp'=>'required',
        ],$messages);
        Barang::create($validasi);
        return redirect('barang')->with('succses','Data berhasil diupdate');

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
        $title='Input Pembeli';
        $barang= Barang::find($id);
        return view('admin.inputbarang',compact('title','barang'));
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
        $messages = [
            'required'=> 'Kolom: atribute harus lengkap',
            'date'=> 'Kolom: atribute harus Tanggal',
            'numeric'=> 'Kolom: atribute harus Angka', 
        ];
        $validasi = $request->validate([
            'id_pembeli'=>'required',
            'nama'=>'required',
            'alamat'=>'required',
            'no_hp'=>'required',
        ],$messages);
        Barang::whereid_pembeli($id)->update($validasi);
        return redirect('barang')->with('succses','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Barang::whereid_pembeli($id)->delete();
        return redirect('barang')->with('succses','Data berhasil diupdate');
    }
}
