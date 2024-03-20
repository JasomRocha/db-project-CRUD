@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header form-header">Editar Sócio</div>
                <div class="card-body form-container">
                <form action="{{ route('product.update', [ 'product' => $product->id])}}" method="POST">
                        @csrf 
                        <div class="form-group">
                            <input type="hidden" name="_method" value="PUT">
                            <label for="name" class="form-label">Nome:</label>
                            <input type="text" class="form-control form-input" id="name" name="name" value="{{ $product->name}}">
                        </div>
                        <div class="form-group">
                            <label for="double" class="form-label">preço:</label>
                            <input type="double" class="form-control form-input" id="preco" name="preco" value="{{ $product->preco}}">
                        </div>
                        <div class="form-group">
                            <label for="int" class="form-label">quantidade:</label>
                            <input type="int" class="form-control form-input" id="quantidade" name="quantidade" value="{{ $product->quantidade}}">
                        </div>
                        <button type="submit" class="btn btn-primary form-button">Editar</button>
                        <a href="{{ route('products') }}" class="button-back">Voltar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection