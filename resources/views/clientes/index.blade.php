<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Clientes - SJG</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .btn {
            padding: 5px 10px;
            text-decoration: none;
            margin-right: 5px;
            display: inline-block;
            color: #fff;
        }
        .btn-warning { background-color: #f0ad4e; }
        .btn-danger { background-color: #d9534f; }
        .btn-primary { background-color: #0275d8; }
    </style>
</head>
<body>
    <div>
        <h2>Lista de Clientes</h2>

        <table>
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
                                <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-warning">Editar</a>

                                <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" style="display:inline"
                                      onsubmit="return confirm('Tem certeza que deseja excluir este cliente?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="6" style="text-align:center;">Nenhum cliente cadastrado.</td>
                    </tr>
                @endif
            </tbody>
        </table>

        <div style="margin-top: 20px;">
            <a href="{{ route('clientes.create') }}" class="btn btn-primary">Novo cliente</a>
        </div>
    </div>
</body>
</html>
