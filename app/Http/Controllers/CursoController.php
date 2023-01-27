<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){

        $cursos = Curso::orderBy('id','desc')->paginate(10);
        return view('cursos.index',compact('cursos'));
    }

    public function create(){
        return view('cursos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required|max:50',
            'description' => 'required|min:10',
            'category' => 'required'
        ]);

        $curso = new Curso();
        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->categoria = $request->category;

        $curso->save();

        return redirect()->route('cursos.show',$curso);
    }

    public function edit($id)
    {
        $curso = Curso::find($id);

        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request,Curso $curso)
    {
        $request->validate([
            'name'=> 'required|max:50',
            'description' => 'required|min:10',
            'category' => 'required'
        ]);


        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->categoria = $request->category;
        $curso->save();

        return redirect()->route('cursos.show',$curso);
    }

    public function show($id){
        //compact('curso'); //  ['curso'=>$curso]
        // return view('cursos.show',['curso'=>$curso]);
        $curso = Curso::find($id);
        return view('cursos.show',compact('curso'));
    }
}
