@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('dashboard-sidebar')
    @include('dashboard.components._dashboard-sidebar')
@endsection

@section('dashboard-content')
    
    <div class="d-flex justify-content-between w-100">
        <div>
            <h3>Profissionais</h3>
            <p>Número de Profissionais: {{ count($profissionais) }}</p>
        </div>
        <div>
            <a href="{{ route('profissionais.create') }}" class="btn btn-light btn-tool add">Adicionar um Profissional</a>
        </div>
    </div>

    @livewire('lista-profissionais')

    <!-- Modal -->
    <div class="modal fade modal-view" id="modal-profissional" tabindex="-1" role="dialog" aria-labelledby="modal-profissional-label"
    aria-hidden="true">
        {{-- Preenchido com AJAX --}}
    </div>

@endsection

@section('scripts')
    @livewireAssets
    <script src="{{ asset('js/dashboard/cadastros/profissional/index.js') }}"></script>
@endsection
