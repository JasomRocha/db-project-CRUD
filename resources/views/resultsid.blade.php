@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header form-header">Encontrar Sócio</div>
                <div class="card-body form-container">
                    <form action="{{ route('socios.findbyid') }}" method="POST">
                        @csrf 
                        <div class="form-group">
                            <label for="id" class="form-label">Id:</label>
                            <input type="int" class="form-control form-input" id="id" name="id" required>
                        </div>
                        <button type="submit" class="btn btn-primary form-button">Localizar</button>
                        <a href="{{ route('socios') }}" class="button-back">Voltar</a>
                    </form>
                </div>
            </div>
            <div class="mt-4"> <!-- Adiciona um espaço entre os botões e a tabela -->
                <div class="card">
                    <div class="card-header">Sócios do Gigante </div>
                    <div class="card-body">
                        <div class="table-responsive"> <!-- Para tornar a tabela responsiva em dispositivos pequenos -->
                            <table class="table table-striped table-hover"> <!-- Adiciona listras nas linhas e destaca a linha ao passar o mouse -->
                                <thead class="thead-dark"> <!-- Define o cabeçalho da tabela com fundo escuro -->
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nome</th>
                                        <th scope="col">E-mail</th>
                                        <th scope="col">Sócio torcedor</th>
                                        <th scope="col">Adesão</th>
                                        <th scope="col">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($client as $client)
                                    <tr>
                                        <th scope="row">{{ $client->id }}</th>
                                        <td>{{ $client->name }}</td>
                                        <td>{{ $client->email }}</td>
                                        <td>{{ $client->socio }}</td>
                                        <td>{{ $client->email_verified_at }}</td>
                                        <td class="align-middle">
                                                <a href="{{ route('socios.edit', [ 'client' => $client->id ])}}">
                                                    <img src="{{ asset('assets/img/editar.png') }}" alt="editar" width="30" height="30" class="imagem-botao">
                                                </a>
                                                <a href="{{ route('socios.delete', [ 'client' => $client->id ])}}">
                                                    <img src="{{ asset('assets/img/excluir.png') }}" alt="excluir" width="30" height="30" class="imagem-botao" onclick="return confirm('Deseja realmente excluir esse usuario?')">
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
    </div>
</div>
@endsection