<?php

namespace App\Mapper\Repository;


use Doctrine\ORM\EntityRepository;

class ProjetoRepository extends EntityRepository implements PersistInterface
{
    public function saveOrUpdate($object)
    {
        $this->_em->persist($object);
        $this->_em->flush();
    }

    public function delete($object)
    {
        $this->_em->remove($object);
        $this->_em->flush();
    }
}