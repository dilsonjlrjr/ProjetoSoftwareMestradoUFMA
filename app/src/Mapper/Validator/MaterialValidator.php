<?php

namespace App\Mapper\Validator;

use App\Mapper\Material;

/**
 * Class MaterialValidator
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
        if ($object->getQuantidade() < 0) {
            throw new \Exception('A quantidade não pode ser negativa.');
        }

        return true;
    }

}