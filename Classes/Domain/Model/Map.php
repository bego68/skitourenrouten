<?php
namespace Golf\Skitourenrouten\Domain\Model;

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
 * Karte
 */
class Map extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Name
     *
     * @var string
     * @validate NotEmpty
     */
    protected $name = '';

    /**
     * Beschreibung
     *
     * @var string
     */
    protected $description = '';

    /**
     * bild
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @cascade remove
     */
    protected $bild = null;

    /**
     * Returns the name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Returns the bild
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $bild
     */
    public function getBild()
    {
        return $this->bild;
    }

    /**
     * Sets the bild
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $bild
     * @return void
     */
    public function setBild(\TYPO3\CMS\Extbase\Domain\Model\FileReference $bild)
    {
        $this->bild = $bild;
    }
}
