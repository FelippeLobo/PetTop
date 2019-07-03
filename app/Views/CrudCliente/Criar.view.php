<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="public/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/cssCliente/styleClientes.css">

    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <script defer src="public/fontawesome-free-5.9.0-web/js/solid.js"></script>
    <link rel="stylesheet" href="public/fontawesome-free-5.9.0-web/css/all.css">


    <title>Criar Cliente</title>
</head>


<body>
  
        <div class="container">
            <h1 class="page-header cabeçalho">Criar Cliente</h1>
            <form method="post" action="criarCliente/criando">
                <div class="form-row">
                    <div class="form-group col-md-3 col-6">
                        <label>Setor</label>
                        <select class="form-control" name="id_setor" id="<?php echo $setor->id?>" required>
                            <option selected>Escolha o Setor ...</option>
                            <?php foreach ($setores as $setor) : ?>
                            <option><?php echo $setor->id?> -- <?php echo $setor->nome?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                </div>

                <div class="form-row">

                    <div class="form-group col-md-6 col-6">
                        <label for="inputEmail4">Nome</label>
                        <input type="text" name="nome" class="form-control" id="validationDefaultUsername" placeholder="Insira seu nome" required>
                    </div>
                    <div class="form-group col-md-6 col-6">
                        <label for="inputPassword4">Sobrenome</label>
                        <input type="text" name="sobrenome" class="form-control" id="inputPassword4" placeholder="Insira o sobrenome" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputAddress2">E-mail</label>
                        <input type="email" name="email" class="form-control" id="inputAddress2" placeholder="Insira seu e-mail" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="inputAddress">CPF</label>
                        <input type="number" name="cpf" class="form-control" id="inputAddress" placeholder="Insira seu CPF" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">Rua</label>
                        <input type="text" name="logradouro" class="form-control" id="inputCity" placeholder="Insira sua rua" required>
                    </div>

                    <div class="form-group col-6">
                        <label for="inputCity">Cidade</label>
                        <input type="text" name="cidade" class="form-control" id="inputCity" placeholder="Insira sua cidade" required>
                    </div>
              </div>



                <div class="form-row">
                    <div class="form-group col-md-4 col-8">
                        <label for="inputState">Bairro</label>
                        <input type="text" name="bairro" class="form-control" id="inputPassword4" placeholder="Insira seu Bairro" required>

                    </div>

                    <div class="form-group col-md-2 col-4">
                        <label for="inputZip">Número</label>
                        <input type="text" name="numero_endereco" class="form-control" id="inputZip" placeholder="Num. endereço" required>
                    </div>


                </div>

                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Anotações</label>
                        <textarea class="form-control" name="anotacoes" id="exampleFormControlTextarea1" rows="3" placeholder="Digite algo extra que precisamos saber!"></textarea>
                    </div>

                </div>


                <button type="submit" class="btn btn-primary">Confirmar</button>
                <a href="Clientes" class="btn btn-danger">Cancelar</a>
            </form>

        </div>


        </div>

        </div>

        </div>


        <!-- jQuery CDN - Slim version (=without AJAX) -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <!-- Popper.JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <!-- Bootstrap JS -->
        <script src="public/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>

    </body>

    </html>