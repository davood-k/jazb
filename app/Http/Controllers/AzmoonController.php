<?php

namespace App\Http\Controllers;

use App\Azmoon;
use App\Khadem;
use Illuminate\Http\Request;

class AzmoonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        
        
        $list=Khadem::query('search');
        if ($keyword = request('search')){
            $list->where('codemsr' , 'like' , "%$keyword%")->orWhere('namesr', 'like' , "%$keyword%")->orWhere('familysr' ,'like' , "%$keyword%");
        }
        $khadem = $list->where('sherkatDarAzsr' , '1')->get();
    
        return view('azmoon' , compact('khadem'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Khadem $khadems, $id)
    {
        
        $khadem= Khadem::find($id);
        $khadem ->update([$khadem->sherkatDarAzsr = 1]);

        $khadem->azmoons()->create(['comisionsr'=> 0]);
        return back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * ثبت نمره آزمون
     */
    public function store(Khadem $Khadem , Request $request, $id)
    {
        $date= Khadem::where('id',$id)->value('marhalesr');
        $khadem= Khadem::find($id);

        $khadem->azmoons()->where('khadem_id',$id)->update([
         'nomrehAzmoonsr' => $request->nomrehAz
         ]);
         Khadem::where('id',$id)->update(['marhalesr'=> $date+1]);
         
        
        return redirect()->back();
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Azmoon  $azmoon
     * @return \Illuminate\Http\Response
     */
    public function show(Azmoon $azmoon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Azmoon  $azmoon
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Azmoon  $azmoon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Azmoon $azmoon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Azmoon  $azmoon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Azmoon $azmoon)
    {
        //
    }
}
