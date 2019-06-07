<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="sidebarStyle.css" type="text/css">
    <link rel="stylesheet" href="../CrudSetor/views/styleSetor.css" type="text/css">


    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <script defer src="fontawesome-free-5.8.1-web/js/solid.js"> </script>
    <script defer src="fontawesome-free-5.8.1-web/css/all.css"> </script>


    <style>

    </style>

    <title>Crud Setor</title>
</head>


<body>
    	
    <?php
        if(isset($_SESSION['mensagem'])) :?>
        <div class="alert alert-<?php echo $_SESSION['tipo_msg']?>">
        <?php
        echo $_SESSION['mensagem'];
        unset($_SESSION['mensagem']);
        ?>
        </div>
    <?php endif; ?>

    <div class="container">
        <div class="row cabeçalho">
            <h1 class="col-md-10 col-10 page-header d-none d-sm-block">Gerenciar Setores</h1>
            <h1 class="col-md-10 col-10 page-header d-block d-sm-none">Setores</h1>
            <a class="btn btn-primary col-md-2 col-2 cliente d-none d-sm-none d-md-none d-lg-block " href="criarSetor">
                <i class="fas fa-plus"></i> Novo Setor

            </a>

            <a class="btn btn-primary col-md-2 col-2 cliente2 d-block d-sm-block d-md-block d-lg-none" href="criarSetor">
                <i class="fas fa-plus"></i>
            </a>
        </div>

        <table class="table table-striped table-hover table-condensed table-row">
            <thead>
                <tr class="row">
                    <th class="col-sm-2 col-2 col-md-2">ID</th>
                    <th class="col-sm-4 col-10 col-md-6">Nome do Setor</th>

                    <th class="col-sm-6 col-4 col-md-4 d-none d-sm-block">Ações</th>

                </tr>
            </thead>
            <tbody>

                <?php
                require_once 'core/bootstrap.php';
                
                $nomes = $app['bancoDeDados']->selecionaTabela('setor');

                foreach ($nomes as $nome) :?>
   
                <tr class="row">
                    <th class="col-sm-2 col-2 col-md-2"><?php echo $nome['id']?></th>
                    <td class="col-sm-4 col-8 col-md-6"><?php echo $nome['nome']?></td>
                    <td class="col-sm-6 col-8 col-md-4">
                    
                        <button type="button" name="showS" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modalSetor<?php echo $nome['id'];?>">
                            Visualizar
                        </button>
                    
                       
                        <!-- Modal -->
                        <div class="modal fade" id="modalSetor<?php echo $nome['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalScrollableTitle">Dados do
                                            Setor
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Nome do Setor: <?php echo $nome['nome'];?>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-warning btn-sm" href="editarSetor?edit=<?php echo $nome["id"];?>">Editar</a>
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal<?php echo $nome['id'];?>">
                            Excluir
                        </button>

                        <!-- Modal -->
                        
                        <div class="modal fade" id="deleteModal<?php echo $nome['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Excluir Setor</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Tem certeza que deseja excluir este setor?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                        <a href="apagaSetor?delete=<?php echo $nome["id"];?>" class="btn btn-danger">Confirmar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                
                </tr>
                <?php endforeach ;?>

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