<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="sidebarStyle.css">
    <link rel="stylesheet" href="view/styleClientes.css">
    <link rel="stylesheet" href="StyleCliente.js">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <script defer src="fontawesome-free-5.8.1-web/js/solid.js"> </script>
    <script defer src="fontawesome-free-5.8.1-web/css/all.css"> </script>


    <title>Cria Cliente</title>
</head>


<body>

    <?php
    require_once 'core/bootstrap.php';

    $setores = $app['bancoDeDados']->selecionaTabela('setor');
?>
  
        <div class="container">
            <h1 class="page-header cabeçalho">Criar Cliente</h1>
            <form method="post" action="criarCliente/criando">
                <div class="form-row">
                    <div class="form-group col-md-3 col-6">
                        <label>Setor</label>
                        <select class="form-control" name="id_setor" id="<?php echo $setor['id'];?>">
                            <option selected>Escolha o Setor ...</option>
                            <?php foreach ($setores as $setor) : ?>
                            <option><?php echo $setor['id'];?> -- <?php echo $setor['nome'];?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                </div>

                <div class="form-row">

                    <div class="form-group col-md-6 col-6">
                        <label for="inputEmail4">Nome</label>
                        <input type="text" name="nome" class="form-control" id="inputEmail4" placeholder="Insira o nome">
                    </div>
                    <div class="form-group col-md-6 col-6">
                        <label for="inputPassword4">Sobrenome</label>
                        <input type="text" name="sobrenome" class="form-control" id="inputPassword4" placeholder="Insira o sobrenome">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputAddress2">E-mail</label>
                        <input type="email" name="email" class="form-control" id="inputAddress2" placeholder="Insira o e-amil">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="inputAddress">CPF</label>
                        <input type="number" name="cpf" class="form-control" id="inputAddress" placeholder="Insira o CPF">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">Rua</label>
                        <input type="text" name="logradouro" class="form-control" id="inputCity" placeholder="Insira a rua">
                    </div>

                    <div class="form-group col-md-4 col-6">
                        <label for="inputCity">Cidade</label>
                        <input type="text" name="cidade" class="form-control" id="inputCity" placeholder="Insira a cidade">
                    </div>
                    <div class="form-group col-md-2 col-6">
                        <label for="inputState">Estado</label>
                        <select id="inputState" name="estado" class="form-control">
                            <option selected>Escolha ...</option>
                            <option value="AC">AC</option>
                            <option value="AL">AL</option>
                            <option value="AP">AP</option>
                            <option value="AM">AM</option>
                            <option value="BA">BA</option>
                            <option value="CE">CE</option>
                            <option value="DF">DF</option>
                            <option value="ES">ES</option>
                            <option value="GO">GO</option>
                            <option value="MA">MA</option>
                            <option value="MT">MT</option>
                            <option value="MS">MS</option>
                            <option value="MG">MG</option>
                            <option value="PA">PA</option>
                            <option value="PB">PB</option>
                            <option value="PR">PR</option>
                            <option value="PE">PE</option>
                            <option value="PI">PI</option>
                            <option value="RJ">RJ</option>
                            <option value="RN">RN</option>
                            <option value="RS">RS</option>
                            <option value="RO">RO</option>
                            <option value="RR">RR</option>
                            <option value="SC">SC</option>
                            <option value="SP">SP</option>
                            <option value="TO">TO</option>
                        </select>
                    </div>



                </div>



                <div class="form-row">
                    <div class="form-group col-md-4 col-8">
                        <label for="inputState">Bairro</label>
                        <input type="text" name="bairro" class="form-control" id="inputPassword4" placeholder="Insira o Bairro">

                    </div>

                    <div class="form-group col-md-2 col-4">
                        <label for="inputZip">Número</label>
                        <input type="text" name="numero_endereco" class="form-control" id="inputZip" placeholder="Num. endereço">
                    </div>


                </div>

                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Anotações</label>
                        <textarea class="form-control" name="anotacoes" id="exampleFormControlTextarea1" rows="3"></textarea>
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
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>


    </body>

    </html>