<?php

namespace Src\Repositories;

class CountyRepository extends BaseRepository{
    function __construct($host = self::HOST, $user = self::USER, $password = self::PASSWORD, $datebase = self::DATEBASE){
        parent::__construct($host, $user, $password, $datebase);
        $this->tableName = 'countries';
    }
}