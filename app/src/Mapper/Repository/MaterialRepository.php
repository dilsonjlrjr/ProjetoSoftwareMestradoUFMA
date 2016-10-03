<?php

namespace App\Mapper\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Class MaterialRepository
 * @package App\Mapper\Repository
 */
class MaterialRepository extends EntityRepository
{

    public function getMaterialInStock() {

        return
            $this->_em->createQuery(
                'SELECT material FROM App\\Mapper\\Material material where material.quantidade > 0'
            )->getResult();

    }

}