@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header form-header">Editar Sócio</div>
                <div class="card-body form-container">
                    <form action="{{ route('socios.update', [ 'client' => $client->id])}}" method="POST">
                        @csrf 
                        <div class="form-group">
                            <input type="hidden" name="_method" value="PUT">
                            <label for="name" class="form-label">Nome:</label>
                            <input type="text" class="form-control form-input" id="name" name="name" value="{{ $client->name}}">
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">E-mail:</label>
                            <input type="email" class="form-control form-input" id="email" name="email" value="{{ $client->email}}">
                        </div>
                        <div class="form-group">
                        
                            <label for="socio" class="form-label">Plano:</label>
                            <input type="hidden" name="_method" value="PUT">
                            <select class="form-control form-input" id="socio" name="socio">
                                <option value="Gigante" {{ $client->socio === 'Gigante' ? 'selected' : '' }}>Gigante</option>
                                <option value="Norte-Sul" {{ $client->socio === 'Norte-Sul' ? 'selected' : '' }}>Norte-sul</option>
                                <option value="Caravelas" {{ $client->socio === 'Caravelas' ? 'selected' : '' }}>Caravelas</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="_method" value="PUT">
                            <label for="adesao" class="form-label">Adesão:</label>
                                @php
                                    $adesaoDate = new DateTime($client->email_verified_at);
                                    $adesaoFormatted = $adesaoDate->format('Y-m-d');
                                @endphp
                            <input type="date" class="form-control form-input" id="adesao" name="email_verified_at"  value="{{ $adesaoFormatted }}">
                        </div>
                        <button type="submit" class="btn btn-primary form-button">Editar</button>
                        <a href="{{ route('socios') }}" class="button-back">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection