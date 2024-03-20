@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="button">
        <a href="/socios/create"> Cadastrar </a>
        <a href="{{ route('socios.find')}}"> Pesquisar por Nome </a>
        <a href="{{ route('socios.findbyid')}}"> Pesquisar por Id </a>
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
                                <th scope="col">E-mail</th>
                                <th scope="col">Sócio torcedor</th>
                                <th scope="col">Adesão</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($clients as $client)
                            <tr>
                                <th scope="row">{{ $client->id }}</th>
                                <td>{{ $client->name }}</td>
                                <td>{{ $client->email }}</td>
                                <td>{{ $client->socio }}</td>
                                <td>{{ $client->email_verified_at }}</td>
                                <td class="align-middle">
                                    <a href="{{ route('socios.edit', [ 'client' => $client->id ])}}" >
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
@endsection