<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="view/BootStrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="sidebarStyle.css" type="text/css">
    <link rel="stylesheet" href="view/styleClientes.css">
    <link rel="stylesheet" href="StyleCliente.js">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <script defer src="fontawesome-free-5.8.1-web/js/solid.js"> </script>
    <script defer src="fontawesome-free-5.8.1-web/css/all.css"> </script>


    <style>

    </style>

    <title>Crud Cliente</title>
</head>


<body>

    <?php
    session_start();
    if (isset($_SESSION['mensagem'])) : ?>
        <div class="alert alert-<?php echo $_SESSION['tipo_msg'] ?> alert-dismissible fade show" role="alert">
            <?php
            echo $_SESSION['mensagem'];
            unset($_SESSION['mensagem']);
            ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif ?>

    <div class="container">
        <div class="row cabeçalho">
            <h1 class="col-md-10 col-10 page-header d-none d-sm-block">Gerenciar Clientes</h1>
            <h1 class="col-md-10 col-10 page-header d-block d-sm-none">Clientes</h1>
            <a class="btn btn-primary col-md-2 col-2 cliente d-none d-sm-none d-md-none d-lg-block " href="criarCliente">
                <i class="fas fa-plus"></i> Novo Cliente
            </a>
            <a class="btn btn-primary col-md-2 col-2 cliente2 d-block d-sm-block d-md-block d-lg-none" href="criarCliente">
                <i class="fas fa-plus"></i>
            </a>
        </div>

        <table class="table table-striped table-hover table-condensed table-row">
            <thead>
                <tr class="row">
                    <th class="col-sm-1 col-2 col-md-2">ID</th>
                    <th class="col-sm-5 col col-md-6">Nome</th>
                    <!-- <th class="col-sm-5 col col-md-2">CPF</th>
                            <th class="col-sm-3 col d-none d-sm-none d-md-block col-md-4" >E-Mail</th> -->
                    <th class="col-sm-6 col-6 col-md-4 d-none d-sm-block d-md-block">Ações</th>

                </tr>
            </thead>
            <tbody>

                <?php

                require_once 'core/bootstrap.php';

                $clientes = $app['bancoDeDados']->selecionaTabela('cliente');
               
                foreach ($clientes as $cliente) : ?>
                    <tr class="row">
                        <th class="col-sm-1 col-2 col-md-2"><?php echo $cliente['id']; ?></th>
                        <td class="col-sm-5 col col-md-6"><?php echo $cliente['nome']; ?></td>
                        <!-- <td class="col-sm-5 col col-md-2">4154841954</td>
                                    <td class="col-sm-3 col-8 d-none d-sm-none d-md-block col-md-4" >cliente@exemplo.com</td> -->
                        <td class="col-sm-6 col-12 col-md-4">
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#showModal<?php echo $cliente['id']; ?>">
                                Visualizar
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="showModal<?php echo $cliente['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalScrollableTitle">Dados do
                                                Cliente
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <?php $setor=$app['bancoDeDados']->selecionaSetor($cliente['id_setor']);?>
                                            <h6>ID: <?php echo $cliente['id']; ?> &emsp; &emsp;&emsp;&emsp; Setor: <?php echo $cliente['id_setor']; ?> - <?php echo $setor['nome'];?>
                                                <h6>Nome: <?php echo $cliente['nome']; ?> &emsp; &emsp; Sobrenome: <?php echo $cliente['sobrenome']; ?></h6>
                                                <h6>E-mail: <?php echo $cliente['email']; ?> &emsp; &emsp; CPF: <?php echo $cliente['cpf']; ?></h6>
                                                <h6>Rua:  <?php echo $cliente['logradouro']; ?> &emsp; &emsp;&emsp;&nbsp; Número: "<?php echo $cliente['numero_endereco']; ?>"</h6>
                                                <h6>Bairro: <?php echo $cliente['bairro']; ?></h6>
                                                <h6>Cidade: <?php echo $cliente['cidade']; ?></h6>
                                                
                                                <h6>Anotações: <?php echo $cliente['anotacoes']; ?></h6>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="btn btn-warning btn-sm" href="editarCliente?edit=<?php echo $cliente['id']; ?>">Editar</a>
                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal<?php echo $cliente['id']; ?>">
                                Excluir
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="deleteModal<?php echo $cliente['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Excluir Cliente</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Tem certeza que deseja excluir este cliente?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                            <a href="apagaCliente?delete=<?php echo $cliente["id"]; ?>" class="btn btn-danger">Confirmar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>

                    </tr>
                <?php endforeach; ?>


            </tbody>
        </table>

        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>

    </div>






    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>


</body>

</html>