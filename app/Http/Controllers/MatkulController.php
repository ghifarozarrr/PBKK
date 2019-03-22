<?php

namespace App\Http\Controllers;

use App\Matkul;
use App\Dosen;
use DB;
use Illuminate\Http\Request;

class MatkulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$matkul = DB::table('matkuls')->join('dosens', 'matkuls.nipdosenpengajar', '=', 'dosens.nip')->get();
        $matkul = DB::select('select * from matkuls, dosens where nipdosenpengajar=nip');
        return view ('matkul.index', compact('matkul'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dsn = Dosen::pluck('namadosen','nip');
        return view ('matkul.create',compact('dsn'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Matkul::create($request->all());        
        return redirect('/matkul');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\matkul  $matkul
     * @return \Illuminate\Http\Response
     */
    public function show(Matkul $matkul)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\matkul  $matkul
     * @return \Illuminate\Http\Response
     */
    public function edit($matkul)
    {
        $matkulnya    = Matkul::findorfail($matkul);
        $dosennya  = dosen::pluck('namadosen','nip');
        return view('matkul.edit',compact('matkulnya','dosennya'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\matkul  $matkul
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $matkul)
    {
        $matkulnya = Matkul::findorfail($matkul);
        $matkulnya->update($request->all());
        return redirect('/matkul');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\matkul  $matkul
     * @return \Illuminate\Http\Response
     */
    public function destroy($matkul)
    {
        $matkulnya = Matkul::findorfail($matkul);
        $matkulnya->delete();
        return redirect('/matkul');
    }
}
