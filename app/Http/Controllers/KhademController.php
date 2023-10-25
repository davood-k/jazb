<?php

namespace App\Http\Controllers;

use App\Khadem;
use Illuminate\Http\Request;
use App\Imports\KhademImport;
use Maatwebsite\Excel\Facades\Excel;

class KhademController extends Controller
{

    public function index()
    {
        $Khadems=Khadem::query('search');
        if ($keyword = request('search')){
            $Khadems->where('codemsr' , 'like' , "%$keyword%")->orWhere('namesr', 'like' , "%$keyword%")->orWhere('familysr' ,'like' , "%$keyword%");
        }

        $all= $Khadems->latest()->orderBy('tajmi','DESC')->where('sherkatDarAzsr' , '0')->paginate(10);
      
        return view('listshow/all' , compact('all'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * لیست اماکن
     */
    public function amaken()
    {
        $Khadems=Khadem::query('search');
        if ($keyword = request('search')){
            $Khadems->where('codemsr' , 'like' , "%$keyword%")->orWhere('namesr', 'like' , "%$keyword%")->orWhere('familysr' ,'like' , "%$keyword%");
        }

        $amaken= $Khadems->latest()->orderBy('tajmi','DESC')->where('moavenat' , 'اماکن')->where('sherkatDarAzsr' , '0')->paginate(10);
      
        return view('listshow/amaken' , compact('amaken'));
    }
    
/**
 * لیست تبلیغات
 */
    public function tablighat()
    {
        $Khadems=Khadem::query('search');
        if ($keyword = request('search')){
            $Khadems->where('codemsr' , 'like' , "%$keyword%")->orWhere('namesr', 'like' , "%$keyword%")->orWhere('familysr' ,'like' , "%$keyword%");
        }

        $tablighat= $Khadems->latest()->orderBy('tajmi','DESC')->where('moavenat' , 'تبلیغات')->where('sherkatDarAzsr' , '0')->paginate(10);

        return view('listshow/tablighat' , compact('tablighat'));
    }

/**
 * لیسیت بسیج
 */
    public function basij()
    {
        $Khadems=Khadem::query('search');
        if ($keyword = request('search')){
            $Khadems->where('codemsr' , 'like' , "%$keyword%")->orWhere('namesr', 'like' , "%$keyword%")->orWhere('familysr' ,'like' , "%$keyword%");
        }

        $basij= $Khadems->latest()->orderBy('tajmi','DESC')->where('moavenat' , 'بسیج')->where('sherkatDarAzsr' , '0')->paginate(10);

        return view('listshow/basij' , compact('basij'));
    }



/**
 * Import data excel to database
 */
    public function saveImport(Request $request)
    {
        
        Excel::import(new KhademImport,$request->file);
        return 'successfully imported excel form';
    }


/**
 * view form excel to database
 * 
 */
    public function importexl()
    {
        return view('admin/input');
    }



    public function edit(khadem $khadems , $id)
    { 
        $khadem= $khadems->find($id);
        return view('edit' , compact('khadem'));        
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
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Khadem  $khadem
     * @return \Illuminate\Http\Response
     */
    public function show(Khadem $khadems , $id)
    {
        $khadem = $khadems->find($id);
        return view('show' , compact('khadem'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Khadem  $khadem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , Khadem $khadems , $id)
    {
        $results = $khadems->find($id);
        $results ->update([
            $results->namesr = $request->namesr,
            $results->familysr = $request->familysr,
        ]);
        return redirect('all');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Khadem  $khadem
     * @return \Illuminate\Http\Response
     */
    public function destroy(Khadem $khadems)
    {
        $khadems->delete();
        return back();
    }
}
