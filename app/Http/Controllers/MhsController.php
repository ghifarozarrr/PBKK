<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use App\Dosen;
use DB;
use Illuminate\Http\Request;

class MhsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        //Has_one has_many
        //on \mhs\index.blade.php <td>{{ $m->dosen->namadosen}}</td>
        //$mhs = Mahasiswa::all();

        //Join
        //$mhs = DB::table('mhs')->join('dosens', 'mhs.nipdosenwali', '=', 'dosens.nip')->get();

        //SQL
        $mhs = DB::select('select * from mhs, dosens where nipdosenwali=nip');
        return view ('mhs.index', compact('mhs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dsn = Dosen::pluck('namadosen','nip');
        return view ('mhs.create',compact('dsn'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Mahasiswa::create($request->all());        
        return redirect('/mhs');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\mhs  $mhs
     * @return \Illuminate\Http\Response
     */
    public function show(Mahasiswa $mhs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\mhs  $mhs
     * @return \Illuminate\Http\Response
     */
    public function edit($mhs)
    {
        $mhsnya    = Mahasiswa::findorfail($mhs);
        $dosennya  = Dosen::pluck('namadosen','nip');
        return view('mhs.edit',compact('mhsnya','dosennya'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\mhs  $mhs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $mhs)
    {
        $mhsnya = Mahasiswa::findorfail($mhs);
        $mhsnya->update($request->all());
        return redirect('/mhs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\mhs  $mhs
     * @return \Illuminate\Http\Response
     */
    public function destroy($mhs)
    {
        $mhsnya = Mahasiswa::findorfail($mhs);
        $mhsnya->delete();
        return redirect('/mhs');
    }
}
