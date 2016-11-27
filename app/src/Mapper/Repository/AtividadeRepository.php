<?php

namespace App\Mapper\Repository;


use App\Mapper\Validator\AtividadeValidator;
use Doctrine\ORM\EntityRepository;

/**
 * Class AtividadeRepository
 * @package App\Mapper\Repository
 */
class AtividadeRepository extends EntityRepository implements PersistInterface
{
    /**
     * @inheritdoc
     */
    public function saveOrUpdate($object)
    {
        $validator = new AtividadeValidator();
        $validator->isValid($object);

        $this->_em->persist($object);
        $this->_em->flush();
    }

    /**
     * @inheritdoc
     */
    public function delete($object)
    {
        $this->_em->remove($object);
        $this->_em->flush();
    }

    /**
     * @param $nameFind
     * @return array
     */
    public function findForName($nameFind)
    {
        return
            $this->_em->createQuery(
                'SELECT atividade FROM App\\Mapper\\Atividade atividade where atividade.nome = :name'
            )->setParameter('name', $nameFind)->getResult();
    }
}