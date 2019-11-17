@extends('layouts.dashboard')

@section('title', 'Comandas')

@section('dashboard-sidebar')
    @include('dashboard.components._dashboard-sidebar')
@endsection

@section('dashboard-content')
    
    <div class="d-flex justify-content-between w-100">
        <div>
            <h3>Comandas</h3>
            {{-- <p>Número de Clientes: {{ count($clientes) }}</p> --}}
        </div>
        <div>
            <a href="{{ route('comandas.create') }}" class="btn btn-light btn-tool add">Abrir nova comanda</a>
        </div>
    </div>

    @foreach ($comandas as $comanda)
        <a href="{{ route('comandas.edit', $comanda->id) }}">Comanda {{ $comanda->id }}</a>
    @endforeach
    
    <!-- Modal -->
    <div class="modal fade modal-view" id="modal-comanda" tabindex="-1" role="dialog" aria-labelledby="modal-comanda-label"
    aria-hidden="true">
        {{-- Preenchido com AJAX --}}
    </div>

@endsection

@section('scripts')
    {{-- <script src="{{ asset('js/dashboard/comandas/create.js') }}"></script> --}}
@endsection
