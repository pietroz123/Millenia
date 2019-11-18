@extends('layouts.dashboard')

@section('title', 'Comandas')

@section('dashboard-sidebar')
    @include('dashboard.components._dashboard-sidebar')
@endsection

@section('dashboard-content')
    
    <div class="d-flex justify-content-between w-100 mb-4">
        <div>
            <h3>Comandas</h3>
            {{-- <p>Número de Clientes: {{ count($clientes) }}</p> --}}
        </div>
        <div>
            <a href="{{ route('comandas.create') }}" class="btn btn-light btn-tool add">Abrir nova comanda</a>
        </div>
    </div>

    <div class="comandas">
        @foreach ($comandas as $comanda)
            <a href="{{ route('comandas.edit', $comanda->id) }}" class="comanda">
                <div class="header">
                    {{ $comanda->cliente->nome }}
                </div>
                <div class="info-basica-comanda">
                    {{-- <span class="font-weight-bold">Cliente</span> <span class="valor">{{ $comanda->cliente->nome }}</span> --}}
                    <span class="font-weight-bold">Data</span> <span class="valor">{{ date('d/m/Y', $comanda->created_at->timestamp) }}</span>
                </div>
                <div class="servicos-comanda">
                    <ul class="list-group">
                        @foreach ($comanda->servicos as $servico)
                            <li class="list-group-item">{{ $servico->nome }}</li>
                        @endforeach
                    </ul>
                </div>
            </a>
        @endforeach
    </div>
    
    <!-- Modal -->
    <div class="modal fade modal-view" id="modal-comanda" tabindex="-1" role="dialog" aria-labelledby="modal-comanda-label"
    aria-hidden="true">
        {{-- Preenchido com AJAX --}}
    </div>

@endsection

@section('scripts')
    {{-- <script src="{{ asset('js/dashboard/comandas/create.js') }}"></script> --}}
@endsection
