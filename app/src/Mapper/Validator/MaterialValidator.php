<?php

namespace App\Mapper\Validator;

use App\Mapper\Material;

/**
 * Class MaterialValidator
 * @package App\Mapper\Validator
 */
class MaterialValidator implements ValidatorInterface
{
    /**
     * @param Material $object
     * @return bool
     * @throws \Exception
     * @author Aldrea Malheiros Oliveira Rabelo
     */
    function isValid($object)
    {
        //A quantidade nao pode ser menor que 0 (zero)
        if ($object->getQuantidade() < 0) {
            throw new \Exception('A quantidade não pode ser negativa.');
        }

        return true;
    }

}