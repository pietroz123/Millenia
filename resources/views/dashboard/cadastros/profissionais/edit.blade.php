@extends('layouts.dashboard')


@section('title', 'Dashboard')

@section('dashboard-sidebar')
    @include('dashboard.components._dashboard-sidebar')
@endsection

@section('dashboard-content')
    
    <form method="POST" action="{{ route('profissionais.update', $profissional->id) }}">
        @method('PUT')
        @csrf

        <h3>Atualizar profissional ({{ $profissional->nome }})</h3>
        
        @include('dashboard.cadastros.profissionais._form')
        
        <button type="submit" class="btn btn-light btn-tool float-right mt-4">Atualizar</button>
    </form>


@endsection

@section('scripts')
    <script src="{{ asset('js/dashboard/cadastros/profissional/create.js') }}"></script>
    <script>
        $(document).ready(function() {
            
            // Cor da agenda
            $("#color-picker").spectrum({
                color: @json($profissional->cor_agenda),
                preferredFormat: "hex",
                showPaletteOnly: true,
                palette: [
                    ["#d50000","#e67c73","#f4511e","#f6bf26","#33b679","#0b8043","#039be5","#3f51b5"],
                    ["#7986cb","#8e24aa","#616161"],
                ]
            });

            // Pre seleciona os servicos
            $('#servicos').val(@json($servicosSelecionados)).trigger('change');

        });
    </script>
@endsection