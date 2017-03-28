<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Apartamento;
use Illuminate\Support\Facades\Auth; //Fazer o controle de usuários

class ApartamentoController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    //public function __construct(){
    //  $this->middleware('auth');
      /*$this->middleware('auth', ['except' => 'index']); -- /* exceto o método login desta classe*/
    //}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $apartamentos = Apartamento::all();
      return view('apartamentos.index')->with('apartamentos',$apartamentos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $apartamentos = Apartamento::all();
      return view('apartamentos.create')->with('apartamentos', $apartamentos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Apartamento::create($request->all());
      session()->flash('info', 'Apartamento inserido com sucesso!');
      return redirect('/apartamentos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $apartamento = Apartamento::find($id);
      return view('apartamentos.show')->with('apartamento',$apartamento);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $apartamento = Apartamento::find($id);
      return view('apartamentos.edit')->with('apartamento',$apartamento);
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
      $apartamento = Apartamento::find($id);

      $apartamento->status = $request->status;
      $apartamento->descricao = $request->descricao;
      $apartamento->valor = $request->valor;

      $apartamento->save();

      return redirect('/apartamentos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Apartamento::destroy($id);
      return redirect('/apartamentos');
    }
}
