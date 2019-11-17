@extends('layouts.dashboard')

@section('title', 'Atualizar Comanda')

@section('dashboard-sidebar')
    @include('dashboard.components._dashboard-sidebar')
@endsection

@section('dashboard-content')
    
    <form method="POST" action="{{ route('comandas.update', $comanda->id) }}">
        @method('PUT')
        @csrf

        <h3>Editar Comanda ({{ $comanda->id }})</h3>
        
        @include('dashboard.comandas._form')
        
        <button type="submit" class="btn btn-light btn-tool float-right mt-4">Atualizar comanda</button>
    </form>

@endsection

@section('scripts')
    <script src="{{ asset('js/dashboard/comandas/create.js') }}"></script>
    <script>
        $(document).ready(function() {
            
            // Pre seleciona os servicos
            $('#servicos').val(@json($servicosSelecionados)).trigger('change');

        });
    </script>
@endsection
