<?php
namespace Golf\Skitourenrouten\Controller;

use Golf\Skitourenrouten\Domain\Repository\RouteRepository;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Object\ObjectManager;
use TYPO3\CMS\Extbase\Persistence\Generic\PersistenceManager;

class MapController extends ActionController
{
    /**
     * @var RouteRepository
     */
    protected $routeRepository;

    /**
     * @param RouteRepository $routeRepository
     */
    public function injectRouteRepository(RouteRepository $routeRepository)
    {
        $this->routeRepository = $routeRepository;
    }

    public function jsonDataAction()
    {
        $routes = $this->routeRepository->findAll();
        $tourData = [];
        $pageUid = $this->settings['singleTourPageUid'] ?? $this->request->getAttribute('routing')->getPageId();

        foreach ($routes as $route) {
            if ($route->getMountains()->count() > 0) {
                $mountain = $route->getMountains()->current();
                $tourData[] = [
                    'name' => $mountain->getName(),
                    'height' => $mountain->getHeight(),
                    'latitude' => $mountain->getLatitude(),
                    'longitude' => $mountain->getLongitude(),
                    'routename' => $route->getRoutenname(),
                    'url' => $this->uriBuilder
                        ->reset()
                        ->setTargetPageUid($pageUid)
                        ->setCreateAbsoluteUri(true)
                        ->uriFor('show', ['route' => $route], 'Route')
                ];
            }
        }

        return $this->jsonResponse($tourData);
    }
}
