<?php
/**
 * Created by PhpStorm.
 * User: dilsonrabelo
 * Date: 19/09/16
 * Time: 16:16
 */

namespace App\Controller;


use App\Mapper\Pessoa;
use App\Mapper\Projeto;
use Interop\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class ProjetoController extends AbstractController
{
    /**
     * PessoaController constructor.
     * @param ContainerInterface $ci
     */
    public function __construct(ContainerInterface $ci)
    {
        parent::__construct($ci);
    }

    public function indexAction(ServerRequestInterface $request, ResponseInterface $response) {

        return $this->view->render($response, 'projeto/index.twig', []);

    }

    public function saveAction(ServerRequestInterface $request, ResponseInterface $response) {


        $projeto = new Projeto();
        $projeto->setNome($request->getParam('name'));

        $this->_dm->persist($projeto);
        $this->_dm->flush();

        return $response->withJson([ 'return' => true, 'message' => 'Projeto salvo com sucesso.' ]);

    }

    public function listTableProjetoAction(ServerRequestInterface $request, ResponseInterface $response) {

        $listProject = $this->_dm->getRepository(Projeto::class)->findAll();

        return $this->view->render($response, 'projeto/listTableProjeto.twig', [ 'listProject' => $listProject ]);

    }

}