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
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Annotation\ORM\Valdate;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;
/**
 * Berg
 */
class Mountain extends AbstractEntity
{
    /**
     * Name
     *
     * @var string
     * Validate NotEmpty
     */
    protected $name = '';

    /**
     * height
     *
     * @var int
     * Validate NotEmpty
     */
    protected $height = 0;

    /**
     * latitude
     *
     * @var float
     */
    protected $latitude = 0.0;

    /**
     * Longitude
     *
     * @var float
     */
    protected $longitude = 0.0;

    /**
     * Zugehörige Gebirge
     *
     * @var ObjectStorage<Mountainregion>
     */
    protected $mountainregions = null;

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->mountainregions = new ObjectStorage();
    }

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
     * Adds a Mountainregion
     *
     * @param Mountainregion $mountainregion
     * @return void
     */
    public function addMountainregion($mountainregion)
    {
        $this->mountainregions->attach($mountainregion);
    }

    /**
     * Removes a Mountainregion
     *
     * @param Mountainregion $mountainregionToRemove The Mountainregion to be removed
     * @return void
     */
    public function removeMountainregion($mountainregionToRemove)
    {
        $this->mountainregions->detach($mountainregionToRemove);
    }

    /**
     * Returns the mountainregions
     *
     * @return ObjectStorage<Mountainregion> mountainregions
     */
    public function getMountainregions()
    {
        return $this->mountainregions;
    }

    /**
     * Sets the mountainregions
     *
     * @param ObjectStorage<Mountainregion> $mountainregions
     * @return void
     */
    public function setMountainregions(ObjectStorage $mountainregions)
    {
        $this->mountainregions = $mountainregions;
    }

    /**
     * Returns the height
     *
     * @return int $height
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Sets the height
     *
     * @param int $height
     * @return void
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * Returns the latitude
     *
     * @return float $latitude
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Sets the latitude
     *
     * @param float $latitude
     * @return void
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * Returns the longitude
     *
     * @return float $longitude
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Sets the longitude
     *
     * @param float $longitude
     * @return void
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }
}
