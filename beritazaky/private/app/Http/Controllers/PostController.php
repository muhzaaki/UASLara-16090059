<?php

namespace App\Http\Controllers;

use App\Post;
use App\article;
use App\cat;
use App\logs;
use Illuminate\Http\Request;

class PostController extends Controller
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
       return view('backend.post');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.createpost');
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
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = article::find($id);
        $log = [
            'isi' => 'Someone Just Deleted an article" '.$item->judul.'"'
        ];
        $logs = logs::create($log);
        $cat = article::whereId($id)->update(['deleted'=>'1']);
        if ($cat)
        return redirect()->back()->with('success','Sukses hapus data');
    
    return redirect()->back()->with('success','Gagal hapus data');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $items = article::findOrFail($id);

       return view('backend.editpost', compact('items'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|min:5|max:90',
            'isiberita' => 'required',
            'category' => 'required',
            'preview' => 'required|min:151',
            
        ]);
        $test = article::select('foto')->where('id','=',$id)->get();
        foreach($test as $tst){
            $imgName = $tst->foto;
        }
        if($request->has('foto')){ 
        $uploadedFile = $request->file('foto');
        $imgName = time() . str_random(22) . '.' . $uploadedFile->getClientOriginalExtension();
        $uploadedFile->move(base_path('resources/images'), $imgName);
        }
        // else{
        //     $test = article::select('foto')->where('id','=',$id);
        //     foreach($test as $tst){
        //         $imgName = $tst->foto;
        //     }
        // }
        $cat =   Cat::select('id')->where('sub_kategori','=',$request->category)->get();
            foreach($cat as $i){
                $ids = $i->id;
            }
        $data = [
            'judul' => $request->judul,
            'kategori' => $request->category,
            'id_cat' => $ids,
            'isi' => $request->isiberita,   
            'preview' => $request->preview,
            'foto'  => $imgName
        ];
        $log = [
            'isi' => 'Someone Just Updated an article" '.$request->judul.'"'
        ];
        $logs = logs::create($log);
        $article = article::whereId($id)->update(['judul' => $request->judul,
        'kategori' => $request->category,
        'id_cat' => $ids,
        'isi' => $request->isiberita,   
        'preview' => $request->preview,
        'foto'  => $imgName]);
    
        

            return redirect()->back()->withSuccess('Sukses update data');
        
        return redirect()->back()->withError('Gagal update data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
