<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        $rules = [
            'nombre' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required|same:password',
        ];

        $messages = [
            'nombre.required' => 'Es necesario asignar un nombre al usuario',
            'email.required' => 'Por favor escribe un correo electronico',
            'email.email' => 'Formato invalido de correo electronico',
            'password.required' => 'Por favor asigna una contraseña',
            'password.confirmed' => 'Es necesario que confirmes tu password',
            'password_confirmation.required' => 'Por favor confirma tu password',
            'password_confirmation.same' => 'Las contraseñas no concuerdan',
        ];

        $this->validate($request,$rules,$messages);

        //queda pendiente de investigar
        //dd(url()->previous());


        $user = new User();
        $user->name = Str::of(Str::of($request->nombre)->lower())->title();
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->rol_id = 4;// rol de recepcionista
        $user->save();

        return response()->json([
            'status' => 'success',
            'message' => 'El usuario se registro exitosamente',
            'data' => $user,
            'code' => 200
        ],200);
    }
}
