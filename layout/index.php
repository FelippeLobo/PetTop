<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>index</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="assets/css/styles.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.8.1/js/all.js" integrity="sha384-g5uSoOSBd7KkhAMlnQILrecXvzst9TdC09/VM+pjDTCM+1il8RHz5fKANTFFb+gQ" crossorigin="anonymous"></script>
</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <button type="button" id="sidebarCollapse" class="btn btn-outline dark btn-lg normal-navbar">
                    <span class="sidebarheader"> PET TOP</span>
                </button>
                <strong>
                    <button type="button" id="sidebarUnCollapse" class="btn btn-outline dark small-navbar">
                        <i class="fas fa-bone sidebarheader"></i>
                    </button>
                </strong>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="#">
                        <i class="fas fa-home"></i>
                        <div class="icon-legend">Home</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-briefcase"></i>
                        <div class ="icon-legend">About</div>
                    </a>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="">
                        <i class="fas fa-copy"></i>
                        <div class="icon-legend">Pages</div>
                    </a>
                    
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-image"></i>
                        <div class="icon-legend">Portfolio</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-question"></i>
                        <div class = "icon-legend">FAQ</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-paper-plane"></i>
                        <div class="icon-legend">Contact</div>
                    </a>
                </li>
            </ul>

            
        </nav>

        

        <!-- Page Content  -->
        <div id="content">    
                <nav class="navbar navbar-light bg-light">
                        <span class="navbar-text">
                          Olá, usuário
                        </span>
                        <button type="button" class="btn btn-light">Sair <i class="fas fa-sign-out-alt"></i></button>
                </nav>
    
        </div>
        
    </div>

    
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="assets/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
        $(document).ready(function () {
            $('#sidebarUnCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>