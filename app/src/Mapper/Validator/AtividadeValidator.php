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

        //A data de conclusão não pode ser retoativa a data atual
        if ($object->getDataconclusao()->format('dmY') < $now->format('dmY')) {
            throw new \Exception('Data não pode ser retroativa');
        }

        //O objeto pessoa não pode ser nulo
        if ($object->getPessoa() === null) {
            throw new \Exception('Você precisa ter uma pessoa associada!');
        }

        //O projeto não pode ser nulo
        if ($object->getProjeto() === null) {
            throw new \Exception('Você precisa ter um projeto associado!');
        }

        //O detalhamento de atividade nao pode ser nulo
        if ($object->getDetalhamentoAtividade() === null) {
            throw new \Exception('Você precisa criar um detalhamento de atividade!');
        }

        return true;
    }
}