<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{


    public function index(){
        return view('students.index', [
            'students' => Student::get(),
        ]);
    }


    public function create(){
        return view('students.create');
    }

    public function store(Request $request){
        $student = new Student();

        $student->nama = $request->nama;
        $student->nis = $request->nis;
        $student->nisn = $request->nisn;
        $student->kelas = $request->kelas;
        $student->tahun = $request->tahun;
        $student->ijazah = $request->ijazah;
        $student->skhun = $request->skhun;
        $student->status = $request->status;

        $student->save();

        session()->flash('success', 'Data Berhasil Ditambahkan');

        return redirect()->route('students.index');
    }

    public function edit($id){

        $student = Student::find($id);

        return view('students.edit',[
            'student' => $student,
        ]);
    }


    public function update(Request $request, $id){
        $student = Student::find($id);

        $student->nama = $request->nama;
        $student->nis = $request->nis;
        $student->nisn = $request->nisn;
        $student->kelas = $request->kelas;
        $student->tahun = $request->tahun;
        $student->ijazah = $request->ijazah;
        $student->skhun = $request->skhun;
        $student->status = $request->status;

        $student->save();

        session()->flash('info', 'Data Berhasil Diperbarui');

        return redirect()->route('students.index');
    }

    public function destroy($id){
        $student = Student::find($id);

        $student->delete();

        session()->flash('danger', 'Data Berhasil Dihapus');

        return redirect()->route('students.index');
    }

}
