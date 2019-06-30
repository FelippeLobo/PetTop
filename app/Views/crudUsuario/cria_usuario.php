<!doctype html>
<html lang="pt-br">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">

    <title>Cria Usuário</title>
</head>

<body>
    <div class="container">
        <h1 class="page-header">Criar Usuário</h1>
        <form>
            <div class="form-row">
                <div class="form-group col-md-2 col-6">
                    <label for="inputPost">Cargo</label>
                    <select id="inputPost" class="form-control">
                        <option selected>Escolha...</option>
                        <option>Cargo 1</option>
                        <option>Cargo 2</option>
                        <option>Cargo 3</option>
                        <option>Cargo 4</option>
                        <option>Cargo 5</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6 col-6">
                    <label for="inputName">Nome</label>
                    <input type="text" class="form-control" id="inputName" placeholder="Escreva seu nome...">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail">E-mail</label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="Escreva seu e-mail...">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail">Confirme o e-mail</label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="Confirme seu e-mail...">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputPassword">Senha</label>
                    <input type="password" class="form-control" id="inputPassword" placeholder="Escolha sua senha...">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="file" class="custom-file-input" id="inputGroupFile01"
                        aria-describedby="inputGroupFileAddon01">
                    <label class="custom-file-label" for="inputGroupFile01">Selecionar imagem...</label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Confirmar</button>
            <a class="btn btn-secondary" href="usuario_especifico.html" role="button">Cancelar</a>
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="assets/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>

</body>

</html>