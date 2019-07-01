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

    <script defer src="fontawesome-free-5.8.1-web/js/solid.js"> </script>
    <script defer src="fontawesome-free-5.8.1-web/css/all.css"> </script>
    
    <title>Editar Cliente</title>
</head>


<body>
    <div class="container">
        <h1 class="page-header cabeçalho">Editar Cliente</h1>
        <form method="post" action="editarCliente/editando?clienteId=<?php echo $id ?> ">
            <div class="form-row">
                <div class="form-group col-md-3 col-6">
                    <label>Setor</label>
                    <select class="form-control" name="id_setor" id="<?php echo $setor->id?>" required>
                        
                        <?php foreach ($Setores as $setor) : ?>
                        <?php if($setor->id == $cliente[0]->id_setor): ?>
                        <option value="<?=$setor->id?>" selected><?php echo $setor->id ?> -- <?=$setor->nome?></option>
                        <?php else: ?>
                        <option><?php echo $setor->id ?> -- <?php echo $setor->nome?></option>
                        <?php endif; ?>
                        <?php endforeach; ?>
                        
                    </select>
                </div>
            </div>

            <div class="form-row">

                <div class="form-group col-md-6 col-6">
                    <label for="inputEmail4">Nome</label>
                    <input type="text" name="nome" class="form-control" id="inputEmail4" value="<?php echo $cliente[0]->nome?>" placeholder="" required>
                    <input type="hidden" name="id" value="<?php echo $cliente[0]->id?>">

                </div>

                <div class="form-group col-md-6 col-6">
                    <label for="inputPassword4">Sobrenome</label>
                    <input type="text" name="sobrenome" class="form-control" id="inputPassword4" value="<?php echo $cliente[0]->sobrenome?>" placeholder="" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputAddress2">E-mail</label>
                    <input type="email" name="email" class="form-control" id="inputAddress2" value="<?php echo $cliente[0]->email?>" placeholder="" required>
                </div>

                <div class="form-group col-md-6">
                    <label for="inputAddress">CPF</label>
                    <input type="text" name="cpf" class="form-control" id="inputAddress" value="<?php echo $cliente[0]->cpf?>" placeholder="" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">Rua</label>
                    <input type="text" name="logradouro" class="form-control" value="<?php echo $cliente[0]->logradouro?>" id="inputCity" required>
                </div>

                <div class="form-group  col-6">
                    <label for="inputCity">Cidade</label>
                    <input type="text" name="cidade" class="form-control" id="inputCity" value="<?php echo $cliente[0]->cidade?>" required>
                </div>

            </div>



            <div class="form-row">
                <div class="form-group col-md-4 col-8">
                    <label for="inputState">Bairro</label>
                    <input type="text" name="bairro" class="form-control" id="inputPassword4" value="<?php echo $cliente[0]->bairro?>" placeholder="" required>

                </div>

                <div class="form-group col-md-2 col-4">
                    <label for="inputZip">Número</label>
                    <input type="text" name="numero_endereco" class="form-control" id="inputZip" value="<?php echo $cliente[0]->numero_endereco?>" required>
                </div>


            </div>

            <div class="form-row">

                <div class="form-group col-md-6">
                    <label for="inputEmail4">Anotações</label>
                    <textarea class="form-control" name="anotacoes" id="exampleFormControlTextarea1" rows="3" ><?php echo $cliente[0]->anotacoes?></textarea>
                </div>

            </div>

            <button type="submit" class="btn btn-primary" name="editandoCliente" >Confirmar</button>
            <a href="Clientes" class="btn btn-danger">Cancelar</a>
        </form>

    </div>









    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="public/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>

</body>

</html>