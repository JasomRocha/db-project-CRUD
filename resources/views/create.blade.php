@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header form-header">Cadastrar Novo Sócio</div>
                <div class="card-body form-container">
                    <form action="{{ route('socios.createAction') }}" method="POST">
                        @csrf 
                        <div class="form-group">
                            <label for="nome" class="form-label">Nome:</label>
                            <input type="text" class="form-control form-input" id="nome" name="nome" required>
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">E-mail:</label>
                            <input type="email" class="form-control form-input" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="socio" class="form-label">Plano:</label>
                            <select class="form-control form-input" id="socio" name="socio" required>
                                <option value="Gigante">Gigante</option>
                                <option value="Norte-Sul">Norte-sul</option>
                                <option value="Caravelas">Caravelas</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="adesao" class="form-label">Adesão:</label>
                            <input type="date" class="form-control form-input" id="adesao" name="adesao" required>
                        </div>
                        <button type="submit" class="btn btn-primary form-button">Cadastrar</button>
                        <a href="{{ route('socios') }}" class="button-back">Voltar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection