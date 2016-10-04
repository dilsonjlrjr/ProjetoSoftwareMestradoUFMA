<?php
/**
 * Created by PhpStorm.
 * User: higo
 * Date: 04/10/16
 * Time: 02:56
 */

namespace Tests;

use App\Mapper\Atividade;
use Doctrine\ORM\EntityManager;

class CRUDAtividadeTest extends BaseUnitTests{

    /**
     * @var EntityManager
     */
    private $entity;

    public function setUp()
    {
        parent::setUp();
        $this->entity = $this->_ci->get('database');
    }

    /**
     * @param Atividade $atividade
     * @test
     * @dataProvider dataFactory
     */
    public function createAtividade(Atividade $atividade) {

        $this->entity->getRepository(Atividade::class)->saveOrUpdate($atividade);
        $this->assertTrue(is_numeric($atividade->getId()));

    }

    /**
     * @param Atividade $atividade
     * @test
     * @dataProvider dataFactory
     */
    public function searchAtividade(Atividade $atividade) {

        $arrayAtividade = $this->entity->getRepository(Atividade::class)->findForName($atividade->getNome());
        $atividade->setId($arrayAtividade[0]->getId());
        $this->assertEquals($arrayAtividade[0]->getNome(), $atividade->getNome());
        $this->assertEquals($arrayAtividade[0]->getDataconclusao(), $atividade->getDataconclusao());
        $this->assertEquals($arrayAtividade[0]->isStatus(), $atividade->isStatus());
        $this->assertEquals($arrayAtividade[0]->getDetalhamentoAtividade(), $atividade->getDetalhamentoAtividade());

    }

    public function dataFactory() {

        $atividade = new Atividade();
        $atividade->setNome('Atividade1');
        $atividade->setDataconclusao('2016-12-05');
        $atividade->setStatus('true');
        $atividade->setDetalhamentoAtividade('Aqui o detalhe da atividade1');

        return [
            [$atividade]
        ];

    }
}