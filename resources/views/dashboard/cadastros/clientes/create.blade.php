@extends('layouts.dashboard')


@section('title', 'Dashboard')

@section('dashboard-sidebar')
    @include('dashboard.components._dashboard-sidebar')
@endsection

@section('dashboard-content')
    
    <h3>Cadastro de Cliente</h3>
    
    <div class="row">
        <div class="col">
            <h5>Contato</h5>

            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" class="form-control" id="name" placeholder="Nome do cliente">
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="smartphone">Celular</label>
                        <input type="text" class="form-control" id="smartphone" placeholder="(15) 99999-9999">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="phone">Residencial</label>
                        <input type="text" class="form-control" id="phone" placeholder="(15) 33333-3333">
                    </div>
                </div>
            </div>

        </div>
        <div class="col">
            <h5>Endereço</h5>

        </div>
    </div>

@endsection
