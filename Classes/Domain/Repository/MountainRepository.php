<?php
namespace Golf\Skitourenrouten\Domain\Repository;

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
 * The repository for Mountains
 */
class MountainRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    /**
     * @var array
     */
    protected $defaultOrderings = [
        'sorting' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING
    ];
}
