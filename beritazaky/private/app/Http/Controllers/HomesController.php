<?php

namespace App\Http\Controllers;

use App\homes;
use App\logs;
use Illuminate\Http\Request;

class HomesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\homes  $homes
     * @return \Illuminate\Http\Response
     */
    public function show(homes $homes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\homes  $homes
     * @return \Illuminate\Http\Response
     */
    public function edit(homes $homes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\homes  $homes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        $test = homes::whereId($id)->get();
        foreach($test as $tst){
            $foto = $tst->logo;
            $slider1 = $tst->slider1;
            $slider2 = $tst->slider2;
            $slider3 = $tst->slider3;
        }
        if($request->has('logo')){ 
        $uploadedFile = $request->file('logo');
        $foto= $uploadedFile->getClientOriginalName();
        $uploadedFile->move(base_path('resources/images'), $foto);
        }
        if($request->has('slider1')){ 
            $uploadedFile = $request->file('slider1');
            $slider1 = $uploadedFile->getClientOriginalName();
            $uploadedFile->move(base_path('resources/images'), $slider1);
            }
        if($request->has('slider2')){ 
            $uploadedFile = $request->file('slider2');
            $slider2 = $uploadedFile->getClientOriginalName();
            $uploadedFile->move(base_path('resources/images'), $slider2);
            }
        if($request->has('slider3')){ 
            $uploadedFile = $request->file('slider3');
            $slider3 = $uploadedFile->getClientOriginalName();
            $uploadedFile->move(base_path('resources/images'), $slider3);
            }
    
        $log = [
            'isi' => 'Home view Updated '
        ];
        $logs = logs::create($log);
        $homes = homes::whereId($id)->update(['footer' => $request->Footer,
        'numbering' => $request->numbering,
        'mostread' => $request->mostread,
        'logo' => $foto,   
        'slider1' => $slider1,
        'slider2'  => $slider2,
        'slider3' => $slider3 ]);
    
        

            return redirect()->back()->withSuccess('Sukses update Home');
        
        return redirect()->back()->withError('Gagal update Home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\homes  $homes
     * @return \Illuminate\Http\Response
     */
    public function destroy(homes $homes)
    {
        //
    }
}
