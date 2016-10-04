<?php

namespace App\Mapper\Repository;


interface PersistInterface
{
    function saveOrUpdate($object);
    function delete($object);
}