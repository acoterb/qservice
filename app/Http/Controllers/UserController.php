<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                       if(Auth::user()->rol != 1)
      {
        abort(403, "¡No tienes Permiso para usar este modulo!");
      }
                $user = new User();
                $user = $user->all();
                return view('usuarios.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        if(Auth::user()->rol != 1)
      {
        abort(403, "¡No tienes Permiso para usar este modulo!");
      }
        return view('usuarios.createEdit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
         if(Auth::user()->rol != 1)
      {
        abort(403, "¡No tienes Permiso para usar este modulo!");
      }
        $user = new User();
        $user->name =  $request->name;
        $user->apellidos =  $request->apellidos;
        $user->rol =  $request->rol;
        $user->usuario =  $request->usuario;
        $user->status =  1;
        $user->password = bcrypt($request->password);
        $user->save();
        
     return redirect('/usuarios');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        if (Auth::user()->id != $id)
        {
        abort(403, "¡Pillin! solo puedes modificar tu perfil");
      }
        $usuarios = User::findorfail($id);
         
          return view('usuarios.perfil',compact('usuarios'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            if(Auth::user()->rol != 1)
      {
        abort(403, "¡No tienes Permiso para usar este modulo!");
      }
         $usuarios = User::findorfail($id);
         
          return view('usuarios.createEdit',compact('usuarios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $usuarios = User::findorfail($id);
        $usuarios->name =  $request->name;
        $usuarios->apellidos =  $request->apellidos;
        if ($request->rol)
        {
          $usuarios->rol =  $request->rol;
        }
        if ($request->usuario)
        {
            $usuarios->usuario =  $request->usuario;
        }
        
        $usuarios->status =  1;
        if ($request->password)
        {
           $usuarios->password = bcrypt($request->password);  
        }

       
        $usuarios->save();
        
       return redirect('/home');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
