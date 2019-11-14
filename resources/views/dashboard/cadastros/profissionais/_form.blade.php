<div class="row mt-5">

    <div class="col">
        <h5 class="mb-3">Contato</h5>

        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do profissional" autocomplete="new" value="{{ $profissional->nome }}" value="{{ $profissional->nome }}">
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="cpf">CPF</label>
                    <input type="text" class="form-control" id="cpf" name="cpf" autocomplete="new" value="{{ $profissional->cpf }}">
                </div>
            </div>

            <div class="col">
                <div class="form-group">
                    <label for="rg">RG</label>
                    <input type="text" class="form-control" id="rg" name="rg" placeholder="99.999.999-9" autocomplete="new" value="{{ $profissional->rg }}">
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="tel-celular">Celular</label>
                    <input type="tel" class="form-control" id="tel-celular" name="tel-celular" placeholder="(15) 99999-9999" autocomplete="new" value="{{ $profissional->telefone_celular }}">
                </div>
            </div>

            <div class="col">
                <div class="form-group">
                    <label for="tel-residencial">Residencial</label>
                    <input type="tel" class="form-control" id="tel-residencial" name="tel-residencial" placeholder="(15) 33333-3333" autocomplete="new" value="{{ $profissional->telefone_residencial }}">
                </div>
            </div>
        </div>
        
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email do profissional" autocomplete="new" value="{{ $profissional->email }}">
        </div>

        <h5 class="mt-4">Informações Adicionais</h5>

        <div class="form-group">
            <label class="mt-3" for="area-atuacao">Área de Atuação</label>
            <select class="browser-default custom-select" id="area-atuacao" name="area-atuacao">
                <option selected>Seleciona a área</option>
                <option value="1">Cabeleireiro</option>
            </select>
        </div>

        <div class="form-group">
            <label for="servicos">Serviços</label>
            <select class="browser-default custom-select" id="servicos" name="servicos[]" multiple="multiple">
                <option value="1">Um</option>
                <option value="2">Dois</option>
                <option value="3">Três</option>
                <option value="4">Quatro</option>
            </select>
        </div>

        <div class="form-group">
            <label for="color-picker">Cor para a agenda</label>
            <input type='text' id="color-picker" name="cor-agenda">
        </div>

    </div>

    <div class="col">

        <h5 class="mb-3">Endereço</h5>
        
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="cep">CEP</label>
                    <input type="text" class="form-control" id="cep" name="cep" placeholder="99999-999" autocomplete="new" value="{{ $profissional->cep }}">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="cidade">Cidade</label>
                    <select class="browser-default custom-select" id="cidade" name="cidade" value="{{ $profissional->id_cidade }}">
                        <option></option>
                        @foreach ($cidades as $cidade)
                            <option value="{{ $cidade->id }}">{{ $cidade->nome }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="bairro">Bairro</label>
                    <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro" autocomplete="new" value="{{ $profissional->bairro }}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="rua">Rua</label>
                    <input type="text" class="form-control" id="rua" name="rua" placeholder="Rua" autocomplete="new" value="{{ $profissional->rua }}">
                </div>
            </div>
            <div class="col-5">
                <div class="form-group">
                    <label for="numero-rua">Número</label>
                    <input type="text" class="form-control" id="numero-rua" name="numero-rua" placeholder="Nº" autocomplete="new" value="{{ $profissional->numero_rua }}">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="complemento">Complemento</label>
            <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Complemento" autocomplete="new" value="{{ $profissional->complemento_rua }}">
        </div>

        <h5 class="mt-4">Horário</h5>

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label class="mt-3" for="horario-entrada">Entrada</label>
                    <input type="time" class="form-control" id="horario-entrada" name="horario-entrada" placeholder="Horário de entrada" autocomplete="new" value="{{ $profissional->horario_entrada }}">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label class="mt-3" for="horario-saida">Saída</label>
                    <input type="time" class="form-control" id="horario-saida" name="horario-saida" placeholder="Horário de saída" autocomplete="new" value="{{ $profissional->horario_saida }}">
                </div>
            </div>
        </div>

    </div>

    
</div>