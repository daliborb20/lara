<?php
class QueryBuilder 
{
    protected $pdo;
    public function __construct($pdo)
    {
        $this -> pdo = $pdo;
    }

  function prikaziSveRezultate($tabela)
    {
        $query = $this -> pdo -> prepare("select * from {$tabela}");
        $query -> execute();
        return $query -> fetchAll(PDO::FETCH_CLASS, "Zadaci");

    }  
}



?>
