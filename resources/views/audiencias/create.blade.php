<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Audiência</title>
</head>
<body>
    <h1>Cadastre suas audiências aqui</h1>

    <form action="{{ route('audiencias.store') }}" method="post">
        @csrf

        <label for="processo_id">Processo:</label>
        <select name="processo_id" id="processo_id" required>
            <option value="">Selecione um processo</option>
            @foreach($processos as $processo)
                <option value="{{ $processo->id }}">{{ $processo->numero_processo }}</option>
            @endforeach
        </select>

        <label for="titulo">Título da audiência:</label>
        <input type="text" name="titulo" id="titulo">

        <label for="tipo">Tipo:</label>
        <select name="tipo" id="tipo">
            <option value="Audiência de conciliação e mediação">Audiência de conciliação e mediação</option>
            <option value="Audiência de instrução e julgamento">Audiência de instrução e julgamento</option>
            <option value="Audiência de justificação">Audiência de justificação</option>
            <option value="Audiência de custódia">Audiência de custódia</option>
            <option value="Audiência una">Audiência una</option>
            <option value="Audiência de razões finais">Audiência de razões finais</option>
        </select>

        <label for="data_horario">Data e horário:</label>
        <input type="datetime-local" name="data_horario" id="data_horario">

        <label for="local">Local:</label>
        <input type="text" name="local" id="local">

        <label for="descricao">Descrição:</label>
        <textarea name="descricao" id="descricao"></textarea>

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
