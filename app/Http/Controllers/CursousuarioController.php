<?php

namespace App\Http\Controllers;

use App\Models\Cursousuario;
use App\Models\Usuario;
use App\Models\Curso;
use Illuminate\Http\Request;

/**
 * Class CursousuarioController
 * @package App\Http\Controllers
 */
class CursousuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['admin']);
        $cursousuarios = Cursousuario::paginate();

        return view('cursousuario.index', compact('cursousuarios'))
            ->with('i', (request()->input('page', 1) - 1) * $cursousuarios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->user()->authorizeRoles(['admin']);
        $cursousuario = new Cursousuario();
        $usuario=Usuario::pluck('nombre','id','apellido');
        $curso=Curso::pluck('nombre','id');
        return view('cursousuario.create', compact('cursousuario','usuario','curso'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Cursousuario::$rules);

        $cursousuario = Cursousuario::create($request->all());

        return redirect()->route('cursousuarios.index')
            ->with('success', 'Se ha asignado el curso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cursousuario = Cursousuario::find($id);

        return view('cursousuario.show', compact('cursousuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        $request->user()->authorizeRoles(['admin']);
        $cursousuario = Cursousuario::find($id);
        $usuario=Usuario::pluck('nombre','id');
        $curso=Curso::pluck('nombre','id');

        return view('cursousuario.edit', compact('cursousuario','usuario','curso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Cursousuario $cursousuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cursousuario $cursousuario)
    {
        request()->validate(Cursousuario::$rules);

        $cursousuario->update($request->all());

        return redirect()->route('cursousuarios.index')
            ->with('success', 'Actualizado');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id, Request $request)
    {
        $request->user()->authorizeRoles(['admin']);
        $cursousuario = Cursousuario::find($id)->delete();

        return redirect()->route('cursousuarios.index')
            ->with('success', 'Eliminado exitosamente');
    }
}
