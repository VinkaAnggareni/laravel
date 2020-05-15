@extends('layouts.tes')
@section('content')

<div class="panel">
     <div class="panel-body">
         <div class="col lg 12">
         <h1> Daftar Pembeli</h1>
        <table class="table bordered">
            <tr>
                <td width="400"><br> BIODATA</br></td>
                <td><br> STUDI KASUS</br></td>

            </tr>
            <tr>
                <td><br> NAMA  : NENGAH AYU VINKA ANGGARENI</br></td>
                <td><br> JUDUL : Sistem Manajemen Toko Kelontong</br></td>

            </tr>
            <tr>
                <td><br> NIM  : 1815051073</br></td>
                <td><br> PENJELASAN :Sistem Manajemen Toko Kelontong merupakan sistem yang akan digunakan dalam transaksi jual beli pada toko kelontong </br></td>

            </tr>
            <tr>
                <td><br> PROGRAM STUDI : PENDIDIKAN TEKNIK INFORMATIKA</br></td>
                <td><br> </br></td>


            </tr>
        </table>

    </div>
    </div>
    <div class="col lg 12">
        <a href="{{route('barang.create')}}">Tambah Data</a>
        <table class="table table-bordered">
            <thead>
                <tr><th>No</th><th>Id Pembeli</th><th>Nama Pembeli</th><th>Alamat</th><th>No Hp</th><th>Aksi</th></tr>
            </thead>
            <tbody>
                @foreach ( $tesconten as $in=>$val )
                <tr>
                <td>{{($in+1)}}</td><td> {{$val->id_pembeli}}</td><td>{{$val->nama}}</td><td>{{$val->alamat}}</td><td>{{$val->no_hp}}</td>
            
            <td>
           <a href = "{{route('barang.edit',$val->id_pembeli)}}">Update</a>
                   <form action="{{route('barang.destroy',$val->id_pembeli)}}"method="POST">
                   @csrf
                   @method('DELETE')
                   <button type="submit">Delete</button>
                   </form>
                   </td>
                   </tr>

               
                @endforeach
            </tbody>
        </table>
        {{$tesconten->links()}}
    </div>
    </div>
 </div>
@endsection
