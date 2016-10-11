<?php

namespace App\Mapper\Repository;


use App\Mapper\Validator\AtividadeValidator;
use Doctrine\ORM\EntityRepository;

class AtividadeRepository extends EntityRepository implements PersistInterface
{
    public function saveOrUpdate($object)
    {
        $validator = new AtividadeValidator();
        $validator->isValid($object);

        $this->_em->persist($object);
        $this->_em->flush();
    }

    public function delete($object)
    {
        $this->_em->remove($object);
        $this->_em->flush();
    }

    public function findForName($nameFind)
    {
        return
            $this->_em->createQuery(
                'SELECT atividade FROM App\\Mapper\\Atividade atividade where atividade.nome = :name'
            )->setParameter('name', $nameFind)->getResult();
    }
}