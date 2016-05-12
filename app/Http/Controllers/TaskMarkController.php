<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\TaskMark;
use App\Task;
use App\ClassroomSubject;
use App\Classroom;
use App\Student;
use DB;


class TaskMarkController extends Controller
{
    public function addmark($id)
    {
        $task= Task::find($id);
        $classroom_subject_id = $task->classroom_subject_id;
        $task_title = $task->tajuk_tugasan;

        $classroomsubject = ClassroomSubject::find($classroom_subject_id);
        $classroom_id = $classroomsubject->classroom_id;

        $classroom = Classroom::find($classroom_id);
        $class_name = $classroom->nama_kelas;

        $students = Student::where('classroom_id',$classroom_id)->orderBy('created_at','desc')->get();
//        $students = DB::table('students')->where('classroom_id', $classroom_id)->get();

        return view('guru.tugasan.markah_tugasan.beri_markah_tugasan',compact('class_name', 'students','task_title','id'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('guru.tugasan.markah_tugasan.laman_utama_guru');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->isMethod('post')) {

            //dd($request->all());
          foreach( $request->student_id as $index => $val ) {
            $input = new TaskMark;
            $input->teacher_id = $request->input('teacher_id');
            $input->task_id = $request->input('task_id');
            $input->student_id = $val;
            $input->mark = $request->mark[$index];

            $input->save();
          }
        }

        $id = $request->input('task_id');

        $task = Task::find($id);
        $task->teacher_id           = $task->teacher_id;
        $task->classroom_subject_id = $task->classroom_subject_id;
        $task->tajuk_tugasan        = $task->tajuk_tugasan;
        $task->penerangan_tugasan   = $task->penerangan_tugasan;
        $task->tarikh_beri          = $task->tarikh_beri;
        $task->tarikh_hantar        = $task->tarikh_hantar;

        $task->save();
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
