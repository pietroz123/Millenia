@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('dashboard-sidebar')
    @include('dashboard.components._dashboard-sidebar')
@endsection

@section('dashboard-content')
    
    <div class="d-flex justify-content-between w-100">
        <div>
            <h3>Clientes</h3>
            <p>Número de Clientes: {{ count($clientes) }}</p>
        </div>
        <div>
            <a href="{{ route('clientes.create') }}" class="btn btn-light btn-tool add">Adicionar um cliente</a>
        </div>
    </div>
    
    @livewire('lista-clientes')

    <!-- Modal -->
    <div class="modal fade modal-view" id="modal-cliente" tabindex="-1" role="dialog" aria-labelledby="modal-cliente-label"
    aria-hidden="true">
        {{-- Preenchido com AJAX --}}
    </div>

@endsection

@section('scripts')
    @livewireAssets
    <script src="{{ asset('js/dashboard/cadastros/cliente/index.js') }}"></script>
@endsection
