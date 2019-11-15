<div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="modal-cliente-label"><span class="font-weight-bold">{{ $cliente->nome }} </span><span> (Cliente desde {{ date('d/m/Y', $cliente->created_at->timestamp) }})</span></h5>
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
                            <div class="col">{{ $cliente->email }}</div>
                        </div>
                        <div class="row info">
                            <div class="col font-weight-bold">Telefone Celular</div>
                            <div class="col">{{ $cliente->telefone_celular }}</div>
                        </div>
                        <div class="row info">
                            <div class="col font-weight-bold">Telefone Residencial</div>
                            <div class="col">{{ $cliente->telefone_residencial }}</div>
                        </div>
                        <div class="row info">
                            <div class="col font-weight-bold">Pontuação</div>
                            <div class="col">{{ $cliente->pontuacao }}</div>
                        </div>
                        <div class="row info">
                            <div class="col font-weight-bold">Profissão</div>
                            <div class="col">{{ $cliente->profissao ? $cliente->profissao->nome : 'Não especificado' }}</div>
                        </div>
                        <div class="row info">
                            <div class="col font-weight-bold">Deseja Notificação</div>
                            <div class="col">{{ $cliente->deseja_notificacao ? 'Sim' : 'Não' }}</div>
                        </div>
                    </div>

                    <div class="col">
                        <h5 class="header">Informações de Endereço</h5>
                        <div class="row info">
                            <div class="col font-weight-bold">Cidade</div>
                            <div class="col">{{ $cliente->cidade->nome }}</div>
                        </div>
                        <div class="row info">
                            <div class="col font-weight-bold">Estado</div>
                            <div class="col">{{ $cliente->cidade->estado->nome }}</div>
                        </div>
                        <div class="row info">
                            <div class="col font-weight-bold">CEP</div>
                            <div class="col">{{ $cliente->cep }}</div>
                        </div>
                        <div class="row info">
                            <div class="col font-weight-bold">Bairro</div>
                            <div class="col">{{ $cliente->bairro }}</div>
                        </div>
                        <div class="row info">
                            <div class="col font-weight-bold">Rua</div>
                            <div class="col">{{ $cliente->rua }}</div>
                        </div>
                        <div class="row info">
                            <div class="col font-weight-bold">Número</div>
                            <div class="col">{{ $cliente->numero_rua }}</div>
                        </div>
                        <div class="row info">
                            <div class="col font-weight-bold">Complemento</div>
                            <div class="col">{{ $cliente->complemento_rua }}</div>
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