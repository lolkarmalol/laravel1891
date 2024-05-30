<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\Teacher;
use App\Models\Student;
use App\Models\Module;

class CursoController extends Controller
{
    public function consultasEloquent()
    {
        $students = Student::all();
        $teachers = Teacher::all();
        $modules = Module::all();

        return view('curso.consultas', [
            'students' => $students,
            'teachers' => $teachers,
            'modules' => $modules,
        ]);
    }
}


/*
    public function index(){
        $cursos = Curso::orderBy('id','desc')->get();
        return view('curso.lista',compact('cursos'));
    }

    public function create(){
        return view('curso.create');
    }

    public function store(Request $request){
        $curso=new Curso();
        $curso->name=$request->name;
        $curso->descripcion=$request->descripcion;
        $curso->save();
        return $curso;
    }

    public function show(Curso $curso) {
        return view('curso.show', compact('curso'));
    }

    public function destroy(Curso $curso) {
        $curso->delete();
        return redirect()->route('curso.index');
    }

    public function edit (Curso $curso){

        return view('curso.edit',compact('curso'));

    }

    public function update(Request $request,Curso $curso){

        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->save();
        return redirect()->route('curso.index');
    }
*/


