<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendedore;
use App\Models\Zona;
use Illuminate\Support\Facades\Session;
class VendedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendedores = new Vendedore();
        $vendedores = $vendedores->all();
         return view('vendedores.index',compact('vendedores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('vendedores.createEdit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $vendedores = new Vendedore();
      $vendedores ->numero = $request->numero;
      $vendedores ->save();

      Session::flash('flash_message', '¡Zona creada correctamente!.');

      return redirect('vendedores');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vendedores = Vendedore::findorfail($id);
          $zonas = new Zona();
        $zonas = $zonas->all();
      return view('vendedores.createEdit',compact('vendedores','zonas'));
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
      $vendedores = Vendedore::find($id);
      $vendedores ->nombre = $request->nombre;
      $vendedores ->zona_id = $request->zona;
      $vendedores ->save();

      Session::flash('flash_message', '¡Zona creada correctamente!.');

      return redirect('vendedores');
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
