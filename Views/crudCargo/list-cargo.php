<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="Views/crudCargo/css-cargo/style-cargo.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js" integrity="sha384-g5uSoOSBd7KkhAMlnQILrecXvzst9TdC09/VM+pjDTCM+1il8RHz5fKANTFFb+gQ" crossorigin="anonymous"></script>
    <title>Cargos</title>
  </head>
  <body>
    <div class="container cont-lista">
      <div class="form-row buttonadd">
        <h1>Cargos</h1>
        <a href="add-cargo.html"><button type="button" class="btn btn-primary"><i class="fas fa-plus"></i> Adicionar um cargo</button></a>
      </div>
      <table class="table table-striped lista-in">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Cargo</th>
              <th class="action" scope="col">Ações</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($cargos as $cargo): ?>
            <tr>
                <td scope="row"><?=$cargo->id?></td>
                <td><?=$cargo->nome?></td>
                <td>
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

                  <a href="edit-cargo.html"><button type="button" class="btn btn-warning btn-sm" href="">Editar</button></a>

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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
  </body>
</html>