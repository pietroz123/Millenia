@extends('layouts.dashboard')


@section('title', 'Dashboard')

@section('dashboard-sidebar')
    @include('dashboard.components._dashboard-sidebar')
@endsection

@section('dashboard-content')
    
    <form method="POST" action="{{ route('profissionais.store') }}">
        @csrf

        <h3>Cadastro de Profissional</h3>
        
        @include('dashboard.cadastros.profissionais._form')
        
        <button type="submit" class="btn btn-light btn-tool float-right mt-4">Cadastrar</button>
    </form>


@endsection

@section('scripts')
    <script src="{{ asset('js/dashboard/cadastros/profissional/create.js') }}"></script>
@endsection