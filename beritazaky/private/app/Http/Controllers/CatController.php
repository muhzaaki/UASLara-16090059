<?php

namespace App\Http\Controllers;


use App\Cat;
use App\logs;
use App\article;
use Illuminate\Http\Request;

class CatController extends Controller
{
         /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.cat');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.createcat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'Tags' => 'required',
            'Categori' => 'required',
            
        ]);

        $data = [
            'nama_kategori' => $request->Categori,
            'sub_kategori' => $request->Tags
        ];
        $log = [
            'isi' => 'You just Created a new Category " '.$request->Tags.'"'
        ];
        $logs = logs::create($log);
        $cat = cat::create($data);
        if ($cat)
            return redirect()->back()->with('success','Sukses tambah data');
        
        return redirect()->back()->with('success','Gagal tambah data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cat  $cat
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cat = Cat::whereId($id)->update(['deleted'=>'1']);
        $cats = Cat::find($id);
        $log = [
            'isi' => 'You just Delete categori " '.$cats->sub_kategori.'"'
        ];
        $logs = logs::create($log);
        if ($cat)
        return redirect()->back()->with('success','Sukses hapus data');
    
    return redirect()->back()->with('success','Gagal hapus data');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cat  $cat
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Cat::where('id','=',$id)->get();
        //return Cat::where('id','=',$id)->get();
        return view('backend.updatecat',compact('item'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cat  $cat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {           
        $request->validate([
            'Tags' => 'required',
            'Categori' => 'required',
            
        ]);

        $data = [
            'nama_kategori' => $request->Categori,
            'sub_kategori' => $request->Tags
        ];
        $cats = Cat::find($id);
        $log = [
            'isi' => 'You just Delete categori " '.$cats->sub_kategori.'"'
        ];
        $logs = logs::create($log);
        $cat = cat::whereId($id)->update(['nama_kategori'=>$request->Categori,'sub_kategori'=>$request->Tags]);
        $arc = article::where('id_cat','=',$id)->update(['kategori'=>$request->Tags]);
        if ($cat)
            return redirect()->back()->with('success','Sukses update data');
        
        return redirect()->back()->with('success','Gagal update data');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cat  $cat
     * @return \Illuminate\Http\Response
     */
    public function destroy(cat $cat)
    {
        //
    }
}
