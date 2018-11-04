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

/**
 * MapController
 */
class MapController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * mapRepository
     *
     * @var \Golf\Skitourenrouten\Domain\Repository\MapRepository
     * @inject
     */
    protected $mapRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $maps = $this->mapRepository->findAll();
        $this->view->assign('maps', $maps);
    }
}
