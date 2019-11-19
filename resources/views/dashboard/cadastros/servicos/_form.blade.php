<div class="row mt-5">
        
    <div class="col">
        <h5>Informações Básicas</h5>

        <div class="form-group mt-3">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do serviço" autocomplete="new" value="{{ $servico->nome }}" required>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="preco">Preço</label>
                    <input type="number" step="0.01" min="0.01" class="form-control" id="preco" name="preco" placeholder="Preço do serviço" autocomplete="new" value="{{ $servico->preco }}" required>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="comissao">Comissão (%)</label>
                    <input type="number" step="0.1" class="form-control" id="comissao" name="comissao" placeholder="Comissão sobre o serviço" autocomplete="new" value="{{ $servico->comissao }}" required>
                </div>
            </div>
        </div>
        
        <div class="row mt-3">
            <div class="col">
                <div class="form-group">
                    <label for="tempo-execucao">Tempo de Execução (em minutos)</label>
                    <select class="browser-default custom-select" id="tempo-execucao" name="tempo-execucao">
                        <option></option>
                        <option value="5" {{ $servico->tempo_execucao_em_minutos == 5 ? 'selected' : '' }}>5 minutos</option>
                        <option value="10" {{ $servico->tempo_execucao_em_minutos == 10 ? 'selected' : '' }}>10 minutos</option>
                        <option value="15" {{ $servico->tempo_execucao_em_minutos == 15 ? 'selected' : '' }}>15 minutos</option>
                        <option value="30" {{ $servico->tempo_execucao_em_minutos == 30 ? 'selected' : '' }}>30 minutos</option>
                        <option value="45" {{ $servico->tempo_execucao_em_minutos == 45 ? 'selected' : '' }}>45 minutos</option>
                        <option value="60" {{ $servico->tempo_execucao_em_minutos == 60 ? 'selected' : '' }}>60 minutos</option>
                        <option value="75" {{ $servico->tempo_execucao_em_minutos == 75 ? 'selected' : '' }}>75 minutos</option>
                        <option value="90" {{ $servico->tempo_execucao_em_minutos == 90 ? 'selected' : '' }}>90 minutos</option>
                    </select>
                </div>
            </div>

            <div class="col">
                <div class="form-group">
                    <label for="pontos">Pontos</label>
                    <input type="number" class="form-control" id="pontos" name="pontos" placeholder="Pontos do serviço" autocomplete="new" value="{{ $servico->pontos }}" required>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="duracao">Duração (em dias)</label>
            <input type="number" class="form-control" id="duracao" name="duracao" placeholder="Duração média do serviço em dias" autocomplete="new" value="{{ $servico->duracao_em_dias }}" required>
        </div>

        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="enviar-notificacao" name="enviar-notificacao" {{ $servico->enviar_notificacao_cliente ? 'checked' : '' }}>
            <label class="custom-control-label" for="enviar-notificacao">Enviar notificações ao cliente após esse período</label>
        </div>
    
        <label class="d-block mt-3">O serviço está ativo?</label>
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="ativo" name="ativo" {{ $servico->ativo ? 'checked' : '' }}>
            <label class="custom-control-label" for="ativo"></label>
        </div>
        
    </div>
    <div class="col">
        <h5>Informações Extras</h5>

        <div class="form-group mt-3">
            <label for="produtos">Produtos</label>
            <select class="browser-default custom-select" id="produtos" name="produtos">
                <option>Produtos recomendados</option>
            </select>
        </div>

        <div class="form-group">
            <label for="observacoes">Observações</label>
            <textarea class="form-control rounded-1" id="observacoes" rows="3" placeholder="Observações sobre o serviço">{{ $servico->observacoes }}</textarea>
        </div>
    </div>

</div>