<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Processo</title>
</head>
<body>
    <h1>Cadastre seus processos aqui</h1>

    <form action="{{ route('processos.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <label for="cliente_id">Cliente:</label>
        <select name="cliente_id" id="cliente_id" required>
            <option value="">Selecione um cliente</option>
            @foreach($clientes as $cliente)
                <option value="{{ $cliente->id }}">{{ $cliente->nomeCompleto }}</option>
            @endforeach
        </select>

        <br><br>

        <label for="numero_processo">Número do Processo:</label>
        <input type="text" name="numero_processo" id="numero_processo" required>

        <br><br>

        <label for="tipo">Tipo de Processo:</label>
        <select name="tipo" id="tipo" required>
            <option value="">-- Selecione --</option>
            <option value="Civil">Processo Civil</option>
            <option value="Penal">Processo Penal</option>
            <option value="Trabalhista">Processo Trabalhista</option>
            <option value="Administrativo">Processo Administrativo</option>
            <option value="Eleitoral">Processo Eleitoral</option>
            <option value="Constitucional">Processo Constitucional</option>
        </select>

        <br><br>

        <label for="status">Status:</label>
        <select name="status" id="status" required>
            <option value="">-- Selecione --</option>
            <option value="Novo">Novo</option>
            <option value="Pronto">Pronto</option>
            <option value="Em execução">Em execução</option>
            <option value="Espera">Espera (Bloqueado)</option>
            <option value="Terminado">Terminado</option>
        </select>

        <br><br>

        <label for="descricao">Descrição:</label>
        <textarea name="descricao" id="descricao"></textarea>

        <br><br>

        <label for="documento">Documento:</label>
        <input type="file" name="documento" id="documento">

        <br><br>

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
