<table class="table table-borderless table-sm" id="tabela-horarios-disponiveis">
    <thead>
        <tr>
            <th>Segunda <span class="d-block data">{{ $segunda->format('d/m/Y') }}</span></th>
            <th>Terça <span class="d-block data">{{ $segunda->modify('+1 days')->format('d/m/Y') }}</span></th>
            <th>Quarta <span class="d-block data">{{ $segunda->modify('+1 days')->format('d/m/Y') }}</span></th>
            <th>Quinta <span class="d-block data">{{ $segunda->modify('+1 days')->format('d/m/Y') }}</span></th>
            <th>Sexta <span class="d-block data">{{ $segunda->modify('+1 days')->format('d/m/Y') }}</span></th>
            <th>Sábado <span class="d-block data">{{ $segunda->modify('+1 days')->format('d/m/Y') }}</span></th>
            <th>Domingo <span class="d-block data">{{ $segunda->modify('+1 days')->format('d/m/Y') }}</span></th>
        </tr>
    </thead>
    <tbody>
        @php
            $start = DateTime::createFromFormat('H:i', '10:00');
        @endphp

        @for ($i = 0; $i <= 32; $i++)

            <tr>

                @for ($j = 0; $j <= 6; $j++)
    
                    <td>
                        @if ($horariosDisponiveis[$j][$start->format('H:i')])
                            <button type="button" class="btn-opcao-horario" data-horario="{{ $start->format('H:i') }}">
                                <span class="horario-disponivel">
                                    {{ $start->format('H:i') }}
                                </span>
                            </button>
                        @else
                            -
                        @endif
                    </td>
                    
                @endfor
                
            </tr>
            
            @php
                $start->modify("+15 minutes");
            @endphp
            
        @endfor

    </tbody>
</table>