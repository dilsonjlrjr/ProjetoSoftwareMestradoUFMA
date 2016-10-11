<?php

namespace App\Mapper\Validator;


use App\Mapper\Atividade;

class AtividadeValidator implements ValidatorInterface
{
    /**
     * @param Atividade $object
     * @return bool
     * @throws \Exception
     * @author Higo Sampaio
     */
    public function isValid($object)
    {
        if($object->getProjeto() === NULL) {
            throw new \Exception('Você precisa ter um projeto associado!');
        }

        if($object->getPessoa() === NULL) {
            throw new \Exception('Você precisa ter uma pessoa associada!');
        }

        if($object->getDetalhamentoAtividade() === NULL) {
            throw new \Exception('Você precisa criar um detalhamento de atividade!');
        }

        return true;
    }
}