<div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="modal-profissional-label"><span class="font-weight-bold">{{ $profissional->nome }} </span> <span>(Profissional desde {{ date('d/m/Y', $profissional->created_at->timestamp) }})</span></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="">
                <div class="row">

                    <div class="col">

                        <h5 class="header">Informações Básicas</h5>
                        <div class="row info">
                            <div class="col font-weight-bold">Email</div>
                            <div class="col">{{ $profissional->email }}</div>
                        </div>
                        <div class="row info">
                            <div class="col font-weight-bold">CPF</div>
                            <div class="col">{{ $profissional->cpf }}</div>
                        </div>
                        <div class="row info">
                            <div class="col font-weight-bold">RG</div>
                            <div class="col">{{ $profissional->rg }}</div>
                        </div>
                        <div class="row info">
                            <div class="col font-weight-bold">Telefone Celular</div>
                            <div class="col">{{ $profissional->telefone_celular }}</div>
                        </div>
                        <div class="row info">
                            <div class="col font-weight-bold">Telefone Residencial</div>
                            <div class="col">{{ $profissional->telefone_residencial }}</div>
                        </div>

                        <h5 class="header mt-4">Informações Adicionais</h5>
                        <div class="row info">
                            <div class="col font-weight-bold">Horário de Entrada</div>
                            <div class="col">{{ $profissional->horario_entrada }}</div>
                        </div>
                        <div class="row info">
                            <div class="col font-weight-bold">Horário de Saída</div>
                            <div class="col">{{ $profissional->horario_saida }}</div>
                        </div>
                        <div class="row info">
                            <div class="col font-weight-bold">Cor na Agenda</div>
                            <div class="col">
                                <span class="cor-agenda-profissional" style="background-color: {{ $profissional->cor_agenda }};"></span>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <h5 class="header">Informações de Endereço</h5>
                        <div class="row info">
                            <div class="col font-weight-bold">Cidade</div>
                            <div class="col">{{ $profissional->cidade->nome }}</div>
                        </div>
                        <div class="row info">
                            <div class="col font-weight-bold">Estado</div>
                            <div class="col">{{ $profissional->cidade->estado->nome }}</div>
                        </div>
                        <div class="row info">
                            <div class="col font-weight-bold">CEP</div>
                            <div class="col">{{ $profissional->cep }}</div>
                        </div>
                        <div class="row info">
                            <div class="col font-weight-bold">Bairro</div>
                            <div class="col">{{ $profissional->bairro }}</div>
                        </div>
                        <div class="row info">
                            <div class="col font-weight-bold">Rua</div>
                            <div class="col">{{ $profissional->rua }}</div>
                        </div>
                        <div class="row info">
                            <div class="col font-weight-bold">Número</div>
                            <div class="col">{{ $profissional->numero_rua }}</div>
                        </div>
                        <div class="row info">
                            <div class="col font-weight-bold">Complemento</div>
                            <div class="col">{{ $profissional->complemento_rua }}</div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-light" data-dismiss="modal">Fechar</button>
        </div>
    </div>
</div>