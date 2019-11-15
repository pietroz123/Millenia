@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('dashboard-sidebar')
    @include('dashboard.components._dashboard-sidebar')
@endsection

@section('dashboard-content')
    
    <form method="POST" action="{{ route('pacotes.store') }}">
        @csrf

        <h3>Cadastro de Pacotes</h3>
        
        @include('dashboard.cadastros.pacotes._form')
        
        <button type="submit" class="btn btn-light btn-tool float-right mt-4">Cadastrar</button>
    </form>

@endsection

@section('scripts')
    <script src="{{ asset('js/dashboard/cadastros/pacote/create.js') }}"></script>
@endsection