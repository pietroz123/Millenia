<div class="row mt-5">
    <div class="col-6">
        <h5>Informações Básicas</h5>

        <div class="form-group mt-3">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do produto" autocomplete="new" value="{{ $produto->nome }}">
        </div>

        <div class="form-group">
            <label for="marca">Marca</label>
            <select class="browser-default custom-select" id="marca" name="marca">
                <option></option>
                @foreach ($marcas as $marca)
                    <option value="{{ $marca->id }}" {{ $produto->id_marca == $marca->id ? 'selected' : '' }}>{{ $marca->nome }}</option>
                @endforeach
            </select>
        </div>
        
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="preco">Preço</label>
                    <input type="number" step="0.01" min="0.01" class="form-control" id="preco" name="preco" placeholder="Preço do produto" autocomplete="new" value="{{ $produto->preco }}">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="pontos">Pontos</label>
                    <input type="number" class="form-control" id="pontos" name="pontos" placeholder="Pontos" autocomplete="new" value="{{ $produto->pontos }}">
                </div>
            </div>
        </div>
    </div>

</div>