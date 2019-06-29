<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="app/Views/crudVenda/css-venda/style-venda.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js" integrity="sha384-g5uSoOSBd7KkhAMlnQILrecXvzst9TdC09/VM+pjDTCM+1il8RHz5fKANTFFb+gQ" crossorigin="anonymous"></script>
    <title>Vendas</title>
  </head>
  <body>
    <div class="container cont-lista">
      <div class="form-row buttonadd">
        <h1>Vendas</h1>
        <a href="criarVenda"><button type="button" class="btn btn-primary"><i class="fas fa-plus"></i> Adicionar uma venda</button></a>
      </div>
      <table class="table table-striped lista-in">
          <thead> 
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Produto</th>
              <th scope="col">Cliente</th>
              <th scope="col">Data</th>
              <th scope="col" class="action">Ações</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($vendas as $venda): ?> 
              <tr>
                <td><?=$venda->id?></td>
                <td><?=$produto["venda {$venda->id}"][0]->nome?></td>
                <td><?=$cliente["venda {$venda->id}"][0]->nome?></td>
                <td><?=$venda->data_venda?></td>
                <td>
                  <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#vendaModal<?=$venda->id?>">Visualizar</button>
                  
                  <!-- Modal vizualizar -->
                  <div class="modal fade" id="vendaModal<?=$venda->id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalScrollableTitle">Venda #<?=$venda->id?></h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p><b>Vendedor:</b> <?=$usuario["venda {$venda->id}"][0]->nome?></p>
                          <p><b>Cliente:</b> <?=$cliente["venda {$venda->id}"][0]->nome?></p>
                          <p><b>Produto:</b> <?=$produto["venda {$venda->id}"][0]->nome?></p>
                          <p><b>Desconto:</b> <?=$venda->desconto?></p>
                          <p><b>Quantidade:</b> <?=$venda->qtd_vendida?></p>
                          <p><b>Data:</b> <?=$venda->data_venda?></p>
                          <p><b>Observações:</b><br><?=$venda->anotacoes?></p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <a href="editarVenda?id=<?=$venda->id?>"><button type="button" class="btn btn-warning btn-sm">Editar</button></a>
                  
                  <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalForExclusions<?=$venda->id?>">Excluir</button>
                
                  <!-- Modal excluir -->
                  <div class="modal fade" id="modalForExclusions<?=$venda->id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalCenterTitle">Excluir Venda?</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p>Tem certeza que deseja excluir essa venda?</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                          <a class="btn btn-danger" href="apagarVenda?id=<?=$venda->id?>">Confirmar</a>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
  </body>
</html>