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
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do cliente" autocomplete="new" required>
                </div>
        
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="tel-celular">Celular</label>
                            <input type="tel" class="form-control" id="tel-celular" name="tel-celular" placeholder="(15) 99999-9999" autocomplete="new" required>
                        </div>
                    </div>
        
                    <div class="col">
                        <div class="form-group">
                            <label for="tel-residencial">Residencial</label>
                            <input type="tel" class="form-control" id="tel-residencial" name="tel-residencial" placeholder="(15) 33333-3333" autocomplete="new">
                        </div>
                    </div>
                </div>
                
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="deseja-notificacao" name="deseja-notificacao" required>
                    <label class="custom-control-label" for="deseja-notificacao">Receber notificações</label>
                </div>
        
                <div class="form-group mt-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email do cliente" autocomplete="new" required>
                </div>
        
                <h5 class="mt-4">Informações Adicionais (Opcional)</h5>
        
                <label for="profissao">Profissão</label>
                <select class="browser-default custom-select" id="profissao" name="profissao">
                    <option></option>
                    @foreach ($profissoes as $profissao)
                        <option value="{{ $profissao->id }}">{{ $profissao->nome }}</option>
                    @endforeach
                </select>
               
                <label class="mt-3" for="indicacao">Indicação</label>
                <select class="browser-default custom-select" id="indicacao" name="indicacao">
                    <option selected>Indicação</option>
                    <option value="1">Amigo</option>
                </select>
            
            </div>
        
            <div class="col">
                <h5>Endereço</h5>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="cidade">Cidade</label>
                            <select class="browser-default custom-select" id="cidade" name="cidade">
                                <option></option>
                                @foreach ($cidades as $cidade)
                                    <option value="{{ $cidade->id }}">{{ $cidade->nome }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="estado">Estado</label>
                            <select class="browser-default custom-select" id="estado" name="estado">
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
                            <input type="text" class="form-control" id="cep" placeholder="99999-999" name="cep" autocomplete="new" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="bairro">Bairro</label>
                            <input type="text" class="form-control" id="bairro" placeholder="Bairro" name="bairro" autocomplete="new" required>
                        </div>
                    </div>
                </div>
        
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="rua">Rua</label>
                            <input type="text" class="form-control" id="rua" placeholder="Rua" name="rua" autocomplete="new" required>
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="form-group">
                            <label for="numero-rua">Número</label>
                            <input type="text" class="form-control" id="numero-rua" placeholder="Nº" name="numero-rua" autocomplete="new" required>
                        </div>
                    </div>
                </div>
        
                <div class="form-group">
                    <label for="complemento">Complemento</label>
                    <input type="text" class="form-control" id="complemento" placeholder="Complemento" name="complemento" autocomplete="new">
                </div>
        
            </div>
        
        </div>
        
        <button type="submit" class="btn btn-light btn-tool float-right mt-4">Cadastrar</button>
    </form>

@endsection

@section('scripts')
    <script src="{{ asset('js/dashboard/cadastros/cliente/create.js') }}"></script>
@endsection
