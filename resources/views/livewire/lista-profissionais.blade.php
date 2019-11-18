<div>
        <div class="crud-tool-bar">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-search"></i>
                    </span>
                </div>
                <input type="text" name="buscar-cliente" id="buscar-cliente" class="form-control" placeholder="Buscar profissional..." wire:model="query">
            </div>
        </div>
    
        @if (count($profissionais) > 0)
            <table class="table table-cadastro">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Telefone Celular</th>
                        <th>Horário</th>
                        <th>Cor na Agenda</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($profissionais as $profissional)
                        <tr>
                            <td>{{ $profissional['nome'] }}</td>
                            <td>{{ $profissional['telefone_celular'] }}</td>
                            <td>{{ date('H:i', strtotime($profissional['horario_entrada'])) }} - {{ date('H:i', strtotime($profissional['horario_saida'])) }}</td>
                            <td>
                                <span class="cor-agenda-profissional" style="background-color: {{ $profissional['cor_agenda'] }};"></span>
                            </td>
                            <td class="td-actions">
                                <button class="btn-action view" data-id-profissional="{{ $profissional['id'] }}"><i class="fas fa-eye"></i></button>
                                <a href="{{ route('profissionais.edit', $profissional['id']) }}" class="btn-action"><i class="fas fa-pencil-alt"></i></a>
                                <form method="POST" action="{{ route('profissionais.destroy', $profissional['id']) }}" class="remove-form" onsubmit="return confirm('Você realmente quer remover este profissional?');">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn-action"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="alert alert-info" role="alert">
                Nenhum profissional foi encontrado. Você pode cadastrar um clicando no botão acima.
            </div>
        @endif
    </div>
    