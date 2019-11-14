@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('dashboard-sidebar')
    @include('dashboard.components._dashboard-sidebar')
@endsection

@section('dashboard-content')
    
    <div class="d-flex justify-content-between w-100">
        <div>
            <h3>Profissionais</h3>
            <p>Número de Profissionais: {{ count($profissionais) }}</p>
        </div>
        <div>
            <a href="{{ route('profissionais.create') }}" class="btn btn-light btn-tool add">Adicionar um Profissional</a>
        </div>
    </div>

    @if (count($profissionais) > 0)
        <table class="table table-cadastro">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Telefone Celular</th>
                    <th>Área de Atuação</th>
                    <th>Cor na Agenda</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($profissionais as $profissional)
                    <tr>
                        <td>{{ $profissional->nome }}</td>
                        <td>{{ $profissional->telefone_celular }}</td>
                        <td></td>
                        <td>
                            <span class="cor-agenda-profissional" style="background-color: {{ $profissional->cor_agenda }};"></span>
                        </td>
                        <td class="td-actions">
                            <button class="btn-action view" data-id-profissional="{{ $profissional->id }}"><i class="fas fa-eye"></i></button>
                            <a href="{{ route('profissionais.edit', $profissional->id) }}" class="btn-action"><i class="fas fa-pencil-alt"></i></a>
                            <form method="POST" action="{{ route('profissionais.destroy', $profissional->id) }}" class="remove-form" onsubmit="return confirm('Você realmente quer remover este profissional?');">
                                @method('DELETE')
                                @csrf
                                <button class="btn-action"><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="alert alert-info" role="alert">
            Nenhum profissional foi cadastrado ainda. Você pode cadastrar um clicando no botão acima.
        </div>
    @endif

@endsection