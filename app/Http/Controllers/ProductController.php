<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\product;

class ProductController extends Controller
{
    public readonly product $product;

    public function __construct(){
        $this->product = new product();
    }

    public function index(){
        $products = $this->product->all();
        return view('products', ['products' => $products->all()]);
    }

    public function create(Request $request){
        return view('createproduct');
    }

    public function createAction(Request $request)
    {
        // Validar os dados do formulário
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'preco' => 'required|numeric',
            'quantidade' => 'required|int',
        ]);
        
       
        // Criar um novo cliente com os dados recebidos do formulário
        $product = new product();
        $product->name = $request->nome;
        $product->preco = $request->preco;
        $product->quantidade = $request->quantidade;
        
        $product->save();
    
        // Redirecionar o usuário para uma página de confirmação, por exemplo
        return redirect()->route('products')->with('success', 'Sócio cadastrado com sucesso!');
       
    }

    public function edit(product $product)
    {
        return view('editp', ['product' => $product]);
    }

    public function update(Request $request, string $id)
    {
       $updated = $this->product->where('id', $id)->update($request->except(['_token', '_method']));
       
       if($updated){
        return redirect()->route('products')->with('success', 'Sócio editado com sucesso!');
        }
        return redirect()->back()->with('message', 'Error update');
    }

    public function delete(product $product){
        $product->delete();
        return redirect()->route('products')->with('success', 'Cliente excluído com sucesso!');
    }

    public function find(){
        return view('findp');
    }

    public function findAction(Request $request){
        // Validar os dados do formulário
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        $product = $this->product->where('name', $request->nome)->get();
        return view('resultsp', ['products' => $product]);
    }

    public function findById(){
        return view('findpid');
    }

    public function findByIdAction(Request $request){
        // Validar os dados do formulário
        $validatedData = $request->validate([
            'id' => 'required|int',
        ]);

        $product = $this->product->where('id', $request->id)->get();
        return view('resultspid', ['products' => $product]);
    }
}
