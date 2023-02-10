<?php

namespace App\Http\Controllers;

use App\Models\Piloto;
use Illuminate\Http\Request;

class PilotoController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
   
    public function index()
    {
        $user_id = auth()->user()->id;
        $pilotos = Piloto::where('user_id', $user_id)->paginate(10);
        return view('piloto.index', ['pilotos' => $pilotos]);
    }

    public function create()
    {
        return view('piloto.create');
    }

    public function store(Request $request)
    {
        $dados = $request->all('url_imagem_1', 'url_imagem_2', 'nome', 'equipe', 'pontos', 'user_id');
        $dados['user_id'] = auth()->user()->id;
        
        $piloto = Piloto::create($dados);
        
        return redirect()->route('piloto.show', ['piloto' => $piloto->id]);
    }

    public function show(Piloto $piloto)
    {
        return view('piloto.show', ['piloto' => $piloto]);
    }

    public function edit(Piloto $piloto)
    {
        $user_id = auth()->user()->id;

        if($piloto->user_id == $user_id) {
            return view('piloto.edit', ['piloto' => $piloto]);
        }

        return view('acesso-negado');
    }

   
    public function update(Request $request, Piloto $piloto)
    {
        if(!$piloto->user_id == auth()->user()->id) {
            return view('acesso-negado');
        }

        $piloto->update($request->all());
        return redirect()->route('piloto.show', ['piloto' => $piloto->id]);
    }

    public function destroy(Piloto $piloto)
    {
        if(!$piloto->user_id == auth()->user()->id) {
            return view('acesso-negado');
        }
        $piloto->delete();
        return redirect()->route('piloto.index');
    }
   
}
