<?php

namespace App\Http\Controllers;

use App\Models\Calendario;
use Illuminate\Http\Request;

class CalendarioController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
   
    public function index()
    {
        $user_id = auth()->user()->id;
        $calendarios = Calendario::where('user_id', $user_id)->paginate(10);
        return view('calendario.index', ['calendarios' => $calendarios]);
    }

    public function create()
    {
        return view('calendario.create');
    }

    public function store(Request $request)
    {
        $dados = $request->all('nome_gp','url_imagem', 'quinta', 'sexta_t1', 'sexta_t2', 'sabado_t1', 'sabado_t2', 'domingo');
        $dados['user_id'] = auth()->user()->id;
        
        $calendario = Calendario::create($dados);
        
        return redirect()->route('calendario.show', ['calendario' => $calendario->id]);
    }

    public function show(Calendario $calendario)
    {
        return view('calendario.show', ['calendario' => $calendario]);
    }

    public function edit(Calendario $calendario)
    {
        $user_id = auth()->user()->id;

        if($calendario->user_id == $user_id) {
            return view('calendario.edit', ['calendario' => $calendario]);
        }

        return view('acesso-negado');
    }

   
    public function update(Request $request, Calendario $calendario)
    {
        if(!$calendario->user_id == auth()->user()->id) {
            return view('acesso-negado');
        }

        $calendario->update($request->all());
        return redirect()->route('calendario.show', ['calendario' => $calendario->id]);
    }

    public function destroy(Calendario $calendario)
    {
        if(!$calendario->user_id == auth()->user()->id) {
            return view('acesso-negado');
        }
        $calendario->delete();
        return redirect()->route('calendario.index');
    }
   
   
}
