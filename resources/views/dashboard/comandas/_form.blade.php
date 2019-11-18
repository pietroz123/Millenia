<div class="row mt-4">
    <div class="col-6">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="cliente">Cliente</label>
                    <select class="browser-default custom-select" id="cliente" name="cliente" required {{ !$comanda->aberta ? 'disabled' : '' }}>
                        <option></option>
                        @foreach ($clientes as $cliente)
                            <option value="{{ $cliente->id }}" {{ $comanda->id_cliente == $cliente->id ? 'selected' : '' }}>{{ $cliente->nome }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="data">Data</label>
                    <input type="date" name="data" id="data" class="form-control" value="{{ $comanda->created_at ? date('Y-m-d', $comanda->created_at->timestamp) : date('Y-m-d') }}" readonly>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="servicos">Serviços</label>
                    <select class="browser-default custom-select" id="servicos" name="servicos[]" multiple="multiple" {{ !$comanda->aberta ? 'disabled' : '' }}>
                        @foreach ($servicos as $servico)
                            <option value="{{ $servico->id }}" data-preco-servico="{{ $servico->preco }}">{{ $servico->nome }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="lista-servicos">
                    <ul class="list-group lista">
                    </ul>
                    <div class="total"></div>
                </div>
            </div>
        </div>
    </div>
</div>