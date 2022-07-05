<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCursoRequest;
use App\Http\Requests\UpdateCursoRequest;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $users = User::all();
      $datos['cursos'] = Curso::all();
      $consulta['cursos'] = Curso::join('users', 'cursos.id','=','users.id')
      ->select(
        'cursos.id_curso',
        'cursos.nombre_curso',
        'cursos.descripcion',
        'cursos.precio',
        'cursos.clases',
        'users.id',
        'users.name')->get();
       return view('curso.report')->with($datos)->with($consulta)->with('users', $users);
    }
    public function tomarcursos()
    {
      $users = User::all();
      $datos['cursos'] = Curso::all();
      $consulta['cursos'] = Curso::join('users', 'cursos.id','=','users.id')
      ->select(
        'cursos.id_curso',
        'cursos.nombre_curso',
        'cursos.descripcion',
        'cursos.precio',
        'cursos.clases',
        'users.id',
        'users.name')->get();
       return view('curso.report2')->with($datos)->with($consulta)->with('users', $users);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCursoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $curso = $request->all();
      Curso::create($curso);
      return redirect()->route('cursos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function show(Curso $curso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function edit(Curso $curso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCursoRequest  $request
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_curso)
    {
      $datosCurso = request()->except(['_token', '_method']);
       Curso::where('id_curso','=',$id_curso)->update($datosCurso);
       $curso = Curso::findOrFail($id_curso);
       $datos['cursos'] = Curso::all();
       $consulta['cursos'] = Curso::join('users', 'cursos.id','=','users.id')
       ->select(
         'cursos.id_curso',
         'cursos.nombre_curso',
         'cursos.descripcion',
         'cursos.precio',
         'cursos.clases',
         'users.name')->get();
       return redirect('cursos')->with($datos)->with($consulta);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_curso)
    {
      Curso::findOrFail($id_curso)->forceDelete();
      return redirect('cursos');
    }
}
