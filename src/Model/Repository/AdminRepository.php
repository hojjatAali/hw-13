<?php

namespace Src\Model\Repository;

class AdminRepository extends MySqlBaseRepository
{

    public function create($name, array $data){

        $this->queryBuilder::table('part')->create($data);

    }


}