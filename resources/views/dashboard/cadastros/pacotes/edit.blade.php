@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('dashboard-sidebar')
    @include('dashboard.components._dashboard-sidebar')
@endsection

@section('dashboard-content')
    
    <form method="POST" action="{{ route('pacotes.update', $pacote->id) }}">
        @method('PUT')
        @csrf

        <h3>Edição do Pacote ({{ $pacote->nome }})</h3>
        
        @include('dashboard.cadastros.pacotes._form')
        
        <button type="submit" class="btn btn-primary btn-tool float-right mt-4">Editar</button>
    </form>

@endsection

@section('scripts')
    <script src="{{ asset('js/dashboard/cadastros/pacote/create.js') }}"></script>
    <script>
        $(document).ready(function() {
           
            // Pre seleciona os servicos
            $('#servicos').val(@json($servicosSelecionados)).trigger('change');

        });
    </script>
@endsection