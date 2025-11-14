<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualização de audiência</title>
</head>
<body>
    <h1>Atualize suas audiências aqui</h1>

    <form action="{{ route('audiencias.update', $audiencia->id) }}" method="POST">
        @method("PUT")
        @csrf

        <label for="titulo">Título da audiência:</label>
        <input type="text" name="titulo" id="titulo" value="{{ $audiencia->titulo }}">

        <label for="tipo">Tipo:</label>
        <select name="tipo" id="tipo">
            <option value="Audiência de conciliação e mediação" {{ $audiencia->tipo == 'Audiência de conciliação e mediação' ? 'selected' : '' }}>Audiência de conciliação e mediação</option>
            <option value="Audiência de instrução e julgamento" {{ $audiencia->tipo == 'Audiência de instrução e julgamento' ? 'selected' : '' }}>Audiência de instrução e julgamento</option>
            <option value="Audiência de justificação" {{ $audiencia->tipo == 'Audiência de justificação' ? 'selected' : '' }}>Audiência de justificação</option>
            <option value="Audiência de custódia" {{ $audiencia->tipo == 'Audiência de custódia' ? 'selected' : '' }}>Audiência de custódia</option>
            <option value="Audiência una" {{ $audiencia->tipo == 'Audiência una' ? 'selected' : '' }}>Audiência una</option>
            <option value="Audiência de razões finais" {{ $audiencia->tipo == 'Audiência de razões finais' ? 'selected' : '' }}>Audiência de razões finais</option>
        </select>

        <label for="data_horario">Data e horário:</label>
        <input type="datetime-local" name="data_horario" id="data_horario" value="{{ $audiencia->data_horario }}">

        <label for="local">Local:</label>
        <input type="text" name="local" id="local" value="{{ $audiencia->local }}">

        <label for="descricao">Descrição:</label>
        <textarea name="descricao" id="descricao">{{ $audiencia->descricao }}</textarea>

        <input type="submit" value="Atualizar">
    </form>
</body>
</html>
