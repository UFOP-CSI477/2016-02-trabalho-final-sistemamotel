<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hospedagem;
use App\Produto;
use App\Apartamento;
use App\Hospedagemxproduto;
use App\User;
use Illuminate\Support\Facades\Auth; //Fazer o controle de usuários
use Illuminate\Support\Facades\DB;

class HospedagemController extends Controller
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
        $dados = DB::select(DB::raw("SELECT hp.id AS id_hp, h.id AS h_id, h.users_id AS id_user,
        h.apartamentos_id AS ap_id, u.nome AS nome_user, a.descricao AS adesc, p.id AS p_id, p.descricao AS pdesc, p.valorUnit AS pval
        FROM hospedagens AS h LEFT OUTER JOIN hospedagemxprodutos AS hp ON hp.id_hospedagem = h.id
        INNER JOIN apartamentos AS a ON a.id = h.apartamentos_id
	LEFT OUTER JOIN produtos AS p ON hp.id_produto = p.id
	INNER JOIN users AS u ON h.users_id = u.id
        ORDER BY h.apartamentos_id, u.nome, p.descricao"));
//        dd($dados);
      return view('hospedagens.index')->with('dados',$dados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produtos = Produto::all();
        $users = User::all();
        $apartamentos = Apartamento::all()->where('ocupado', '0');
      return view('hospedagens.create')->with('produtos', $produtos)->with('users', $users)->with('apartamentos', $apartamentos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Hospedagem::create($request->all());
      DB::table('apartamentos')->where('id', $request->apartamentos_id)->update(['ocupado' => 1]);
      session()->flash('info', 'OK!');
      return redirect('/hospedagens');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $hospedagem = Hospedagem::find($id);
      return view('hospedagens.show')->with('hospedagem',$hospedagem);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $hospedagem = Hospedagem::find($id);
      $produto = Produto::all();
      return view('hospedagens.edit')->with('hospedagem',$hospedagem)->with('produto',$produto);

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
      //dd($request);
      $hospedagem = Hospedagem::find($id);
      $hp = new Hospedagemxproduto();
      $hp->id_hospedagem = $request->id_hospedagem;
      $hp->id_produto = $request->id_produto;
      $hp->quantidade = $request->quantidade;
      $hp->save();


      $hospedagem->save();

      return redirect('/hospedagens');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $hospedagem = Hospedagem::find($id);
      $hp = DB::select(DB::raw("SELECT hp.id FROM hospedagens AS h INNER JOIN hospedagemxprodutos AS hp ON hp.id_hospedagem = h.id WHERE h.id = " . $id));
      foreach($hp as $h) {
	   Hospedagemxproduto::destroy($h->id);
      }
      Hospedagem::destroy($id);
      DB::table('apartamentos')->where('id', $hospedagem->apartamentos_id)->update(['ocupado' => 0]);
      return redirect('/hospedagens');
    }
}
