<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Teacher;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::with('admin')->orderBy('created_at','desc')->paginate(2);

        return view('pentadbir.guru.senarai_guru',['teachers' => $teachers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pentadbir.guru.daftar_guru');
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
            $teacher = new Teacher;

            $teacher->admin_id = $request->input('admin_id');
            $teacher->no_kp = $request->input('no_kp');
            $teacher->jenis_guru = $request->input('jenis_guru');

            $teacher->guru_kelas = $request->input('guru_kelas');
            $teacher->nama = $request->input('nama');
            $teacher->no_tel = $request->input('no_tel');

            $teacher->no_hp = $request->input('no_hp');
            $teacher->tarikh_lahir = $request->input('tarikh_lahir');
            $teacher->alamat = $request->input('alamat');
            $teacher->poskod = $request->input('poskod');
            $teacher->email = $request->input('email');
            $teacher->umur = $request->input('umur');
            $teacher->jantina = $request->input('jantina');

            $teacher->save();

        }
        return redirect('teacher');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('pentadbir.guru.papar_guru',['teacher' => $teacher]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teacher = Teacher::find($id);
        return view('pentadbir.guru.sunting_guru',['teacher' => $teacher]);
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

        $teacher = Teacher::find($id);


        $teacher->no_kp = $request->input('no_kp');
        $teacher->jenis_guru = $request->input('jenis_guru');

        $teacher->guru_kelas = $request->input('guru_kelas');
        $teacher->nama = $request->input('nama');
        $teacher->no_tel = $request->input('no_tel');

        $teacher->no_hp = $request->input('no_hp');
        $teacher->tarikh_lahir = $request->input('tarikh_lahir');
        $teacher->alamat = $request->input('alamat');
        $teacher->poskod = $request->input('poskod');
        $teacher->email = $request->input('email');
        $teacher->umur = $request->input('umur');
        $teacher->jantina = $request->input('jantina');

        $teacher->save();

        return redirect('teacher');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Teacher::destroy($id);
        return redirect('teacher');
    }
}
