<?php

namespace App\Mapper\Repository;

use App\Mapper\Material;
use App\Mapper\Validator\MaterialValidator;
use Doctrine\ORM\EntityRepository;

/**
 * Class MaterialRepository
 * @package App\Mapper\Repository
 */
class MaterialRepository extends EntityRepository implements PersistInterface
{
    /**
     * @param Material $object
     * @throws \Exception
     */
    public function saveOrUpdate($object)
    {
        $validator = new MaterialValidator();
        $validator->isValid($object);

        $this->_em->persist($object);
        $this->_em->flush();
    }

    public function delete($object)
    {
        $this->_em->remove($object);
        $this->_em->flush();
    }

    public function findForDescription($descriptionFind)
    {
        return
            $this->_em->createQuery(
                'SELECT material FROM App\\Mapper\\Material material where material.descricao = :description'
            )->setParameter('description', $descriptionFind)->getResult();
    }

    public function getMaterialInStock() {

        return
            $this->_em->createQuery(
                'SELECT material FROM App\\Mapper\\Material material where material.quantidade > 0'
            )->getResult();

    }

}