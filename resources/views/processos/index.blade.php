<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Processos - SJG</title>
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
        <h2>Lista de Processos</h2>

        <table>
            <thead>
                <tr>
                    <th>Cliente</th>
                    <th>Número do Processo</th>
                    <th>Tipo</th>
                    <th>Status</th>
                    <th>Descrição</th>
                    <th>Documento</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @if(count($processos) > 0)
                    @foreach($processos as $processo)
                        <tr>
                            <!-- NOME DO CLIENTE -->
                            <td>{{ $processo->cliente->nomeCompleto }}</td>

                            <td>{{ $processo->numero_processo }}</td>
                            <td>{{ $processo->tipo }}</td>
                            <td>{{ $processo->status }}</td>
                            <td>{{ $processo->descricao }}</td>

                            <td>
                                @if($processo->documento)
                                    <a href="{{ asset('storage/' . $processo->documento) }}" target="_blank">
                                        Ver Documento
                                    </a>
                                @else
                                    -
                                @endif
                            </td>

                            <td>
                                <a href="{{ route('processos.edit', $processo->id) }}" class="btn btn-warning">Editar</a>

                                <form action="{{ route('processos.destroy', $processo->id) }}" method="POST" style="display:inline"
                                      onsubmit="return confirm('Tem certeza que deseja excluir este processo?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="7" style="text-align:center;">Nenhum processo cadastrado.</td>
                    </tr>
                @endif
            </tbody>
        </table>

        <div style="margin-top: 20px;">
            <a href="{{ route('processos.create') }}" class="btn btn-primary">Novo processo</a>
        </div>
    </div>
</body>
</html>
