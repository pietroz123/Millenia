<div>
    <div class="crud-tool-bar">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fas fa-search"></i>
                </span>
            </div>
            <input type="text" name="buscar-cliente" id="buscar-cliente" class="form-control" placeholder="Buscar cliente..." wire:model="query">
        </div>
    </div>

    @if (count($clientes) > 0)
        <table class="table table-cadastro">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Celular</th>
                    <th>Telefone</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $cliente)
                    <tr>
                        <td>{{ $cliente['nome'] }}</td>
                        <td>{{ $cliente['telefone_celular'] }}</td>
                        <td>{{ $cliente['telefone_residencial'] }}</td>
                        <td class="td-actions">
                            <button class="btn-action view" data-id-cliente="{{ $cliente['id'] }}"><i class="fas fa-eye"></i></button>
                            <a href="{{ route('clientes.edit', $cliente['id']) }}" class="btn-action"><i class="fas fa-pencil-alt"></i></a>
                            <form method="POST" action="{{ route('clientes.destroy', $cliente['id']) }}" class="remove-form" onsubmit="return confirm('Você realmente quer remover este cliente?');">
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
            Nenhum cliente foi encontrado. Você pode cadastrar um clicando no botão acima.
        </div>
    @endif
</div>
