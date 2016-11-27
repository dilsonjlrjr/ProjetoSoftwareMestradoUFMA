<?php

namespace App\Mapper\Repository;


use Doctrine\ORM\EntityRepository;

/**
 * Class ProjetoRepository
 * @package App\Mapper\Repository
 */
class ProjetoRepository extends EntityRepository implements PersistInterface
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
}