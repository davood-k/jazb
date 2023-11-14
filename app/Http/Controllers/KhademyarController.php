<?php

namespace App\Http\Controllers;

use App\Khademyar;
use Illuminate\Http\Request;
use App\Exports\KhademyarExport;
use Maatwebsite\Excel\Facades\Excel;

class KhademyarController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/textbox');
    }


    public function export(Request $request)
    {

        $text = $request->input('expexcelsr');

        $lines = explode("\r\n", $text);

        $data = [];
        foreach ($lines as $line) {
            $data[] = [$line];
        }

        return Excel::download(new KhademyarExport($data), 'matchCode.xlsx');
    }

    /**
     * 
     * Show the form for information khodam.
     * 
     */
    public function info()
    {
        return ('coming soon...');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('efficient/insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $request->all();
    }

    /**
     *show PageString
     */
    public function pagestr(Khademyar $khademyar)
    {
        return view('efficient/PageString');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Khademyar  $khademyar
     * @return \Illuminate\Http\Response
     */
    public function show(Khademyar $khademyar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Khademyar  $khademyar
     * @return \Illuminate\Http\Response
     */
    public function edit(Khademyar $khademyar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Khademyar  $khademyar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Khademyar $khademyar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Khademyar  $khademyar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Khademyar $khademyar)
    {
        //
    }
}
