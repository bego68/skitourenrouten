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

use Golf\Skitourenrouten\Domain\Repository\RouteRepository;
use TYPO3\CMS\Extbase\Annotation\Inject;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use Psr\Http\Message\ResponseInterface;
use Golf\Skitourenrouten\Domain\Model\Route;

/**
 * RouteController
 */
class RouteController extends ActionController
{
    /**
     * routeRepository
     *
     * @var \Golf\Skitourenrouten\Domain\Repository\RouteRepository
     */
    protected $routeRepository = null;
    
	
  /**
	 * injectRouteRepository
	 *
	 * @param RouteRepository $routesRepository
	 * @return void
	 */
	public function injectRouteRepository(RouteRepository $routeRepository) {
		$this->routeRepository = $routeRepository;
	}

    /**
     * action list
     *
     * @return void
     */
    public function listAction():ResponseInterface
    {   
        $routes = $this->routeRepository->findAll();
        $this->view->assign('routes', $routes);
		 return $this->htmlResponse();
    }

    /**
     * action show
     *
     * @param \Golf\Skitourenrouten\Domain\Model\Route $route
     * @return void
     */
    public function showAction(Route $route):ResponseInterface
    {
        $this->view->assign('route', $route);
		return $this->htmlResponse();
    }
	
	
	
}
