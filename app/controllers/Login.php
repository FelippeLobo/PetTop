<?php


session_start();

class Login
{
    public function login()
    {

        session_start();
        if (empty($_POST['nome']) || empty($_POST['senha'])) {

            header('Location: /viewLogin');
            exit();
        }

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
            header('Location: /layout');
            exit();
        } else {
            $_SESSION['mensagemmm'] = "Usuário ou Senha invalidos!";

            header('Location: /viewLogin');
            exit();
        }
    }

    public function loginView()
    {
        require 'views/viewLogin.php';
    }

    public function logout()
    {

        session_start();

        $_SESSION['logado'] = false;

        session_destroy();

        header('Location: /viewLogin');
    }
}
