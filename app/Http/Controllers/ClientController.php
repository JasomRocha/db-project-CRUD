<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\client;

class ClientController extends Controller
{
    public readonly client $client;

    public function __construct(){
        $this->client = new client();
    }

    public function index(){
        $clients = $this->client->all();
        return view('clients', ['clients' => $clients->all()]);
    }

    public function create(Request $request){
        return view('create');
    }

    public function createAction(Request $request)
    {
        // Validar os dados do formulário
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:clients,email',
            'socio' => 'required|in:Gigante,Norte-Sul,Caravelas',
            'adesao' => 'required|date',
        ]);
        
       
        // Criar um novo cliente com os dados recebidos do formulário
        $client = new client();
        $client->name = $request->nome;
        $client->email = $request->email;
        $client->socio = $request->socio;
        $client->email_verified_at = $request->adesao;
        $client->save();
    
        // Redirecionar o usuário para uma página de confirmação, por exemplo
        return redirect()->route('socios')->with('success', 'Sócio cadastrado com sucesso!');
       
    }

    public function edit(Client $client)
    {
        return view('edit', ['client' => $client]);
    }

    public function update(Request $request, string $id)
    {
       $updated = $this->client->where('id', $id)->update($request->except(['_token', '_method']));
       
       if($updated){
        return redirect()->route('socios')->with('success', 'Sócio editado com sucesso!');
        }
        return redirect()->back()->with('message', 'Error update');
    }

    public function find(client $client)
    {
        return view('find');
    }

    public function findAction(Request $request){
        // Validar os dados do formulário
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        $client = $this->client->where('name', $request->nome)->get();
        return view('results', ['client' => $client]);
    }

    public function delete(client $client){
            $client->delete();
            return redirect()->route('socios')->with('success', 'Cliente excluído com sucesso!');
    }


    public function findById(client $client)
    {
        return view('findId');
    }

    public function findByIdAction(Request $request){
        // Validar os dados do formulário
        $validatedData = $request->validate([
            'id' => 'required|integer',
        ]);

        $client = $this->client->where('id', $request->id)->get();
    
        return view('resultsid', ['client' => $client]);
    }

}
