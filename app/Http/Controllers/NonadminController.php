<?php

namespace App\Http\Controllers;
use App\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;


class NonadminController extends Controller
{
    public function __construct()
    {
        $this->middleware(function($request, $next){
            if(Gate::allows('nonadmin')) return $next($request);
            abort(403, 'Anda tidak memiliki cukup hak akses');
        });

    }


    public function index()
    {
        $title='Nonadmin';
    
        return view('admin.nonadmin',compact('title'));//
    }
}