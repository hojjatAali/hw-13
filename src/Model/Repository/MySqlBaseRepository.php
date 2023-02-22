<?php

namespace Src\Model\Repository;
use Src\Core\QueryBuilder;
use Src\model\database\Connection;

class MySqlBaseRepository
{

    protected Connection $connection;
    protected QueryBuilder $queryBuilder;

    public function __construct()
    {
        $this->connection=Connection::getInstance()->$this->getConnection();
        $this->queryBuilder = new QueryBuilder;


    }

}