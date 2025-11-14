<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualização de Tarefa</title>
</head>
<body>
    <h1>Atualize suas tarefas aqui</h1>

    <form action="{{ route('tarefas.update', $tarefa->id) }}" method="POST">
        @method("PUT")
        @csrf

        <label for="titulo">Título da tarefa:</label>
        <input type="text" name="titulo" id="titulo" value="{{ $tarefa->titulo }}">

        <label for="data_limite">Data limite:</label>
        <input type="date" name="data_limite" id="data_limite" value="{{ $tarefa->data_limite }}">

        <label for="status">Status:</label>
        <select name="status" id="status">
            <option value="Pendente" {{ $tarefa->status == 'Pendente' ? 'selected' : '' }}>Pendente</option>
            <option value="Concluída" {{ $tarefa->status == 'Concluída' ? 'selected' : '' }}>Concluída</option>
            <option value="Atrasada" {{ $tarefa->status == 'Atrasada' ? 'selected' : '' }}>Atrasada</option>
        </select>

        <label for="descricao">Descrição:</label>
        <textarea name="descricao" id="descricao">{{ $tarefa->descricao }}</textarea>

        <input type="submit" value="Atualizar">
    </form>
</body>
</html>
