<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="app/Views/crudVenda/css-venda/style-venda.css">
    <title>Criar venda</title>
  </head>
  <body>
    <div class="container formulario">
      <h1 class="page-header header">Criar Venda</h1>
      <form action="criarVenda/adicionando" method="post">
          <div class="form-row">
            <div class="form-group col-md-4">
                <label>Vendedor</label>
                <select class="form-control" id="exampleFormControlSelect1" name="id_user" required>
                  <option value="" selected>Selecione um Vendedor</option>
                  <?php foreach($usuarios as $usuario): ?>
                    <option value="<?=$usuario->id?>"><?=$usuario->nome?></option>
                  <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group col-md-4">
              <label>Cliente</label>
              <select class="form-control" id="exampleFormControlSelect1" name="id_cliente" required>
                <option value="" selected>Selecione um Cliente</option>
                <?php foreach($clientes as $cliente): ?>
                  <option value="<?=$cliente->id?>"><?=$cliente->nome?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group col-md-4">
              <label>Produto</label>
              <select class="form-control" id="exampleFormControlSelect1" name="id_produto" required>
                  <option value="" selected>Selecione um Produto</option>
                  <?php foreach($produtos as $produto): ?>
                    <option value="<?=$produto->id?>"><?=$produto->nome?></option>
                  <?php endforeach; ?>
              </select>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label>Desconto</label>
              <input type="number" step="0.01" min="0" class="form-control" id="exampleFormControlInput1" placeholder="Desconto" name="desconto">
            </div>
            <div class="form-group col-md-4">
              <label>Quantidade</label>
              <input type="number" step="1" min="1" class="form-control" id="exampleFormControlInput1" placeholder="Quantidade" name="qtd_vendida" required>
            </div>
            <div class="form-group col-md-4">
              <label>Data</label>
              <input type="date" class="form-control" placeholder="Data" name="data_venda" required>
            </div>
          </div>
          <div class="form-group">
            <label>Observações</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Observações" name="anotacoes"></textarea>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Confirmar</button>
            <a class="btn btn-danger" href="Vendas" role="button">Cancelar</a>
          </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  </body>
</html>