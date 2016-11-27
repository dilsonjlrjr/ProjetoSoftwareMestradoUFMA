<?php

namespace App\Mapper\Repository;

/**
 * Interface PersistInterface
 * @package App\Mapper\Repository
 */
interface PersistInterface
{
    /**
     * @param $object
     * @return mixed
     */
    function saveOrUpdate($object);

    /**
     * @param $object
     * @return mixed
     */
    function delete($object);
}