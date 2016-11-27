<?php

namespace Tests\Atividade;

use App\Mapper\Atividade;
use App\Mapper\DetalhamentoAtividade;
use App\Mapper\Material;
use App\Mapper\Pessoa;
use App\Mapper\Projeto;
use Doctrine\ORM\EntityManager;
use Tests\BaseUnitTests;

class CreateAtividadeTest extends BaseUnitTests   {

    /**
     * @var EntityManager
     */
    private $entity;

    public function setUp()
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        $this->entity = $this->_ci->get('database');
    }

    /**
     * @test
     * @dataProvider dataFactory
     * @param Atividade $atividade
     * @author Dilson Rabelo
     * @expectedException \Exception
     * @expectedExceptionMessage Data não pode ser retroativa
     */
    public function shouldValidateErrorDateCreateAtividade(Atividade $atividade) {

        $atividade->setDataconclusao(new \DateTime('yesterday'));
        $this->entity->getRepository(Atividade::class)->saveOrUpdate($atividade);

    }

    /**
     * @test
     * @dataProvider dataFactory
     * @param Atividade $atividade
     * @author Dilson Rabelo
     * @expectedException \Exception
     * @expectedExceptionMessage Você precisa ter uma pessoa associada!
     */
    public function shouldValidadeWithoutPessoa(Atividade $atividade) {

        $this->entity->getRepository(Atividade::class)->saveOrUpdate($atividade);
    }

    /**
     * @test
     * @dataProvider dataFactory
     * @param Atividade $atividade
     * @author Dilson Rabelo
     * @expectedException \Exception
     * @expectedExceptionMessage Você precisa ter um projeto associado!
     */
    public function shouldValidadeWithoutProject(Atividade $atividade) {

        $pessoa = new Pessoa();
        $pessoa->setNome('ExamplePessoa');
        $pessoa->setProfissao('Example Profissao');
        $atividade->setPessoa($pessoa);

        $this->entity->getRepository(Atividade::class)->saveOrUpdate($atividade);
    }

    /**
     * @param Atividade $atividade
     * @test
     * @dataProvider dataFactory
     * @author Higo Lobato Sampaio
     * @return Atividade
     */
    public function shouldCreateAtividade(Atividade $atividade) {

        //Persist Project
        $projeto = new Projeto();
        $projeto->setNome("ExampleProject");

        $this->entity->getRepository(Projeto::class)->saveOrUpdate($projeto);

        //Persist Material
        $material = new Material();
        $material->setDescricao('ExampleMaterial');
        $material->setQuantidade(500);

        $this->entity->getRepository(Material::class)->saveOrUpdate($material);

        //Persist Actor
        $pessoa = new Pessoa();
        $pessoa->setNome('ExamplePessoa');
        $pessoa->setProfissao('Example Profissao');

        $this->entity->getRepository(Pessoa::class)->saveOrUpdate($pessoa);


        //Create Activitie detail
        $detalheAtividade = new DetalhamentoAtividade();

        $detalheAtividade->setQuantidade(10);
        $detalheAtividade->setMaterial($material);

        $atividade->setProjeto($projeto);
        $atividade->setDetalhamentoAtividade($detalheAtividade);
        $atividade->setPessoa($pessoa);


        $this->entity->getRepository(Atividade::class)->saveOrUpdate($atividade);
        $this->assertTrue(is_numeric($atividade->getId()));

        return $atividade;

    }

    /**
     * @param Atividade $atividade
     * @test
     * @author Higo Lobato Sampaio
     * @dataProvider dataFactory
     * @return Atividade
     */
    public function shouldSearchAtividade(Atividade $atividade) {

        $arrayAtividade = $this->entity->getRepository(Atividade::class)->findForName($atividade->getNome());

        $this->assertEquals($arrayAtividade[0]->getNome(), $atividade->getNome());
        $this->assertEquals($arrayAtividade[0]->getDataconclusao(), $atividade->getDataconclusao());
        $this->assertEquals($arrayAtividade[0]->isStatus(), $atividade->isStatus());
    }

    /**
     * @param Atividade $atividade
     * @test
     * @dataProvider dataFactory
     * @author Higo Lobato Sampaio
     */
    public function shouldDestroyAtividade(Atividade $atividade) {

        $arrayAtividade = $this->entity->getRepository(Atividade::class)->findForName($atividade->getNome());

        $projeto = $arrayAtividade[0]->getProjeto();
        $pessoa = $arrayAtividade[0]->getPessoa();
        $detalhamentoAtividade = $arrayAtividade[0]->getDetalhamentoAtividade();
        $material = $detalhamentoAtividade[0]->getMaterial();

        $this->entity->getRepository(Atividade::class)->delete($arrayAtividade[0]);
        $this->entity->getRepository(Projeto::class)->delete($projeto);
        $this->entity->getRepository(Pessoa::class)->delete($pessoa);
        $this->entity->getRepository(Material::class)->delete($material);

        $arrayAtividade = $this->entity->getRepository(Atividade::class)->findForName($atividade->getNome());
        $this->assertCount(0, $arrayAtividade);
    }

    public function dataFactory() {

        $atividade = new Atividade();
        $atividade->setNome('ExampleAtividade');
        $atividade->setDataconclusao(new \DateTime('now'));
        $atividade->setStatus('true');

        return [
            [$atividade]
        ];

    }
}