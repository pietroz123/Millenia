@extends('layouts.dashboard')


@section('title', 'Dashboard')

@section('dashboard-sidebar')
    @include('dashboard.components._dashboard-sidebar')
@endsection

@section('dashboard-content')
    
    <form method="POST" action="{{ route('produtos.store') }}">
        @csrf

        <h3>Cadastro de Produtos</h3>
        
        @include('dashboard.cadastros.produtos._form')
        
        <button type="submit" class="btn btn-light btn-tool float-right mt-4">Cadastrar</button>
    </form>

@endsection

@section('scripts')
    <script src="{{ asset('js/dashboard/cadastros/produto/create.js') }}"></script>
@endsection