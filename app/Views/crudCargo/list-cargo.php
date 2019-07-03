<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="public/cssCargo/style-cargo.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="public/fontawesome-free-5.9.0-web/css/all.css">

    <!-- Font Awesome JS -->
    <script defer src="public/fontawesome-free-5.9.0-web/js/all.js"></script>
    <title>Cargos</title>
  </head>
  <body>
    <?php  if (isset($_SESSION['mensagem'])) : ?>
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
    <div class="container">
      <div class="row header">
        <h1 class="col-md-10 col-10 page-header d-none d-sm-block">Gerenciar Cargos</h1>
        <h1 class="col-md-10 col-10 page-header d-block d-sm-none">Cargos</h1>
        <a class="btn btn-primary col-md-2 col-2 cargo d-none d-sm-none d-md-none d-lg-block" href="criarCargo"><i class="fas fa-plus"></i> Novo Cargo</a>
        <a class="btn btn-primary col-md-2 col-2 cargo2 d-block d-sm-block d-md-block d-lg-none" href="criarCargo"><i class="fas fa-plus"></i></a>
      </div>
      <table class="table table-striped table-hover table-condensed table-row">
          <thead>
            <tr class="row">
              <th class="col-sm-2 col-2 col-md-2">ID</th>
              <th class="col-sm-4 col-10 col-md-6">Cargo</th>
              <th class="col-sm-6 col-4 col-md-4 d-none d-sm-block">Ações</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($cargos as $cargo): ?>
            <tr class="row">
                <td class="col-sm-2 col-2 col-md-2"><b><?=$cargo->id?></td>
                <td class="col-sm-4 col-8 col-md-6"><?=$cargo->nome?></td>
                <td class="col-sm-6 col-12 col-md-4">
                  <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#cargoModal<?=$cargo->id?>">Visualizar</button>

                    <!-- Modal vizualizar -->
                  <div class="modal fade" id="cargoModal<?=$cargo->id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalScrollableTitle"><?=$cargo->nome?></h5>
                        </div>
                        <div class="modal-body">
                          <ul>
                            <?php foreach($usuarios["cargo {$cargo->id}"] as $usuario): ?>
                              <li><?=$usuario->nome?></li>
                            <?php endforeach; ?>  
                          </ul>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <a href="editarCargo?id=<?=$cargo->id?>"><button type="button" class="btn btn-warning btn-sm" href="">Editar</button></a>

                  <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exclusion<?=$cargo->id?>">Excluir</button>
                  
                  <!-- Modal excluir -->
                  <div class="modal fade" id="exclusion<?=$cargo->id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalCenterTitle">Excluir Cargo?</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p>Tem certeza que deseja excluir esse cargo?</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                          <a class="btn btn-danger" href="apagarCargo?id=<?=$cargo->id?>">Confirmar</a>
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

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  
  </body>
</html>