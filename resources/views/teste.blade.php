<table>
    <thead>
        <tr>
            <th>Segunda</th>
            <th>Terça</th>
            <th>Quarta</th>
            <th>Quinta</th>
            <th>Sexta</th>
            <th>Sábado</th>
            <th>Domingo</th>
        </tr>
    </thead>
    <tbody>
        @for ($i = 0; $i <= 32; $i++)

            @php
                $start = DateTime::createFromFormat('H:i', '10:00');
            @endphp

            <tr>

                @for ($j = 0; $j <= 6; $j++)
    
                    <td>
                        @if ($horariosDisponiveis[$j][$start->format('H:i')])
                            Sim
                        @else
                            Não
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