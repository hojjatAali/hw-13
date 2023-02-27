<?php

namespace Src\model\Repository;

use Src\Core\QueryBuilder;
use Src\model\database\Connection;

class LoginRepository extends MySqlBaseRepository
{




    public function finedBytoken($token)
    {
        return $this->queryBuilder::table('user')->select()->where('token', $token)->first();

    }

    public function insert($data, $table)
    {

        return $this->queryBuilder::table($table)->create($data);


    }


    public function read($table,$column=null)
    {
      return $this->queryBuilder::table($table)->select($column)->get();

    }

    public function find($table,$index){

        return $this->queryBuilder::table($table)->select()->where('id',$index)->first();


    }
}