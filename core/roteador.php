<?php
class Roteador
{
    protected $rotas = [
        'GET'=>[],
        'POST'=>[],
        'VIEW'=>[]
    ];

    public static function carregar($arquivo)
    {
        $roteador = new static;
        require $arquivo;
        return $roteador;
    }
    
    public function get($uri,$controller)
    {
        $this->rotas['GET'][$uri] = $controller;
    }
    
    public function post($uri,$controller)
    {
        $this->rotas['POST'][$uri] = $controller;
    }

    public function view($uri,$controller)
    {
        $this->rotas['VIEW'][$uri] = $controller;
    }

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

    //Direcionar as views
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

    protected function chamarAcao($controller,$acao)
    {
        require "app/controllers/{$controller}.php";
        $instancia = new $controller;
        return $instancia->$acao();
    }
}
?>