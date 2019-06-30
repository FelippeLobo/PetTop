<?php
class Roteador
{
    protected $rotas = [
        'GET'=>[],
        'POST'=>[],
        'VIEW'=>[]
    ];

    //Funcao para carregar as rotas de um arquivo para o roteador
    public static function carregar($arquivo)
    {
        $roteador = new static;
        require $arquivo;
        return $roteador;
    }
    
    //Funcao para adicionar paginas que utilizam metodo get
    public function get($uri,$controller)
    {
        $this->rotas['GET'][$uri] = $controller;
    }
    
    //Funcao para adicionar paginas que utilizam metodo post
    public function post($uri,$controller)
    {
        $this->rotas['POST'][$uri] = $controller;
    }

    //Funcao para adicionar as views que precisam ser requeridas dentro de um layout
    public function view($uri,$controller)
    {
        $this->rotas['VIEW'][$uri] = $controller;
    }

    //Funcao para retornar o controller e a funcao requisitada na url 
    public function direcionar($uri,$tipoRequisicao)
    {
        if(array_key_exists($uri,$this->rotas[$tipoRequisicao]))
        {
            $parametros = explode('@',$this->rotas[$tipoRequisicao][$uri]);
            return $this->chamarAcao($parametros[0],$parametros[1]);
        }
        else
        {
            throw new Exception("Rota {$uri} nao existe");
        }
    }

    //Funcao para direcionar as views corretas dentro do layout
    public function direcionarView($uri)
    {
        if(array_key_exists($uri,$this->rotas['VIEW']))
        {
            return $this->rotas['VIEW'][$uri];
        }
        else
        {
            throw new Exception("Rota {$uri} nao existe");
        }
    }

    //Funcao privada para chamar o metodo correto na classe controller
    protected function chamarAcao($controller,$acao)
    {
        require "app/controllers/{$controller}.php";
        $instancia = new $controller;
        return $instancia->$acao();
    }
}
?>