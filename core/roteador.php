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
            return $this->rotas[$tipoRequisicao][$uri];
        }
        else
        {
            throw new Excpetion("Rota {$uri} nao existe");
        }
    }
}
?>