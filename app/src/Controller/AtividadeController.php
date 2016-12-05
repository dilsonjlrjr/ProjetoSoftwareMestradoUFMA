<?php

namespace App\Controller;


use App\Mapper\Atividade;
use App\Mapper\Material;
use App\Mapper\Pessoa;
use App\Mapper\Projeto;
use Interop\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

/**
 * Class AtividadeController
 * @package App\Controller
 */
class AtividadeController extends AbstractController
{
    /**
     * PessoaController constructor.
     * @param ContainerInterface $ci
     */
    public function __construct(ContainerInterface $ci)
    {
        parent::__construct($ci);
    }

    /**
     * Pagina index
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * @return ResponseInterface
     */
    public function indexAction(ServerRequestInterface $request, ResponseInterface $response) {

        //Obtem as todos os projetos e pessoas
        $listProjetos = $this->_dm->getRepository(Projeto::class)->findAll();
        $listPessoa = $this->_dm->getRepository(Pessoa::class)->findAll();

        return $this->view->render($response, 'atividades/index.twig', [ 'listProjetos' => $listProjetos, 'listPessoa' => $listPessoa ]);

    }

    /**
     * Lista dados em ajax
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * @return ResponseInterface
     */
    public function listTableProjetoAction(ServerRequestInterface $request, ResponseInterface $response) {

        //Localiza um dado projeto
        $listAtividade = $this->_dm->getRepository(Atividade::class)->findBy([ 'projeto' => $request->getParam('idproject') ]);

        return $this->view->render($response, 'atividades/listTableAtividade.twig', [ 'listAtividade' => $listAtividade ]);

    }

    /**
     * lista de materiais
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * @return ResponseInterface
     */
    public function listMaterialAction(ServerRequestInterface $request, ResponseInterface $response) {

        //Busca o material em estoque
        $listMaterial = $this->_dm->getRepository(Material::class)->getMaterialInStock();

        return $this->view->render($response, 'atividades/listMaterial.twig', [ 'listMaterial' => $listMaterial ]);

    }

}