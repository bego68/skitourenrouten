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
 * MountainregionController
 */
class MountainregionController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * mountainregionRepository
     *
     * @var \Golf\Skitourenrouten\Domain\Repository\MountainregionRepository
     * @TYPO3\\CMS\\Extbase\\Annotation\\Inject
     */
    protected $mountainregionRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $mountainregions = $this->mountainregionRepository->findAll();
        $this->view->assign('mountainregions', $mountainregions);
    }

    /**
     * action show
     *
     * @param \Golf\Skitourenrouten\Domain\Model\Mountainregion $mountainregion
     * @return void
     */
    public function showAction(\Golf\Skitourenrouten\Domain\Model\Mountainregion $mountainregion)
    {
        $this->view->assign('mountainregion', $mountainregion);
    }
}
