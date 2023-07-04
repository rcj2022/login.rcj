<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>

    <title>Cadastro de alunos</title>
</head>
<body class="bg-body-secondary">
    <div class="container p-5 bg-light w-50 mt-3">
        <form method="post"  name="aluno" action="cad.php">
            <div class="mb-3">
            <label for="nome" class="form-label">Nome completo</label>
            <input type="text" name="nome" id="idnome" class="form-control w-75" placeholder="Digite seu nome completo">
        </div>
        <div class="mb-3">
            <label for="nasc" class="form-label">Nascimento</label>
            <input type="date" name="nasc" id="idnasc" class="form-control w-50">
        </div>
        <div class="mb-3">
            <label for="cpf" class="form-label">CPF</label>
            <input type="text" name="cpf" id="idcpf" class="form-control w-50" placeholder="Digite apenas números" maxlength="15">
        </div>
        <div class="mb-3">
            <label for="mae" class="form-label">Nome da mãe</label>
            <input type="text" name="mae" id="idmae" class="form-control w-75" placeholder="Digite o nome da mãe completo">
        </div>
        <div class="mb-3">
            <label for="pai" class="form-label">Nome do pai</label>
            <input type="text" name="pai" id="idpai" class="form-control w-75" placeholder="Digite o nome do pai completo">
        </div>

        <button type="submit" value="cadastrar" class="btn btn-outline-success">Salvar</button>
        <button type="submit" class="btn btn-outline-info">Cancelar</button>
        </form>
    </div>
</body>