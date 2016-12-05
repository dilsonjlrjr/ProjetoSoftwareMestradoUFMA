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

/**
 * Class PessoaController
 * @package App\Controller
 */
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

    /**
     * Pagina render index de pessoa
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * @return ResponseInterface
     */
    public function indexAction(ServerRequestInterface $request, ResponseInterface $response) {

        return $this->view->render($response, 'pessoa/index.twig', []);

    }

    /**
     * Persiste pessoa e encaminha json como retorno
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * @return mixed
     */
    public function saveAction(ServerRequestInterface $request, ResponseInterface $response) {

        //Persistindo Pessoa
        $pessoa = new Pessoa();
        $pessoa->setNome($request->getParam('name'));
        $pessoa->setProfissao($request->getParam('profissao'));

        $this->_dm->persist($pessoa);
        $this->_dm->flush();

        return $response->withJson([ 'return' => true, 'message' => 'Usuário salvo com sucesso.' ]);

    }

    /**
     * Lista tabela de dados em ajax
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * @return ResponseInterface
     */
    public function listTablePessoaAction(ServerRequestInterface $request, ResponseInterface $response) {

        //lista todas as pessoas
        $listPessoas = $this->_dm->getRepository(Pessoa::class)->findAll();

        return $this->view->render($response, 'pessoa/listTablePessoa.twig', [ 'listPessoas' => $listPessoas ]);

    }

}