<?php
namespace Golf\Skitourenrouten\Controller;

/***
 *
 * This file is part of the "Skitouren-Routen" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018 Hubertus Golf <info@berti-golf.de>, Volleyballserver
 *
 ***/

use \Golf\Skitourenrouten\Domain\Repository\RouteRepository;
use TYPO3\CMS\Extbase\Annotation\Inject;

/**
 * RouteController
 */
class RouteController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * routeRepository
     *
     * @var \Golf\Skitourenrouten\Domain\Repository\RouteRepository
     * @TYPO3\CMS\Extbase\Annotation\Inject
     */
    protected $routeRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $routes = $this->routeRepository->findAll();
        $this->view->assign('routes', $routes);
    }

    /**
     * action show
     *
     * @param \Golf\Skitourenrouten\Domain\Model\Route $route
     * @return void
     */
    public function showAction(\Golf\Skitourenrouten\Domain\Model\Route $route)
    {
        $this->view->assign('route', $route);
    }
}
