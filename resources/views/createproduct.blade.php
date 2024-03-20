@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header form-header">Cadastrar Novo Produto</div>
                <div class="card-body form-container">
                    <form action="{{ route('product.createAction') }}" method="POST">
                        @csrf 
                        <div class="form-group">
                            <label for="nome" class="form-label">Nome:</label>
                            <input type="text" class="form-control form-input" id="nome" name="nome" required>
                        </div>
                        <div class="form-group">
                            <label for="int" class="form-label">preço:</label>
                            <input type="int" class="form-control form-input" id="preco" name="preco" required>
                        </div>
                        <div class="form-group">
                            <label for="int" class="form-label">quantidade:</label>
                            <input type="int" class="form-control form-input" id="quantidade" name="quantidade" required>
                        </div>
                        <button type="submit" class="btn btn-primary form-button">Cadastrar</button>
                        <a href="{{ route('products') }}" class="button-back">Voltar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection