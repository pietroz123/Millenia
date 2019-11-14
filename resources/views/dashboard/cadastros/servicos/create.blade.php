@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('dashboard-sidebar')
    @include('dashboard.components._dashboard-sidebar')
@endsection

@section('dashboard-content')
    
    {{-- <form method="POST" action="{{ route('clientes.store') }}">
        @csrf --}}

        <h3>Cadastro de Serviços</h3>
        
        @include('dashboard.cadastros.servicos._form')
        
        <button type="submit" class="btn btn-light btn-tool float-right mt-4">Cadastrar</button>
    {{-- </form> --}}

@endsection