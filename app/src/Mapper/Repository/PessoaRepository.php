<?php

namespace App\Mapper\Repository;


use Doctrine\ORM\EntityRepository;

/**
 * Class PessoaRepository
 * @package App\Mapper\Repository
 */
class PessoaRepository extends EntityRepository implements PersistInterface
{
    /**
     * @inheritdoc
     */
    public function saveOrUpdate($object)
    {
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
                'SELECT pessoa FROM App\\Mapper\\Pessoa pessoa where pessoa.nome = :name'
            )->setParameter('name', $nameFind)->getResult();
    }


}