<?php

use Tests\BaseUnitTests;

/**
 * Created by PhpStorm.
 * User: dilsonrabelo
 * Date: 28/08/16
 * Time: 19:32
 */
class InfraTest extends BaseUnitTests
{
    /**
     * @var \RKA\Session
     */
    protected $session;

    /**
     * @var \Doctrine\ORM\EntityManager
     */
    protected $_dm;

    public function setUp()
    {
        parent::setUp();
    }

    /**
     * @test
     */
    public function shouldInstanceObjectContainerInterface() {

        $this->_dm = $this->_ci->get('database');

        $this->assertInstanceOf(\Interop\Container\ContainerInterface::class, $this->_ci);
        $this->assertInstanceOf(\Doctrine\ORM\EntityManager::class, $this->_dm);

        $this->_dm->getConnection()->connect();
        $this->assertTrue($this->_dm->isOpen());
        $this->_dm->getConnection()->close();
    }
}