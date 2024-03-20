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
                            <label for="id" class="form-label">Id:</label>
                            <input type="int" class="form-control form-input" id="id" name="id" required>
                        </div>
                        <button type="submit" class="btn btn-primary form-button">Localizar</button>
                        <a href="{{ route('products') }}" class="button-back">Voltar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection