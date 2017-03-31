<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\User;

class UserController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //if(Auth::user()->type == 2) {
          $users = User::all();
          return view('users.index')->with('users', $users);
      //}  else {
      //    return redirect('/');
      //}
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      User::create($request->all());
      return redirect('/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      //if(Auth::user()->type == 2 || Auth::id() == $id) {
          $user = User::findOrFail($id);
          return view('users.show', ['user' => $user]);
      //}  else {
      //    return redirect('/');
      //}
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      //if(Auth::user()->type == 2 || Auth::id() == $id) {
          $user = User::findOrFail($id);
          return view('users.edit', ['user' => $user]);
      //}  else {
      //    return redirect('/');
      //}
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
      //if(Auth::user()->type == 2 || Auth::user()->type == 3) {
          $user = User::find($id);
          $user->nome = $request->get("nome");
          $user->telefone = $request->get("telefone");
          $user->email = $request->get("email");
          $user->password = $request->get("password");
          $user->tipo = $request->get("tipo");

          /*if ($request->file('imagem')!=null && $request->file('imagem')->isValid()) {
              $fnome = $request->file('imagem')->getClientOriginalName();
              $request->file('imagem')->move("imagens/", $fnome);
              $produto->nome = $fnome;
              die("xxxxx");
          }*/
          $user->save();
          //session()->flash('info', 'Produto atualizado!');
          return redirect('/users');
      //} else {
      //    return redirect('/');
      //}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $user = User::findOrFail($id);
      $user->delete();
      Session::flash('flash_message', 'Usuário deletado!');
      return redirect('/users');
    }
}
