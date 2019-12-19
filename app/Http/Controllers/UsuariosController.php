<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;




//use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;







class UsuariosController extends Controller
{
    //
public function usuario()
{
        $usuario = Auth::user();
        $vars = compact('usuario');

        return view('usuario', $vars);
}

    public function update(Request $req)
    {
        $user = Auth::user();

        $user->name = $req['name'];
        $user->surname = $req['surname'];
        $user->email = $req['email'];
        $user->dni = $req['dni'];
        $user->fechaNac = $req['fechaNac'];
        $user->domicilio = $req['domicilio'];
        $user->localidad = $req['localidad'];
        $user->provincia = $req['provincia'];
       if( $user->password) {
            $user->password = Hash::make($req['password']);
           
       }
       if($req->avatar)
       {
            $req->validate([
                'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5000',
                
            ]);
            $avatarName = $user->id . '_avatar' . time() . '.' . request()->avatar->getClientOriginalExtension();

            $req->avatar->storeAs('avatars', $avatarName);

            $user->avatar = $avatarName;

       }
        $validator = Validator::make($req->all(), [
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('post/create')
                ->withErrors($validator)
                ->withInput();
        }
        
        $user->save();

        return redirect('/index');
    }
    


    public function perfil($id)
    {

        //$vac= compact("id");

        $usuario = User::find($id);
        $vac = compact('usuario');

        return view("perfilUsuario", $vac);
    }

    public function perfilusuario()
    {
        $user = User::all();
        $vars = compact('user');

        return view('perfilUsuario', $user);
    }
public function editar()
    {
        $usuario = User::all();
        $vars = compact('usuario');

        return view('perfilUsuario', $vars);
    }
    public function profile()
    {
        return View('user.profile');
    }

    /*public function updateProfile(Request $request)
    {
        $rules = ['image' => 'required|image|max:1024*1024*1',];
        $messages = [
            'image.required' => 'La imagen es requerida',
            'image.image' => 'Formato no permitido',
            'image.max' => 'El máximo permitido es 1 MB',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect('user/profile')->withErrors($validator);
        } else {
            $name = str_random(30) . '-' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move('perfiles', $name);
            $user = new User;
            $user->where('email', '=', Auth::user()->email)
                ->update(['perfiles' => 'perfiles/' . $name]);
            return redirect('user')->with('status', 'Su imagen de perfil ha sido cambiada con éxito');
        }
    }*/
    
        
}
