<?php
/**
 * User: dilsonrabelo
 * Date: 26/08/16
 * Time: 20:40
 */

namespace App\Controller;

use Doctrine\ORM\EntityManager;
use Interop\Container\ContainerInterface;
use RKA\Session;
use Slim\Views\Twig;

/**
 * Class AbstractController
 * @package App\Controller
 */
abstract class AbstractController
{
    /**
     * @var EntityManager
     */
    protected $_dm;

    /**
     * @var ContainerInterface $_ci
     */
    protected $_ci;

    /**
     * @var Session
     */
    protected $session;


    /**
     * @var Twig
     */
    protected $view;

    /**
     * AbstractAction constructor.
     * @param ContainerInterface $ci
     */
    public function __construct(ContainerInterface $ci)
    {
        $this->_ci = $ci;
        $this->_dm = $ci->get('database');
        $this->session = $this->_ci->get('session');
        $this->view = $this->_ci->get('view');
    }


}