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
 * MountainController
 */
class MountainController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * mountainRepository
     *
     * @var \Golf\Skitourenrouten\Domain\Repository\MountainRepository
     * @TYPO3\\CMS\\Extbase\\Annotation\\Inject
     */
    protected $mountainRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $mountains = $this->mountainRepository->findAll();
        $this->view->assign('mountains', $mountains);
    }

    /**
     * action show
     *
     * @param \Golf\Skitourenrouten\Domain\Model\Mountain $mountain
     * @return void
     */
    public function showAction(\Golf\Skitourenrouten\Domain\Model\Mountain $mountain)
    {
        $this->view->assign('mountain', $mountain);
    }
}
