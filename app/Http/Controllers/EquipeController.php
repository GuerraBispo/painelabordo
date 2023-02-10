<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use Illuminate\Http\Request;

class EquipeController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
   
    public function index()
    {
        $user_id = auth()->user()->id;
        $equipes = Equipe::where('user_id', $user_id)->paginate(10);
        return view('equipe.index', ['equipes' => $equipes]);
    }

    public function create()
    {
        return view('equipe.create');
    }

    public function store(Request $request)
    {
        $dados = $request->all('url_imagem', 'nome', 'pontos', 'user_id');
        $dados['user_id'] = auth()->user()->id;
        
        $equipe = Equipe::create($dados);
        
        return redirect()->route('equipe.show', ['equipe' => $equipe->id]);
    }

    public function show(equipe $equipe)
    {
        return view('equipe.show', ['equipe' => $equipe]);
    }

    public function edit(Equipe $equipe)
    {
        $user_id = auth()->user()->id;

        if($equipe->user_id == $user_id) {
            return view('equipe.edit', ['equipe' => $equipe]);
        }

        return view('acesso-negado');
    }

   
    public function update(Request $request, Equipe $equipe)
    {
        if(!$equipe->user_id == auth()->user()->id) {
            return view('acesso-negado');
        }

        $equipe->update($request->all());
        return redirect()->route('equipe.show', ['equipe' => $equipe->id]);
    }

    public function destroy(Equipe $equipe)
    {
        if(!$equipe->user_id == auth()->user()->id) {
            return view('acesso-negado');
        }
        $equipe->delete();
        return redirect()->route('equipe.index');
    }
   
}
