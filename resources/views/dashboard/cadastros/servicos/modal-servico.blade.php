<div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="modal-servico-label"><span class="font-weight-bold">{{ $servico->nome }} </span> <span>(Adicionado em {{ date('d/m/Y', $servico->created_at->timestamp) }})</span></h5>
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
                            <div class="col font-weight-bold">Ativo</div>
                            <div class="col">{{ $servico->ativo ? 'Sim' : 'Não' }}</div>
                        </div>
                        <div class="row info">
                            <div class="col font-weight-bold">Preço</div>
                            <div class="col">{{ $servico->preco }}</div>
                        </div>
                        <div class="row info">
                            <div class="col font-weight-bold">Tempo de Execução (em minutos)</div>
                            <div class="col">{{ $servico->tempo_execucao_em_minutos }}</div>
                        </div>
                        <div class="row info">
                            <div class="col font-weight-bold">Tempo de Duração (em dias)</div>
                            <div class="col">{{ $servico->duracao_em_dias }}</div>
                        </div>
                    </div>

                    <div class="col">
                        <h5 class="header">Informações Adicionais</h5>
                        <div class="row info">
                            <div class="col font-weight-bold">Taxa de Comissão (%)</div>
                            <div class="col">{{ $servico->comissao }}</div>
                        </div>
                        <div class="row info">
                            <div class="col font-weight-bold">Pontuação</div>
                            <div class="col">{{ $servico->pontos }}</div>
                        </div>
                        <div class="row info">
                            <div class="col font-weight-bold">Observações</div>
                            <div class="col">{{ $servico->observacoes }}</div>
                        </div>
                        <div class="row info">
                            <div class="col font-weight-bold">Enviar Notificação ao Cliente?</div>
                            <div class="col">{{ $servico->enviar_notificacao_cliente ? 'Sim' : 'Não' }}</div>
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