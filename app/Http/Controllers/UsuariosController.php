<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;
use Validator;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = Usuarios::paginate(10);
	    return response()->json(['data'=>$users],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $user = new Usuarios();
            $user->create($request->all());
        
            return response()->json(['msj' => 'Usuario creado con exito'],200);
        } catch (\Throwable $th) {
            return response()->json(['msj' => 'Usuario no creado, revisar información nuevamente por favor'],500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            $user = Usuarios::findOrFail($id);
	        return response(['data' => $user],200);
        } catch (\Throwable $th) {
            return response()->json(['msj' => 'Usuario no encontrado'],404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $user = Usuarios::findOrFail($id);
            $user->update($request->all());

            return response()->json(['msj' => 'Usuario Actualizado'],200);
        } catch (\Throwable $th) {
            return response()->json(['msj' => 'El usuario no ha sido encontrado'],404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $user = Usuarios::findOrFail($id);
            $user->delete();

            return response()->json(['msj' => 'Usuario eliminado'],200);
        } catch (\Throwable $th) {
            return response()->json(['msj' => 'Error al eliminar el usuario, usuario no encontrado'],404);
        }	
    }
}
