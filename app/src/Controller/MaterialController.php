<?php

namespace App\Controller;
use App\Mapper\Material;
use Interop\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

/**
 * Class MaterialController
 * @package App\Controller
 */
class MaterialController extends AbstractController
{

    /**
     * MaterialController constructor.
     * @param ContainerInterface $ci
     */
    public function __construct(ContainerInterface $ci)
    {
        parent::__construct($ci);
    }

    /**
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * @return ResponseInterface
     */
    public function indexAction(ServerRequestInterface $request, ResponseInterface $response) {

        return $this->view->render($response, 'material/index.twig', []);

    }

    /**
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * @return mixed
     */
    public function saveAction(ServerRequestInterface $request, ResponseInterface $response) {

        $material = new Material();
        $material->setDescricao($request->getParam('name'));
        $material->setQuantidade($request->getParam('count'));

        $this->_dm->persist($material);
        $this->_dm->flush();

        return $response->withJson([ 'return' => true, 'message' => 'Material salvo com sucesso.' ]);

    }

    /**
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * @return ResponseInterface
     */
    public function listTableMaterialAction(ServerRequestInterface $request, ResponseInterface $response) {

        $listMaterial = $this->_dm->getRepository(Material::class)->findAll();

        return $this->view->render($response, 'material/listTableMaterial.twig', [ 'listMaterial' => $listMaterial ]);

    }



}