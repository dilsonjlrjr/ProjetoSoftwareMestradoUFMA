<?php

namespace App\Mapper\Validator;

/**
 * Interface ValidatorInterface
 * @package App\Mapper\Validator
 */
interface ValidatorInterface
{
    function isValid($object);
}