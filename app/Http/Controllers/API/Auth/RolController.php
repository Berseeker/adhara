<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use App\Models\Rol;

class RolController extends Controller
{
    public $status,$message,$data,$code;

    public function index()
    {
        $roles = Rol::all();

        return response()->json([
            'status' => 'success',
            'message' => 'Mostrando '.count($roles).' roles encontrados',
            'data' => $roles,
            'code' => 200
        ],200);
    }

    public function show($slug)
    {
        $rol = Rol::where('tag_rol',Str::of($slug)->lower())->first();
        if($rol == null)
        {
            $this->status = 'error';
            $this->message = 'El rol solicitado no existe';
            $this->data = null;
            $this->code = 404;
        }else
        {
            $this->status = 'success';
            $this->message = 'Mostrando el Rol seleccionado';
            $this->data = $rol;
            $this->code = 200;
        }

        return response()->json([
            'status' => $this->status,
            'message' => $this->message,
            'data' => $this->data,
            'code' => $this->code
        ],$this->code);
    }

    public function update(Request $request, $slug)
    {
        $rules = [
            'nombre' => 'required',
            'permisos' => 'required'
        ];

        $messages = [
            'nombre.required' => 'Asigna un nombre el Rol',
            'permisos.required' => 'Selecciona los permisos que tendra este Rol'
        ];
    
        $permisos = ['all'=>true,'showAny'=>true,'show'=>true,'store'=>true,'edit'=>true,'delete'=>true];
        
        $rol = Rol::where('tag_rol',Str::of($slug)->lower())->first();
        $user_permisos = json_decode($rol->permisos,true);
        $keys = array_keys($user_permisos);
        //dd($user_permisos);
        if(Arr::has($permisos, $keys[0])){
            dd('este permiso existe');
        }
        
        if($rol == null)
        {
            $this->status = 'error';
            $this->message = 'El rol solicitado no existe';
            $this->data = null;
            $this->code = 404;
        }else
        {
            $this->status = 'success';
            $this->message = 'Mostrando el Rol seleccionado';
            $this->data = $rol;
            $this->code = 200;
        }

        return response()->json([
            'status' => $this->status,
            'message' => $this->message,
            'data' => $this->data,
            'code' => $this->code
        ],$this->code);
    }
}
