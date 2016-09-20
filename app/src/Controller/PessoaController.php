<?php
/**
 * Created by PhpStorm.
 * User: dilsonrabelo
 * Date: 19/09/16
 * Time: 16:16
 */

namespace App\Controller;


use App\Mapper\Pessoa;
use Interop\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class PessoaController extends AbstractController
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

        return $this->view->render($response, 'pessoa/index.twig', []);

    }

    public function saveAction(ServerRequestInterface $request, ResponseInterface $response) {


        $pessoa = new Pessoa();
        $pessoa->setNome($request->getParam('name'));
        $pessoa->setProfissao($request->getParam('profissao'));

        $this->_dm->persist($pessoa);
        $this->_dm->flush();

        return $response->withJson([ 'return' => true, 'message' => 'Usuário salvo com sucesso.' ]);

    }

    public function listTablePessoaAction(ServerRequestInterface $request, ResponseInterface $response) {

        $listPessoas = $this->_dm->getRepository(Pessoa::class)->findAll();

        return $this->view->render($response, 'pessoa/listTablePessoa.twig', [ 'listPessoas' => $listPessoas ]);

    }

}