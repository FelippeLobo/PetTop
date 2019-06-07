<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- <link rel="stylesheet" href="sidebarStyle.css"> -->
        <link rel="stylesheet" href="../CrudSetor/views/styleSetor.css" type="text/css">
        <link rel="stylesheet" href="StyleCliente.js">
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
            integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ"
            crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
            integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY"
            crossorigin="anonymous"></script>
    
        <script defer src="fontawesome-free-5.8.1-web/js/solid.js"> </script>
        <script defer src="fontawesome-free-5.8.1-web/css/all.css"> </script>
        <style>
        
        </style>
    <title>Editar Setor</title>
</head>


<body>

           
    
            <div class="container">
                <h1 class="page-header cabeçalho">Editar Setor</h1>
                    <form action="editarSetor/editando" method="post" >
                                  
                        <div class="form-row">
            
                            <div class="form-group col-md-6 col-6">
                                <label for="inputEmail4">Nome</label>
                                <input type="text" class="form-control" name="nome" value="<?php echo $setor['nome'];?>" id="inputEmail4" placeholder="">
                                <input type="hidden" name="id" value="<?php echo $setor['id'];?>">

                            </div>
                        </div>    
                        
                        <button type="submit" class="btn btn-primary" name="editar" >Confirmar</button>
                        <a href="Setores" class="btn btn-danger">Cancelar</a>
                    </form>
            
             </div>
            

            

       

    

  
 <!-- jQuery CDN - Slim version (=without AJAX) -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
 integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
 crossorigin="anonymous"></script>
<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
 integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
 crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
 integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
 crossorigin="anonymous"></script>


</body>

</html>