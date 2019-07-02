<?php


session_start();

class Login
{
   /* public function login()
    {

        // session_start();
        // if (empty($_POST['nome']) || empty($_POST['senha'])) {

        //     header('Location: /PetTop/Login');
        //     exit();
        // }

        if (isset($_POST['nome']) && isset($_POST['senha'])) {
            $dados = [
                'nome' => $_POST['nome'],
                'senha' => $_POST['senha']
            ];
            $user = App::get('bancoDeDados')->selecionaOnde('users', $dados);
        }

        var_dump($user);

        if ($user != false) {
            $_SESSION['logado'] = true;
            $_SESSION['nome'] = $dados['nome'];
            header('Location: /PetTop/Login');
            exit();
        } else {
            $_SESSION['mensagemmm'] = "Usuário ou Senha invalidos!";

            header('Location: /PetTop/Login');
            exit();
        }
    }*/

    public function loginView()
    {
        require 'app/Views/Login/Login.view.php';
    }

    public function logout()
    {

        session_start();

        $_SESSION['logado'] = false;

        session_destroy();

        header('Location: /PetTop/Login');
    }
}
