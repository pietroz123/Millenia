@extends('layouts.dashboard')

@section('title', 'Abrir nova comanda')

@section('dashboard-sidebar')
    @include('dashboard.components._dashboard-sidebar')
@endsection

@section('dashboard-content')
    
    <form method="POST" action="{{ route('comandas.store') }}">
        @csrf

        <h3>Abrir nova comanda</h3>
        
        @include('dashboard.comandas._form')
        
        <button type="submit" class="btn btn-light btn-tool float-right mt-4">Abrir comanda</button>
    </form>

@endsection

@section('scripts')
    <script src="{{ asset('js/dashboard/comandas/create.js') }}"></script>
@endsection
