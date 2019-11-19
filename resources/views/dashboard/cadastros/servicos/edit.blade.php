@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('dashboard-sidebar')
    @include('dashboard.components._dashboard-sidebar')
@endsection

@section('dashboard-content')
    
    <form method="POST" action="{{ route('servicos.update', $servico->id) }}">
        @method('PUT')
        @csrf

        <h3>Editar serviço ({{ $servico->nome }})</h3>
        
        @include('dashboard.cadastros.servicos._form')
        
        <button type="submit" class="btn btn-primary btn-tool float-right mt-4">Editar</button>
    </form>

@endsection

@section('scripts')
    <script src="{{ asset('js/dashboard/cadastros/servico/create.js') }}"></script>
@endsection
