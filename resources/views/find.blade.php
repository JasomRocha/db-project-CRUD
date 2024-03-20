@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header form-header">Encontrar Sócio</div>
                <div class="card-body form-container">
                    <form action="{{ route('socios.find') }}" method="POST">
                        @csrf 
                        <div class="form-group">
                            <label for="nome" class="form-label">Nome:</label>
                            <input type="text" class="form-control form-input" id="nome" name="nome" required>
                        </div>
                        <button type="submit" class="btn btn-primary form-button">Localizar</button>
                        <a href="{{ route('socios') }}" class="button-back">Voltar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection