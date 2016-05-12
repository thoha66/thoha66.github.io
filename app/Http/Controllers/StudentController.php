<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::with('admin')->orderBy('created_at','desc')->paginate(2);

        return view('pentadbir.pelajar.senarai_pelajar',['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pentadbir.pelajar.daftar_pelajar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new Student;

        $student->admin_id = $request->input('admin_id');
        $student->parent_id = $request->input('parent_id');
        $student->classroom_id = $request->input('classroom_id');

        $student->no_surat_beranak = $request->input('no_surat_beranak');
        $student->no_kp = $request->input('no_kp');
        $student->nama = $request->input('nama');

        $student->tingkatan = $request->input('tingkatan');
        $student->no_kp_penjaga = $request->input('no_kp_penjaga');
        $student->tarikh_lahir = $request->input('tarikh_lahir');
        $student->alamat = $request->input('alamat');
        $student->poskod = $request->input('poskod');
        $student->email = $request->input('email');
        $student->umur = $request->input('umur');
        $student->jantina = $request->input('jantina');

        $student->save();

        return redirect('student');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$student = Student::findOrFail($id);
        $student = Student::with('classroom')->find($id);
        return view('pentadbir.pelajar.papar_pelajar',['student' => $student]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        return view('pentadbir.pelajar.sunting_pelajar',['student' => $student]);
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
        $student = Student::find($id);
        
        $student->admin_id = $request->input('admin_id');
        $student->parent_id = $request->input('parent_id');
        $student->classroom_id = $request->input('classroom_id');

        $student->no_surat_beranak = $request->input('no_surat_beranak');
        $student->no_kp = $request->input('no_kp');
        $student->nama = $request->input('nama');

        $student->tingkatan = $request->input('tingkatan');
        $student->no_kp_penjaga = $request->input('no_kp_penjaga');
        $student->tarikh_lahir = $request->input('tarikh_lahir');
        $student->alamat = $request->input('alamat');
        $student->poskod = $request->input('poskod');
        $student->email = $request->input('email');
        $student->umur = $request->input('umur');
        $student->jantina = $request->input('jantina');

        $student->save();

        return redirect('student');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Student::destroy($id);
        return redirect('student');
    }
}
