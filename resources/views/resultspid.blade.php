@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card">
            <div class="card-header form-header">Encontrar Produto</div>
                <div class="card-body form-container">
                    <form action="{{ route('product.findbyid') }}" method="POST">
                        @csrf 
                        <div class="form-group">
                            <label for="nome" class="form-label">Id:</label>
                            <input type="int" class="form-control form-input" id="id" name="id" required>
                        </div>
                        <button type="submit" class="btn btn-primary form-button">Localizar</button>
                        <a href="{{ route('products') }}" class="button-back">Voltar</a>
                    </form>
                </div>
            <div class="card">
                <div class="card-header">Sócios do Gigante </div>
                    <div class="table-responsive"> <!-- Para tornar a tabela responsiva em dispositivos pequenos -->
                        <table class="table table-striped table-hover"> <!-- Adiciona listras nas linhas e destaca a linha ao passar o mouse -->
                            <thead class="thead-dark"> <!-- Define o cabeçalho da tabela com fundo escuro -->
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Preço</th>
                                <th scope="col">Quantidade</th>
                                <th scope="col">Criado em</th>
                                <th scope="col">Atualizado em</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr>
                                <th scope="row">{{ $product->id }}</th>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->preco }}</td>
                                <td>{{ $product->quantidade }}</td>
                                <td>{{ $product->created_at }}</td>
                                <td>{{ $product->updated_at }}</td>
                                <td class="align-middle">
                                    <a href="{{ route('product.edit', [ 'product' => $product->id ])}}" >
                                        <img src="{{ asset('assets/img/editar.png') }}" alt="editar" width="30" height="30" class="imagem-botao">
                                    </a>
                                    <a href="{{ route('product.delete', [ 'product' => $product->id ])}}">
                                        <img src="{{ asset('assets/img/excluir.png') }}" alt="excluir" width="30" height="30" class="imagem-botao" onclick="return confirm('Deseja realmente excluir esse produto?')">
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection