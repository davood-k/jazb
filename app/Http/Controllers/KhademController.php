<?php

namespace App\Http\Controllers;

use App\Khadem;
use Illuminate\Http\Request;
use App\Imports\KhademImport;
use Maatwebsite\Excel\Facades\Excel;

class KhademController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Khadems=Khadem::query('search');
        if ($keyword = request('search')){
            $Khadems->where('codemsr' , 'like' , "%$keyword%")->orWhere('namesr', 'like' , "%$keyword%")->orWhere('familysr' ,'like' , "%$keyword%");
        }
        
        $Khadems= $Khadems->latest()->paginate(10);
        return view('main' , compact('Khadems'));
    }
    public function saveImport(Request $request)
    {
        
        Excel::import(new KhademImport,$request->file);
        return 'success';
    }

    
    public function nomreh()
    {
        $results = Khadem::all();
        return view('emtiaz' ,compact('results'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sample');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Khadem  $khadem
     * @return \Illuminate\Http\Response
     */
    public function show(Khadem $khadem)
    {
        
        return view('emtiaz' , compact('khadem'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Khadem  $khadem
     * @return \Illuminate\Http\Response
     */
    public function edit(Khadem $khadem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Khadem  $khadem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Khadem $khadem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Khadem  $khadem
     * @return \Illuminate\Http\Response
     */
    public function destroy(Khadem $khadem)
    {
        //
    }
}
