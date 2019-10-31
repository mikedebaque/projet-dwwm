<?php
class AbstractDAO 
{
    protected function connexionDB()
    {
        return new mysqli('localhost','root','','projet');
    }
    protected function queryDB($statement)
    {
        $statement->execute();
        return $statement->get_result();
    }
    protected function fetchDB($statement)
    {
        $rs=$this->queryDB($statement);
        return $rs->fetch_all(MYSQLI_ASSOC);
    }
}