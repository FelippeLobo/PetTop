<?php
class ConstrutorDeQuerys
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    //Seleciona todos os registros de uma tabela(String nomeDaTabela)
    public function selecionarTudo($tabela)
    {
        $elementos = $this->pdo->prepare("select * from {$tabela}");
        $elementos->execute();
        return $elementos->fetchAll(PDO::FETCH_CLASS);
    }
    
    //Insere valores em uma tabela(String nomeDaTabela) em todos campos especificados em parametros(Array campos[nomeCampo=>valor])
    public function inserir($tabela,$paramentros)
    {
        $sql = sprintf('insert into %s (%s) values (%s)',$tabela,implode(', ',array_keys($paramentros)),':'.implode(', :',array_keys($paramentros)));
        try
        {
            $elementos = $this->pdo->prepare($sql);
            $elementos->execute($paramentros);
        }
        catch(Exception $e)
        {
            $e->getMessage();
        }    
    }

    /*
    Seleciona registros de uma tabela(String nomeDaTabela) que se enquadram nas condicoes especificadas em 
    parametros(String condicoes), condicoes devem ser separadas por virgula para a funcao funcionar
    */
    public function selecionarOnde($tabela,$paramentros)
    {
        $elementos = $this->pdo->prepare("select * from {$tabela} where {$paramentros}");
        $elementos->execute();
        return $elementos->fetchAll(PDO::FETCH_CLASS);
    }

    //Apaga registro de uma tabela(String nomeDaTabela), registro especificado em parametro(id)
    public function apagar($tabela,$paramentro)
    {
        $elemento = $this->pdo->prepare("delete from {$tabela} where id = {$paramentro}");
        $elemento->execute();
    }

    /*
    Edita registro de uma tabela(String nomeDaTabela), parametros(Array campos[nomeCampo=>valor]) especifica os campos, id 
    especifica qual resgistro sera modificado
    */
    public function editar($tabela,$paramentros,$id)
    {
        $keys = array_keys($paramentros);
        $setAux = [];
        foreach($keys as $key)
        {
            $setAux[] = "{$key}=:{$key}";
        }  
        $sql = sprintf('update %s set %s where id = %s',$tabela,implode(', ',$setAux),$id);
        $elemento = $this->pdo->prepare($sql);
        $elemento->execute($paramentros);
    }
    
    //Retorna o numero de registros que ha em uma tabela(String nomeDaTabela)
    public function contarRegistros($tabela)
    {
        $elemento = $this->pdo->prepare("select count(*) from {$tabela}");
        $elemento->execute();
        return $elemento->fetchColumn();
    }

    /*
    Seleciona n registros de uma tabela(String nomeDaTabela), paramentros(Array [registroDePartida,numeroDeRegistros]) 
    especifica de qual registro sera o ponto de partida (ex:0 comeca do primeiro,9 comeca a partir do 10°) e tambem quantos 
    registros serao selecionados
    */ 
    public function selecionarComLimite($tabela,$paramentros)
    {
        $sql = sprintf('select * from %s limit %s',$tabela,implode(', ',$paramentros));
        $elementos = $this->pdo->prepare($sql);
        $elementos->execute();
        return $elementos->fetchAll(PDO::FETCH_CLASS);
    }
}
?>