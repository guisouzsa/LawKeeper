<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualização de Processo</title>
</head>
<body>
    <h1>Atualize seus processos aqui</h1>

    <form action="{{ route('processos.update', $processo->id) }}" method="POST" enctype="multipart/form-data">
        @method("PUT")
        @csrf

        <label for="cliente_id">Cliente:</label>
        <select name="cliente_id" id="cliente_id" required>
            @foreach($clientes as $cliente)
                <option value="{{ $cliente->id }}" 
                    {{ $processo->cliente_id == $cliente->id ? 'selected' : '' }}>
                    {{ $cliente->nomeCompleto }}
                </option>
            @endforeach
        </select>

        <br><br>

        <label for="numero_processo">Número do Processo:</label>
        <input type="text" name="numero_processo" id="numero_processo" 
               value="{{ $processo->numero_processo }}" required>

        <br><br>

        <label for="tipo">Tipo de Processo:</label>
        <select name="tipo" id="tipo" required>
            <option value="Civil" {{ $processo->tipo == "Civil" ? "selected" : "" }}>Civil</option>
            <option value="Penal" {{ $processo->tipo == "Penal" ? "selected" : "" }}>Penal</option>
            <option value="Trabalhista" {{ $processo->tipo == "Trabalhista" ? "selected" : "" }}>Trabalhista</option>
            <option value="Administrativo" {{ $processo->tipo == "Administrativo" ? "selected" : "" }}>Administrativo</option>
            <option value="Eleitoral" {{ $processo->tipo == "Eleitoral" ? "selected" : "" }}>Eleitoral</option>
            <option value="Constitucional" {{ $processo->tipo == "Constitucional" ? "selected" : "" }}>Constitucional</option>
        </select>

        <br><br>

        <label for="status">Status:</label>
        <select name="status" id="status" required>
            <option value="Novo" {{ $processo->status == "Novo" ? "selected" : "" }}>Novo</option>
            <option value="Pronto" {{ $processo->status == "Pronto" ? "selected" : "" }}>Pronto</option>
            <option value="Em execução" {{ $processo->status == "Em execução" ? "selected" : "" }}>Em execução</option>
            <option value="Espera" {{ $processo->status == "Espera" ? "selected" : "" }}>Espera (Bloqueado)</option>
            <option value="Terminado" {{ $processo->status == "Terminado" ? "selected" : "" }}>Terminado</option>
        </select>

        <br><br>

        <label for="descricao">Descrição:</label>
        <textarea name="descricao" id="descricao">{{ $processo->descricao }}</textarea>

        <br><br>

        <label for="documento">Documento:</label>
        <input type="file" name="documento" id="documento">

        <br><br>

        <input type="submit" value="Atualizar">
    </form>
</body>
</html>
