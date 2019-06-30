<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="public/cssCargo/style-cargo.css">
    <title>Editar cargo</title>
  </head>
  <body>
        <div class="container formulario">
          <h1 class="page-header header">Editar Cargo</h1>
            <form action="editarCargo/editando?id=<?=$cargoId?>" method="post">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label>Nome</label>
                  <input type="text" class="form-control" placeholder="Nome" name="nome" value="<?=$cargo[0]->nome?>" required>
                </div>
              </div>
              <div class="form-group">
              <button type="submit" class="btn btn-primary">Confirmar</button>
              <a class="btn btn-danger" href="Cargos" role="button">Cancelar</a>
              </div>
            </form>
        </div>
    
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      </body>
    </html>