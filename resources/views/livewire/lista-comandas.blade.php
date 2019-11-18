<div>

    <select class="browser-default custom-select" wire:model="abertas">
        <option selected>Selecionar o tipo de comanda</option>
        <option value="1">Abertas</option>
        <option value="0">Fechadas</option>
    </select>

    <div class="comandas mt-4">
        @foreach ($comandas as $comanda)
            @php
                $comanda = App\Comanda::find($comanda['id'])
            @endphp
            <a href="{{ route('comandas.edit', $comanda->id) }}" class="comanda">
                <div class="header">
                    {{ $comanda->cliente->nome }}
                </div>
                <div class="info-basica-comanda">
                    {{-- <span class="font-weight-bold">Cliente</span> <span class="valor">{{ $comanda->cliente->nome }}</span> --}}
                    <span class="font-weight-bold">Data</span> <span class="valor">{{ date('d/m/Y', $comanda->created_at->timestamp) }}</span>
                </div>
                <div class="servicos-comanda">
                    <ul class="list-group">
                        @foreach ($comanda->servicos as $servico)
                            <li class="list-group-item">{{ $servico->nome }}</li>
                        @endforeach
                    </ul>
                </div>
            </a>
        @endforeach
    </div>
</div>