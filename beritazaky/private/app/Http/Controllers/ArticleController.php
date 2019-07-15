<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\article;
use App\Cat;
use App\logs;
use Illuminate\Http\Request;

class ArticleController extends Controller
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
        $request->validate([
            'judul' => 'required|min:5|max:90',
            'isiberita' => 'required',
            'category' => 'required',
            'preview' => 'required|min:151',
            'foto' => 'required|mimes:jpeg,jpg,png'
        ]);

        $uploadedFile = $request->file('foto');
        $imgName = time() . str_random(22) . '.' . $uploadedFile->getClientOriginalExtension();
        $uploadedFile->move(base_path('resources/images'), $imgName);
     
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
            'isi' => 'You just Created an article with title = '.$request->judul
        ];
        $logs = logs::create($log);
        $article = article::create($data);
        if ($article)
            return redirect()->route('article.create')->withSuccess('Sukses tambah data');
        
        return redirect()->route('article.create')->withError('Gagal tambah data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\article  $article
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      DB::table('articles')->where('id',$id)->update(['view'=>DB::raw('view+1')]);
        $item = article::find($id);

        $log = [
            'isi' => 'Someone Just Viewed on " '.$item->judul.'"'
        ];
        $logs = logs::create($log);
        //return article::find($id);
        $data = article::where('deleted','=',0)->orderBy('view','desc')->take(4)->get();
        return view('frontend.post',compact('item','data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(article $article)
    {
        //
    }
 
}
