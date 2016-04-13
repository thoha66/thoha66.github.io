<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\News;
use App\Admin;
use DB;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

//        $newses = News::with('admin')->orderBy('created_at','desc')->get();
        $newses = News::with('admin')->orderBy('created_at','desc')->paginate(2);
//        $newses = News::all();
//        $newses = DB::table('news')
//            ->orderBy('created_at', 'desc')
//            ->get();

        return view('pentadbir.kemaskini_pengumuman',['newses' => $newses]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pentadbir.buat_pengumuman');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->isMethod('post'))
        {
            $news = new News;

            $news->admin_id = $request->input('admin_id');
            $news->tajuk = $request->input('tajuk');
            $news->tarikh_mula = $request->input('tarikh_mula');

            $news->tarikh_akhir = $request->input('tarikh_akhir');
            $news->masa_mula = $request->input('masa_mula');
            $news->masa_akhir = $request->input('masa_akhir');

            $news->tempat = $request->input('tempat');
            $news->penerangan_aktiviti = $request->input('penerangan_aktiviti');

            $news->save();

        }
        return redirect('news');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
