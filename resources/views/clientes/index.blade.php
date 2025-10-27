<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Clientes - SJG</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h2>Lista de Clientes</h2>

        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>CPF/CNPJ</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th>Endereço</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @if(count($clientes) > 0)
                    @foreach($clientes as $cliente)
                        <tr>
                            <td>{{ $cliente->nomeCompleto }}</td>
                            <td>{{ $cliente->cpf_Cnpj }}</td>
                            <td>{{ $cliente->telefone }}</td>
                            <td>{{ $cliente->email }}</td>
                            <td>{{ $cliente->endereco }}</td>
                            <td>
                               
                                <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-sm btn-warning">
                                    Editar
                                </a>

                                
                                <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" class="d-inline"
                                      onsubmit="return confirm('Tem certeza que deseja excluir este cliente?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">
                                        Excluir
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="6" class="text-center">Nenhum cliente cadastrado.</td>
                    </tr>
                @endif
            </tbody>
        </table>

        <div class="col-md-3 mb-3">
            <a href="{{ route('clientes.create') }}" class="btn btn-primary btn-lg w-10">Novo cliente</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
