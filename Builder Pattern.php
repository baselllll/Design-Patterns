<?php

// builder pattern that used it 


interface SQLQueryBuilder{
    public function select($fields,$table);
    public function limit($number);
}
class MysqlQueryBuilder implements SQLQueryBuilder{
    protected $query;

    protected function reset(): void
    {
        $this->query = new \stdClass();
    }
    public function select($table,$fields){
        //to convert var to object 
        $this->reset();
        $fields = implode(',',$fields);
        $this->query="Select $fields From $table";
        return $this;
    }
    public function limit($number){
        $this->query.=" LIMIT $number";
        return $this;
    }
    public function getSQL()
    {
        $sql = $this->query;
        return $sql;
    }
}
function clientCode($queryBuilder)
    {
    $query = $queryBuilder
        ->select("users", ["name", "email", "password"])
        ->limit(5)
        ->getSQL();
    echo $query;
}
clientCode(new MysqlQueryBuilder());





?>
