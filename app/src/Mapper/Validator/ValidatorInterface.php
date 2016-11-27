<?php

namespace App\Mapper\Validator;

/**
 * Interface ValidatorInterface
 * @package App\Mapper\Validator
 */
interface ValidatorInterface
{
    /**
     * @param $object
     * @return mixed
     */
    function isValid($object);
}