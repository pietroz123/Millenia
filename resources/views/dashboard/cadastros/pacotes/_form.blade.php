<div class="row mt-5">
    <div class="col-6">
        <h5 class="mb-3">Informações Básicas</h5>

        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do pacote" autocomplete="new" required value="{{ $pacote->nome }}">
        </div>

        <div class="form-group">
            <label for="servicos">Serviços</label>
            <select class="browser-default custom-select" id="servicos" name="servicos[]" multiple="multiple">
                @foreach ($servicos as $servico)
                    <option value="{{ $servico->id }}" data-preco-servico="{{ $servico->preco }}">{{ $servico->nome }}</option>
                @endforeach
            </select>
        </div>
        
        <div class="form-group">
            <label for="valor-sem-desconto">Valor (sem Desconto)</label>
            <input type="number" class="form-control" id="valor-sem-desconto" name="valor-sem-desconto" autocomplete="new" placeholder="Valor sem Desconto" readonly required value="{{ $pacote->valor_sem_desconto }}">
        </div>

        <div class="row">
            
            <div class="col">
                <div class="form-group">
                    <label for="valor-com-desconto">Valor (com Desconto)</label>
                    <input type="number" min="1" class="form-control" id="valor-com-desconto" name="valor-com-desconto" autocomplete="new" placeholder="Valor com Desconto" required value="{{ $pacote->valor_com_desconto }}">
                </div>
            </div>

            <div class="col">
                <div class="form-group">
                    <label for="desconto">Desconto (%)</label>
                    <input type="number" min="1" class="form-control" id="desconto" name="desconto" placeholder="Desconto" autocomplete="new" required value="{{ $pacote->desconto }}">
                </div>
            </div>
            
            
        </div>

        <div class="form-group">
            <label for="descricao">Descrição</label>
            <textarea class="form-control rounded-1" id="descricao" rows="3" placeholder="Descrição sobre o pacote" name="descricao" value="{{ $pacote->descricao }}"></textarea>
        </div>

        <label class="d-block mt-3">O pacote está ativo?</label>
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="ativo" name="ativo" {{ $pacote->ativo ? 'checked' : '' }} >
            <label class="custom-control-label" for="ativo"></label>
        </div>


    </div>
    
</div>
