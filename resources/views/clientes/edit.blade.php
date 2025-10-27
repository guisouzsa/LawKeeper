<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualização de cliente</title>
</head>
<body>
    <h1>Atualize seus clientes aqui</h1>

    <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
        @method("PUT")
        @csrf

        <label for="nomeCompleto">Nome completo:</label>
        <input type="text" name="nomeCompleto" id="nomeCompleto" value="{{ $cliente->nomeCompleto }}">

        <label for="cpf_Cnpj">CPF ou CNPJ:</label>
        <input type="text" name="cpf_Cnpj" id="cpf_Cnpj" value="{{ $cliente->cpf_Cnpj }}">

        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" id="telefone" value="{{ $cliente->telefone }}">

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ $cliente->email }}">

        <label for="endereco">Endereço:</label>
        <input type="text" name="endereco" id="endereco" value="{{ $cliente->endereco }}">

        <input type="submit" value="Atualizar">
    </form>
</body>
</html>
