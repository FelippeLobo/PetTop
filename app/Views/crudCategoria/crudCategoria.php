<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Categorias</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="public/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="public/cssCategoria/styles.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js" integrity="sha384-g5uSoOSBd7KkhAMlnQILrecXvzst9TdC09/VM+pjDTCM+1il8RHz5fKANTFFb+gQ" crossorigin="anonymous"></script>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="public/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
</head>

<body>

<?php if (isset($_SESSION['mensagem'])) : ?>
    <div class="alert alert-<?= $_SESSION['tipo_msg'] ?> alert-dismissible fade show" role="alert">
        <?php
        echo $_SESSION['mensagem'];
        unset($_SESSION['mensagem']);
        ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
  <?php endif ?>

        <!-- Page Content  -->    
                <div class="container">
                    <div class="row header">
                        <h1 class="col-md-10 col-10 page-header d-none d-sm-block">Gerenciar Categorias</h1>
                        <h1 class="col-md-10 col-10 page-header d-block d-sm-none">Categorias</h1>
                        <a class="btn btn-primary col-md-2 col-2 categoria d-none d-sm-none d-md-none d-lg-block " href="criarCategoria"><i class="fas fa-plus"></i> Nova Categoria </a>
                        <a class="btn btn-primary col-md-2 col-2 categoria2 d-block d-sm-block d-md-block d-lg-none" href="criarCategoria"><i class="fas fa-plus"></i></a>
                    </div>
                    <table class="table table-striped table-hover table-condensed table-row">
                        <thead>
                          <tr class="row">
                            <th class="col-sm-2 col-2 col-md-2">ID</th>
                            <th class="col-sm-4 col-10 col-md-6">Categoria</th>
                            <th class="col-sm-6 col-4 col-md-4 d-none d-sm-block">Ações</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php foreach($categorias as $categoria) : ?>
                          <tr class="row">
                            <th class="col-sm-2 col-2 col-md-2"><?=$categoria->id?></th>
                            <td class="col-sm-4 col-8 col-md-6"><?=$categoria->nome?></td>
                            <td class="col-sm-6 col-12 col-md-4">
                                <button type="button" class="btn btn-success btn-sm" data-toggle="modal"
                                data-target="#categoryModal<?=$categoria->id?>">
                                    Visualizar
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="categoryModal<?=$categoria->id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle"><?=$categoria->nome?></h5>
                                                </div>
                                                <div class="modal-body">
                                                    <ul>
                                                      <?php foreach($produtos["categoria {$categoria->id}"] as $produto): ?>
                                                        <li><?=$produto->nome?></li>
                                                      <?php endforeach; ?>    
                                                    </ul>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <a class="btn btn-warning btn-sm" href="editarCategoria?id=<?=$categoria->id?>" role="button">Editar</a>
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                data-target="#modalForExclusions<?=$categoria->id?>">
                                    Excluir
                                </button>

                                <div class="modal fade" id="modalForExclusions<?=$categoria->id?>" tabindex="-1" role="dialog">
                                        <div class="modal-dialog" role="document">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="modal-title">Excluir Categoria?</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body">
                                              <p>Tem certeza que deseja excluir essa categoria?</p>
                                            </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                              <a class="btn btn-danger" href="apagarCategoria?id=<?=$categoria->id?>">Confirmar</a>
                                            </div>
                                          </div>
                                        </div>
                                </div>

                            </td>
                          </tr>
                        <?php endforeach;?>
                        </tbody>
                      </table>
                      <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <?php if($pagAtual == "1"):?>
                              <li class="page-item">
                                  <a class="page-link" href="#" aria-label="Previous">
                                      <span aria-hidden="true">&laquo;</span>
                                  </a>
                              </li>
                            <?php else: ?>
                              <li class="page-item">
                                  <a class="page-link" href="?pag=<?=$pagAtual-1?>" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                  </a>
                              </li>
                            <?php endif; ?>
                            <?php for($i="1";$i<=$totalPag;$i++):?>
                              <li class="page-item"><a class="page-link" href="?pag=<?=$i?>"><?=$i?></a></li>
                            <?php endfor; ?>
                            <?php if($pagAtual == $totalPag):?>
                              <li class="page-item">
                                  <a class="page-link" href="#" aria-label="Next">
                                      <span aria-hidden="true">&raquo;</span>
                                  </a>
                              </li>
                            <?php else: ?>
                              <li class="page-item">
                                  <a class="page-link" href="?pag=<?=$pagAtual+1?>" aria-label="Next">
                                      <span aria-hidden="true">&raquo;</span>
                                  </a>
                              </li>
                            <?php endif; ?>
                        </ul>
                    </nav>
                </div>
</body>

</html>