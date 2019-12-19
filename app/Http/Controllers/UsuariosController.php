<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;




//use Illuminate\Support\Facades\Hash;
//use Illuminate\Support\Facades\Validator;







class UsuariosController extends Controller
{
    //
   /* protected function validator(array $req)
    {
        return Validator::make($req, [
            'name' => [ 'string', 'max:255'],
            'surname' => [ 'string', 'min:1'],
            'email' => [ 'string', 'email', 'max:255', 'unique:users'],
            'password' => [ 'string', 'min:8', 'confirmed'],
            'dni' => ['string', 'min:8', 'max:11'],
            'fechaNac' => ['date'],
            'domicilio' => ['string', 'max:100'],
            'localidad' => ['string', 'max:45'],
            'provincia' => ['string', 'max:45'],


        ]);
    }*/
public function usuario()
{
    $user = User::all();
        $vars = compact('user');

        return view('/modifUsuario', $user);
   
        }

    public function update(Request $req)
    {
        request()->validate([
            'name' => ['required','string', 'max:255'],
            'surname' => ['required','string', 'min:1'],
            //'email' => ['string', 'email', 'max:255', 'unique:users'],
           // 'password' => ['string', 'min:8', 'confirmed'],
            'dni' => ['required','string', 'min:8', 'max:11'],
            'fechaNac' => ['required','date'],
            'domicilio' => ['required','string', 'max:100'],
            'localidad' => ['required','string', 'max:45'],
            'provincia' => ['required','string', 'max:45'],

        ],
    [
        'name.required' => 'El nombre es obligatorio',
        'surname.required' => 'El apellido es obligatorio',
        'dni.required' => 'El DNI es obligatorio',
        'fechaNac.required' => 'La Fecha de Nacimiento es obligatoria',
        'domicilio.required' => 'El domicilio es obligatorio',
        'localidad.required' => 'La localidad es obligatoria',
        'provincia.required' => 'La provincia es obligatoria',
    ]);
        $user = Auth::user();

        $user->name = $req['name'];
        $user->surname = $req['surname'];
       // $user->email = $req['email'];
        $user->dni = $req['dni'];
        $user->fechaNac = $req['fechaNac'];
        $user->domicilio = $req['domicilio'];
        $user->localidad = $req['localidad'];
        $user->provincia = $req['provincia'];
       if( $user->password) {
            $user->password = Hash::make($req['password']);
           
       }
       if($req->hasfile('avatar'))
       {
            $req->validate([
                'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5000',
                
            ]);
            $avatarName = $user->id . '_avatar' . time() . '.' . request()->avatar->getClientOriginalExtension();

            $req->avatar->storeAs('avatars', $avatarName);

            $user->avatar = $avatarName;

       }
        /*$validator = Validator::make($req->all(), [
            'name' => ['string', 'max:255'],
            'surname' => ['string', 'min:1'],
            //'email' => ['string', 'email', 'max:255', 'unique:users'],
           // 'password' => ['string', 'min:8', 'confirmed'],
            'dni' => ['string', 'min:8', 'max:11'],
            'fechaNac' => ['date'],
            'domicilio' => ['string', 'max:100'],
            'localidad' => ['string', 'max:45'],
            'provincia' => ['string', 'max:45'],


        ]);

        if ($validator->fails()) {
            return redirect('perfilusuario')
                ->withErrors($validator)
                ->withInput();
        }*/
            $user->save();

            return redirect('/perfilUsuario');
        
        
       
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
