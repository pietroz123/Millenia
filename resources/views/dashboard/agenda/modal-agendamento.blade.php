
<h5>Novo Agendamento</h5>

<form method="POST" action="{{ route('agendamentos.store') }}">
    @csrf

    <div class="form-row">
        <div class="col">
            <label for="data">Data</label>
            <input type="date" name="data" id="data" value="{{ $data }}" class="form-control" readonly>
        </div>
        <div class="col">
            <label for="horario">Horário</label>
            <input type="time" name="horario" id="horario" value="{{ $horario }}" class="form-control" readonly>
        </div>
    </div>

    <div class="form-group mt-2">
        <label for="servico">Selecionar o serviço</label>
        <select class="browser-default custom-select" id="servico" name="servico">
            <option></option>
            @foreach ($servicos as $servico)
                <option value="{{ $servico->id }}">{{ $servico->nome }}</option>
            @endforeach
        </select>
    </div>
    
    <div id="selecionar-profissional">
    
    </div>
    
    <button class="btn btn-light js-cancelar-agendamento" type="button">Cancelar</button>
    <button class="btn btn-primary js-concluir-agendamento" disabled="disabled" type="submit">Concluir</button>
</form>