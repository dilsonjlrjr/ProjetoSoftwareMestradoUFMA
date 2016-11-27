<?php

namespace App\Mapper\Validator;


use App\Mapper\Atividade;

/**
 * Class AtividadeValidator
 * @package App\Mapper\Validator
 */
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
        $now = new \DateTime('now');

        if ($object->getDataconclusao()->format('dmY') < $now->format('dmY')) {
            throw new \Exception('Data não pode ser retroativa');
        }

        if ($object->getPessoa() === null) {
            throw new \Exception('Você precisa ter uma pessoa associada!');
        }

        if ($object->getProjeto() === null) {
            throw new \Exception('Você precisa ter um projeto associado!');
        }

        if ($object->getDetalhamentoAtividade() === null) {
            throw new \Exception('Você precisa criar um detalhamento de atividade!');
        }

        return true;
    }
}