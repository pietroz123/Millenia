@extends('layouts.dashboard')


@section('title', 'Dashboard')

@section('dashboard-sidebar')
    @include('dashboard.components._dashboard-sidebar')
@endsection

@section('dashboard-content')
    
    <h3>Cadastro de Profissional</h3>
    <div class="row mt-5">

        <div class="col">
            <h5 class="mb-3">Contato</h5>

            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nome do cliente">
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="cpf">CPF</label>
                        <input type="text" class="form-control" id="cpf" name="cpf">
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        <label for="rg">RG</label>
                        <input type="text" class="form-control" id="rg" name="rg" placeholder="99.999.999-9">
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="smartphone">Celular</label>
                        <input type="tel" class="form-control" id="smartphone" name="smartphone" placeholder="(15) 99999-9999">
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        <label for="phone">Residencial</label>
                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="(15) 33333-3333">
                    </div>
                </div>
            </div>
            
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email do cliente">
            </div>

            <h5 class="mt-4">Informações Adicionais</h5>

            <div class="form-group">
                <label class="mt-3" for="recommendation">Área de Atuação</label>
                <select class="browser-default custom-select" id="recommendation" name="recommendation">
                    <option selected>Seleciona a área</option>
                    <option value="1">Cabeleireiro</option>
                </select>
            </div>

            <div class="form-group">
                <label for="services">Serviços</label>
                <select class="browser-default custom-select" id="services" name="services[]" multiple="multiple">
                    <option value="1">Um</option>
                    <option value="2">Dois</option>
                    <option value="3">Três</option>
                    <option value="4">Quatro</option>
                </select>
            </div>

            <div class="form-group">
                <label for="color-picker">Cor para a agenda</label>
                <input type='text' id="color-picker">
            </div>

        </div>

        <div class="col">

            <h5 class="mb-3">Endereço</h5>
            
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
                        <input type="text" class="form-control" id="cep" placeholder="99999-999">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="neighborhood">Bairro</label>
                        <input type="text" class="form-control" id="neighborhood" placeholder="Bairro">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="street">Rua</label>
                        <input type="text" class="form-control" id="street" placeholder="Rua">
                    </div>
                </div>
                <div class="col-5">
                    <div class="form-group">
                        <label for="house-number">Número</label>
                        <input type="text" class="form-control" id="house-number" placeholder="Nº">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="complement">Complemento</label>
                <input type="text" class="form-control" id="complement" placeholder="Complemento">
            </div>

            <h5 class="mt-4">Horário</h5>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label class="mt-3" for="start-time">Entrada</label>
                        <input type="time" class="form-control" id="start-time" placeholder="Horário de entrada">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label class="mt-3" for="start-time">Saída</label>
                        <input type="time" class="form-control" id="start-time" placeholder="Horário de saída">
                    </div>
                </div>
            </div>

        </div>

        
    </div>
    
    <a href="#!" class="btn btn-light btn-tool float-right mt-4">Cadastrar</a>


@endsection

@section('scripts')
    <script src="{{ asset('js/dashboard/cadastros/profissional/create.js') }}"></script>
@endsection