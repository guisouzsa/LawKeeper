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

        <label for="numero_processo">Número do Processo:</label>
        <input type="text" name="numero_processo" id="numero_processo" value="{{ $processo->numero_processo }}">

        <label for="tipo">Tipo:</label>
        <input type="text" name="tipo" id="tipo" value="{{ $processo->tipo }}">

        <label for="status">Status:</label>
        <input type="text" name="status" id="status" value="{{ $processo->status }}">

        <label for="descricao">Descrição:</label>
        <textarea name="descricao" id="descricao">{{ $processo->descricao }}</textarea>

        <label for="documento">Documento:</label>
        <input type="file" name="documento" id="documento">

        <input type="submit" value="Atualizar">
    </form>
</body>
</html>
