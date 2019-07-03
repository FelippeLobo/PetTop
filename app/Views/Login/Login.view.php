<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="public\bootstrap-4.3.1-dist\css\bootstrap.min.css">
    <link rel="stylesheet" href="public/cssLogin/styleLogin.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js" integrity="sha384-DJ25uNYET2XCl5ZF++U8eNxPWqcKohUUBUpKGlNLMchM7q4Wjg2CUpjHLaL8yYPH" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="public/fontawesome-free-5.9.0-web/css/all.css">
    <script defer src="public/fontawesome-free-5.9.0-web/js/all.js"></script>

    <title>Login</title>
</head>


<body>

    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">

                <div class="col-12 user-img">
                    <img src="app/Views/Login/Design sem nome.png" alt="">
                </div>

                <form class="col-12" action="Login/login" method="post">
                    <div class="form-group">
                        <button class="botao fas fa-user"></i></button>
                        <!-- <input type="text" name="nome" class="form-control" placeholder="Digite o nome"> -->
                        <input type="text" name="nome" class="form-control" id="validationDefaultUsername" placeholder="Digite o nome" aria-describedby="inputGroupPrepend2" required>
                        <!-- <i class="fas fa-user"></i> -->
                    </div>

                    <div class="form-group">
                        <button class="botao fas fa-lock"></i></button>
                        <!-- <input type="password" name="senha" class="form-control" placeholder="Digite a senha"> -->
                        <input type="password" name="senha" class="form-control" id="validationDefaultUsername" placeholder="Digite a senha" aria-describedby="inputGroupPrepend3" required>


                    </div>

                    <button type="submit" class="btn" id="btnLogin"><i class="fas fa-sign-in-alt"></i> Login</button>

                </form>

            </div>
        </div>

    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="public/jQueryPopper/jquery-3.3.1.slim.min.js"></script>
    <!-- Popper.JS -->
    <script src="public/jQueryPopper/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="public/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>



</body>

</html>