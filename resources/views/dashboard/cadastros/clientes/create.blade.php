@extends('layouts.dashboard')


@section('title', 'Dashboard')

@section('dashboard-sidebar')
    @include('dashboard.components._dashboard-sidebar')
@endsection

@section('dashboard-content')
    
    <form method="POST" action="{{ route('clientes.store') }}">
        @csrf

        <h3>Cadastro de Cliente</h3>
        
        <div class="row mt-5">
        
            <div class="col">
                <h5>Contato</h5>
        
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" class="form-control" id="name" placeholder="Nome do cliente" autocomplete="new">
                </div>
        
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="smartphone">Celular</label>
                            <input type="tel" class="form-control" id="smartphone" placeholder="(15) 99999-9999" autocomplete="new">
                        </div>
                    </div>
        
                    <div class="col">
                        <div class="form-group">
                            <label for="phone">Residencial</label>
                            <input type="tel" class="form-control" id="phone" placeholder="(15) 33333-3333" autocomplete="new">
                        </div>
                    </div>
                </div>
                
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="receive-notifications">
                    <label class="custom-control-label" for="receive-notifications">Receber notificações</label>
                </div>
        
                <div class="form-group mt-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Email do cliente" autocomplete="new">
                </div>
        
                <h5 class="mt-4">Informações Adicionais</h5>
        
                <label for="profession">Profissão</label>
                <select class="browser-default custom-select" id="profession">
                    <option></option>
                    @foreach ($profissoes as $profissao)
                        <option value="{{ $profissao->id }}">{{ $profissao->nome }}</option>
                    @endforeach
                </select>
               
                <label class="mt-3" for="recommendation">Indicação (Opcional)</label>
                <select class="browser-default custom-select" id="recommendation">
                    <option selected>Indicação</option>
                    <option value="1">Amigo</option>
                </select>
            
            </div>
        
            <div class="col">
                <h5>Endereço</h5>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="city">Cidade</label>
                            <select class="browser-default custom-select" id="city">
                                <option></option>
                                @foreach ($cidades as $cidade)
                                    <option value="{{ $cidade->id }}">{{ $cidade->nome }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="state">Estado</label>
                            <select class="browser-default custom-select" id="state">
                                <option></option>
                                @foreach ($estados as $estado)
                                    <option value="{{ $estado->id }}">{{ $estado->nome }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
        
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="cep">CEP</label>
                            <input type="text" class="form-control" id="cep" placeholder="99999-999" autocomplete="new">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="neighborhood">Bairro</label>
                            <input type="text" class="form-control" id="neighborhood" placeholder="Bairro" autocomplete="new">
                        </div>
                    </div>
                </div>
        
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="street">Rua</label>
                            <input type="text" class="form-control" id="street" placeholder="Rua" autocomplete="new">
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="form-group">
                            <label for="house-number">Número</label>
                            <input type="text" class="form-control" id="house-number" placeholder="Nº" autocomplete="new">
                        </div>
                    </div>
                </div>
        
                <div class="form-group">
                    <label for="complement">Complemento</label>
                    <input type="text" class="form-control" id="complement" placeholder="Complemento" autocomplete="new">
                </div>
        
            </div>
        
        </div>
        
        <button type="submit" class="btn btn-light btn-tool float-right mt-4">Cadastrar</button>
    </form>

@endsection

@section('scripts')
    <script src="{{ asset('js/dashboard/cadastros/cliente/create.js') }}"></script>
@endsection
