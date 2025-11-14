<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Tarefa</title>
</head>
<body>
    <h1>Cadastre suas tarefas aqui</h1>

    <form action="{{ route('tarefas.store') }}" method="post">
        @csrf

        <label for="titulo">Título da tarefa:</label>
        <input type="text" name="titulo" id="titulo">

        <label for="data_limite">Data limite:</label>
        <input type="date" name="data_limite" id="data_limite">

        <label for="status">Status:</label>
        <select name="status" id="status">
            <option value="Pendente">Pendente</option>
            <option value="Concluída">Concluída</option>
            <option value="Atrasada">Atrasada</option>
        </select>

        <label for="descricao">Descrição:</label>
        <textarea name="descricao" id="descricao"></textarea>

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
