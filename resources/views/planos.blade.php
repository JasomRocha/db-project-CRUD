@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="button">
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
                                <th scope="col">Mensalidade (R$)</th>
                                <th scope="col">Desconto (%)</th>
                                <th scope="col">Criado em</th>
                                <th scope="col">Atualizado em</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($plans as $plan)
                            <tr>
                                <th scope="row">{{ $plan->id }}</th>
                                <td>{{ $plan->name }}</td>
                                <td>{{ $plan->mensalidade }}</td>
                                <td>{{ $plan->desconto }}</td>
                                <td>{{ $plan->created_at }}</td>
                                <td>{{ $plan->updated_at }}</td>
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