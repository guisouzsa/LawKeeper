<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
</head>
<body>
    <h1>Cadastre seus clientes aqui</h1>

    <form action="{{ route('clientes.store') }}" method="post">
        @csrf

        <label for="nomeCompleto">Nome completo:</label>
        <input type="text" name="nomeCompleto" id="nomeCompleto">

        <label for="cpf_Cnpj">CPF ou CNPJ:</label>
        <input type="text" name="cpf_Cnpj" id="cpf_Cnpj">

        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" id="telefone">

        <label for="email">Email:</label>
        <input type="email" name="email" id="email">

        <label for="endereco">Endereço:</label>
        <input type="text" name="endereco" id="endereco">

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
