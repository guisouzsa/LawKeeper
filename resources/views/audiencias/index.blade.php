<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Audiências - SJG</title>
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
        <h2>Lista de Audiências</h2>

        <table>
            <thead>
                <tr>
                    <th>Processo</th>
                    <th>Cliente</th>
                    <th>Título</th>
                    <th>Tipo</th>
                    <th>Data e horário</th>
                    <th>Local</th>
                    <th>Descrição</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @if(count($audiencias) > 0)
                    @foreach($audiencias as $audiencia)
                        <tr>
                            <td>
                                @if($audiencia->processo)
                                    {{ $audiencia->processo->numero_processo }}
                                @else
                                    -
                                @endif
                            </td>

                            <td>
                                @if($audiencia->processo && $audiencia->processo->cliente)
                                    {{ $audiencia->processo->cliente->nomeCompleto }}
                                @else
                                    -
                                @endif
                            </td>

                            <td>{{ $audiencia->titulo }}</td>
                            <td>{{ $audiencia->tipo }}</td>
                            <td>{{ $audiencia->data_horario }}</td>
                            <td>{{ $audiencia->local }}</td>
                            <td>{{ $audiencia->descricao }}</td>

                            <td>
                                <a href="{{ route('audiencias.edit', $audiencia->id) }}" class="btn btn-warning">Editar</a>

                                <form action="{{ route('audiencias.destroy', $audiencia->id) }}" 
                                      method="POST" style="display:inline"
                                      onsubmit="return confirm('Tem certeza que deseja excluir esta audiência?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="8" style="text-align:center;">Nenhuma audiência cadastrada.</td>
                    </tr>
                @endif
            </tbody>
        </table>

        <div style="margin-top: 20px;">
            <a href="{{ route('audiencias.create') }}" class="btn btn-primary">Nova audiência</a>
        </div>
    </div>
</body>
</html>
