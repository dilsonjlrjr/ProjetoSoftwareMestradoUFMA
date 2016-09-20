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

    public function indexAction(ServerRequestInterface $request, ResponseInterface $response) {

        $listProjetos = $this->_dm->getRepository(Projeto::class)->findAll();

        return $this->view->render($response, 'atividades/index.twig', [ 'listProjetos' => $listProjetos ]);

    }

}