<?php

namespace App\Http\Controllers;

use App\Khadem;
use App\Azmoon;
use App\Comision;
use Illuminate\Http\Request;

class ComisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $khadem=Khadem::query('search');
        if ($keyword = request('search')){
            $khadem->where('codemsr' , 'like' , "%$keyword%")->orWhere('namesr', 'like' , "%$keyword%")->orWhere('familysr' ,'like' , "%$keyword%");
        }

        $list =$khadem->where('ShDarComision' , '1')->where('bayeganisr' , '0')->get();
        return view('/comision/comision' , compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request , $id)
    {
        $khadems= Khadem::find($id);
        $khadems->where('id' , $id)->update([
                'ShDarComision' => $request->ShDarComision
            ]);
        
        $khadems->comisions()->create(['khadem_id'=> $id]);
        $khadems->azmoons()->update(['dalil'=> $request->dalil]);
        return back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request , $id)
    {
        
        $khadem= Khadem::find($id);
        $khadem->comisions()->where('khadem_id',$id)->update([
         'TnMahalKhsr' => $request->TnMahalKhsr,
         'ShHerasatsr' => $request->ShHerasatsr,
         'TdHerasatsr' => $request->TdHerasatsr,
         'ShToliatsr' => $request->ShToliatsr,
         'TdToliatsr' => $request->TdToliatsr,
         'SiMKhodamsr' => $request->SiMKhodamsr,
         'SiMSarmayehsr' => $request->SiMSarmayehsr,
         'SiMAalesr' => $request->SiMAalesr,
         'SiToliatsr' => $request->SiToliatsr,
         'ShHokmsr' => $request->ShHokmsr,
         ]);
         
        
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comision  $comision
     * @return \Illuminate\Http\Response
     */
    public function show(Comision $comision)
    {
        $khadem=Khadem::query('search');
        if ($keyword = request('search')){
            $khadem->where('codemsr' , 'like' , "%$keyword%")->orWhere('namesr', 'like' , "%$keyword%")->orWhere('familysr' ,'like' , "%$keyword%");
        }

        $list =$khadem->where('ShDarComision' , '1')->get();
        return view('/comision/allcomision' , compact('list'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comision  $comision
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $khadem= Khadem::find($id);
        $khadem->where('id',$id)->update([
             'bayeganisr' => $request->bayegan,
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comision  $comision
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comision $comision)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comision  $comision
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comision $comision)
    {
        //
    }
}
