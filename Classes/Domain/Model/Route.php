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
 * Skiroute
 */
class Route extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Routenname
     *
     * @var string
     * @TYPO3\\CMS\\Extbase\\Annotation\\Validate NotEmpty
     */
    protected $routenname = '';

    /**
     * Kurzcharakteristik
     *
     * @var string
     */
    protected $kurzcharakteristik = '';

    /**
     * Beschreibung
     *
     * @var string
     */
    protected $description = '';

    /**
     * Anfahrt
     *
     * @var string
     */
    protected $anfahrt = '';

    /**
     * Ausgangspunkt
     *
     * @var string
     */
    protected $ausgangspunkt = '';

    /**
     * Routenverlauf
     *
     * @var string
     */
    protected $routenverlauf = '';

    /**
     * Abfahrt
     *
     * @var string
     */
    protected $abfahrt = '';

    /**
     * Varianten
     *
     * @var string
     */
    protected $varianten = '';

    /**
     * Lawinengefahr
     *
     * @var int
     */
    protected $lawinengefahr = 0;

    /**
     * Gesamtanspruch
     *
     * @var int
     */
    protected $gesamtanspruch = 0;

    /**
     * Skitechnische Bewertung
     *
     * @var string
     */
    protected $skitechnischebewertung = '';

    /**
     * Höhenmeter
     *
     * @var int
     */
    protected $hoehenmeter = 0;

    /**
     * Gehzeit (in Minuten)
     *
     * @var string
     */
    protected $gehzeit = '';

    /**
     * Schönheit
     *
     *
     * @var int
     */
    protected $schoenheit = 0;

    /**
     * Beliebtheit
     *
     *
     * @var int
     */
    protected $beliebtheit = 0;

    /**
     * Hangexposition
     *
     * @var string
     */
    protected $hangexposition = '';

    /**
     * Hinweise
     *
     *
     * @var string
     */
    protected $hinweise = '';

    /**
     * Info-quelle
     *
     *
     * @var string
     */
    protected $infoquelle = '';

    /**
     * Track-Datei (.gpx)
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     * @TYPO3\\CMS\\Extbase\\Annotation\\Cascade remove
     */
    protected $track = null;

    /**
     * Übersichtsbilder
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     * @TYPO3\\CMS\\Extbase\\Annotation\\Cascade remove
     */
    protected $uebersichtsbilder = null;

    /**
     * Aktionbilder
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     * @TYPO3\\CMS\\Extbase\\Annotation\\Cascade remove
     */
    protected $aktionbilder = null;

    /**
     * Berge
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Golf\Skitourenrouten\Domain\Model\Mountain>
     */
    protected $mountains = null;

    /**
     * Gebirge
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Golf\Skitourenrouten\Domain\Model\Mountainregion>
     */
    protected $mountainregions = null;

    /**
     * Hütte / Einkehr
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\GeorgRinger\News\Domain\Model\News>
     * @TYPO3\\CMS\\Extbase\\Annotation\\Lazy
     */
    protected $huette = null;

    /**
     * maps
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Golf\Skitourenrouten\Domain\Model\Map>
     * @TYPO3\\CMS\\Extbase\\Annotation\\Lazy
     */
    protected $maps = null;

    /**
     * Skitourenführer
     *
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\GeorgRinger\News\Domain\Model\News>
     */
    protected $guide = null;

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
        $this->track = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->uebersichtsbilder = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->aktionbilder = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->mountains = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->mountainregions = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->huette = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->maps = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->guide = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the routenname
     *
     * @return string $routenname
     */
    public function getRoutenname()
    {
        return $this->routenname;
    }

    /**
     * Sets the routenname
     *
     * @param string $routenname
     * @return void
     */
    public function setRoutenname($routenname)
    {
        $this->routenname = $routenname;
    }

    /**
     * Returns the kurzcharakteristik
     *
     * @return string $kurzcharakteristik
     */
    public function getKurzcharakteristik()
    {
        return $this->kurzcharakteristik;
    }

    /**
     * Sets the kurzcharakteristik
     *
     * @param string $kurzcharakteristik
     * @return void
     */
    public function setKurzcharakteristik($kurzcharakteristik)
    {
        $this->kurzcharakteristik = $kurzcharakteristik;
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
     * Returns the anfahrt
     *
     * @return string $anfahrt
     */
    public function getAnfahrt()
    {
        return $this->anfahrt;
    }

    /**
     * Sets the anfahrt
     *
     * @param string $anfahrt
     * @return void
     */
    public function setAnfahrt($anfahrt)
    {
        $this->anfahrt = $anfahrt;
    }

    /**
     * Returns the ausgangspunkt
     *
     * @return string $ausgangspunkt
     */
    public function getAusgangspunkt()
    {
        return $this->ausgangspunkt;
    }

    /**
     * Sets the ausgangspunkt
     *
     * @param string $ausgangspunkt
     * @return void
     */
    public function setAusgangspunkt($ausgangspunkt)
    {
        $this->ausgangspunkt = $ausgangspunkt;
    }

    /**
     * Returns the routenverlauf
     *
     * @return string $routenverlauf
     */
    public function getRoutenverlauf()
    {
        return $this->routenverlauf;
    }

    /**
     * Sets the routenverlauf
     *
     * @param string $routenverlauf
     * @return void
     */
    public function setRoutenverlauf($routenverlauf)
    {
        $this->routenverlauf = $routenverlauf;
    }

    /**
     * Returns the abfahrt
     *
     * @return string $abfahrt
     */
    public function getAbfahrt()
    {
        return $this->abfahrt;
    }

    /**
     * Sets the abfahrt
     *
     * @param string $abfahrt
     * @return void
     */
    public function setAbfahrt($abfahrt)
    {
        $this->abfahrt = $abfahrt;
    }

    /**
     * Adds a Mountain
     *
     * @param \Golf\Skitourenrouten\Domain\Model\Mountain $mountain
     * @return void
     */
    public function addMountain(\Golf\Skitourenrouten\Domain\Model\Mountain $mountain)
    {
        $this->mountains->attach($mountain);
    }

    /**
     * Removes a Mountain
     *
     * @param \Golf\Skitourenrouten\Domain\Model\Mountain $mountainToRemove The Mountain to be removed
     * @return void
     */
    public function removeMountain(\Golf\Skitourenrouten\Domain\Model\Mountain $mountainToRemove)
    {
        $this->mountains->detach($mountainToRemove);
    }

    /**
     * Returns the mountains
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Golf\Skitourenrouten\Domain\Model\Mountain> $mountains
     */
    public function getMountains()
    {
        return $this->mountains;
    }

    /**
     * Sets the mountains
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Golf\Skitourenrouten\Domain\Model\Mountain> $mountains
     * @return void
     */
    public function setMountains(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $mountains)
    {
        $this->mountains = $mountains;
    }

    /**
     * Adds a Mountainregion
     *
     * @param \Golf\Skitourenrouten\Domain\Model\Mountainregion $mountainregion
     * @return void
     */
    public function addMountainregion(\Golf\Skitourenrouten\Domain\Model\Mountainregion $mountainregion)
    {
        $this->mountainregions->attach($mountainregion);
    }

    /**
     * Removes a Mountainregion
     *
     * @param \Golf\Skitourenrouten\Domain\Model\Mountainregion $mountainregionToRemove The Mountainregion to be removed
     * @return void
     */
    public function removeMountainregion(\Golf\Skitourenrouten\Domain\Model\Mountainregion $mountainregionToRemove)
    {
        $this->mountainregions->detach($mountainregionToRemove);
    }

    /**
     * Returns the mountainregions
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Golf\Skitourenrouten\Domain\Model\Mountainregion> $mountainregions
     */
    public function getMountainregions()
    {
        return $this->mountainregions;
    }

    /**
     * Sets the mountainregions
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Golf\Skitourenrouten\Domain\Model\Mountainregion> $mountainregions
     * @return void
     */
    public function setMountainregions(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $mountainregions)
    {
        $this->mountainregions = $mountainregions;
    }

    /**
     * Returns the varianten
     *
     * @return string $varianten
     */
    public function getVarianten()
    {
        return $this->varianten;
    }

    /**
     * Sets the varianten
     *
     * @param string $varianten
     * @return void
     */
    public function setVarianten($varianten)
    {
        $this->varianten = $varianten;
    }

    /**
     * Returns the lawinengefahr
     *
     * @return int $lawinengefahr
     */
    public function getLawinengefahr()
    {
        return $this->lawinengefahr;
    }

    /**
     * Sets the lawinengefahr
     *
     * @param int $lawinengefahr
     * @return void
     */
    public function setLawinengefahr($lawinengefahr)
    {
        $this->lawinengefahr = $lawinengefahr;
    }

    /**
     * Returns the gesamtanspruch
     *
     * @return int $gesamtanspruch
     */
    public function getGesamtanspruch()
    {
        return $this->gesamtanspruch;
    }

    /**
     * Sets the gesamtanspruch
     *
     * @param int $gesamtanspruch
     * @return void
     */
    public function setGesamtanspruch($gesamtanspruch)
    {
        $this->gesamtanspruch = $gesamtanspruch;
    }

    /**
     * Returns the skitechnischebewertung
     *
     * @return string $skitechnischebewertung
     */
    public function getSkitechnischebewertung()
    {
        return $this->skitechnischebewertung;
    }

    /**
     * Sets the skitechnischebewertung
     *
     * @param string $skitechnischebewertung
     * @return void
     */
    public function setSkitechnischebewertung($skitechnischebewertung)
    {
        $this->skitechnischebewertung = $skitechnischebewertung;
    }

    /**
     * Returns the hoehenmeter
     *
     * @return int $hoehenmeter
     */
    public function getHoehenmeter()
    {
        return $this->hoehenmeter;
    }

    /**
     * Sets the hoehenmeter
     *
     * @param int $hoehenmeter
     * @return void
     */
    public function setHoehenmeter($hoehenmeter)
    {
        $this->hoehenmeter = $hoehenmeter;
    }

    /**
     * Returns the gehzeit
     *
     * @return string $gehzeit
     */
    public function getGehzeit()
    {
        return $this->gehzeit;
    }

    /**
     * Sets the gehzeit
     *
     * @param string $gehzeit
     * @return void
     */
    public function setGehzeit($gehzeit)
    {
        $this->gehzeit = $gehzeit;
    }

    /**
     * Returns the schoenheit
     *
     * @return int $schoenheit
     */
    public function getSchoenheit()
    {
        return $this->schoenheit;
    }

    /**
     * Sets the schoenheit
     *
     * @param int $schoenheit
     * @return void
     */
    public function setSchoenheit($schoenheit)
    {
        $this->schoenheit = $schoenheit;
    }

    /**
     * Returns the beliebtheit
     *
     * @return int $beliebtheit
     */
    public function getBeliebtheit()
    {
        return $this->beliebtheit;
    }

    /**
     * Sets the beliebtheit
     *
     * @param int $beliebtheit
     * @return void
     */
    public function setBeliebtheit($beliebtheit)
    {
        $this->beliebtheit = $beliebtheit;
    }

    /**
     * Returns the hangexposition
     *
     * @return string $hangexposition
     */
    public function getHangexposition()
    {
        return $this->hangexposition;
    }

    /**
     * Sets the hangexposition
     *
     * @param string $hangexposition
     * @return void
     */
    public function setHangexposition($hangexposition)
    {
        $this->hangexposition = $hangexposition;
    }

    /**
     * Returns the hinweise
     *
     * @return string $hinweise
     */
    public function getHinweise()
    {
        return $this->hinweise;
    }

    /**
     * Sets the hinweise
     *
     * @param string $hinweise
     * @return void
     */
    public function setHinweise($hinweise)
    {
        $this->hinweise = $hinweise;
    }

    /**
     * Returns the infoquelle
     *
     * @return string $infoquelle
     */
    public function getInfoquelle()
    {
        return $this->infoquelle;
    }

    /**
     * Sets the infoquelle
     *
     * @param string $infoquelle
     * @return void
     */
    public function setInfoquelle($infoquelle)
    {
        $this->infoquelle = $infoquelle;
    }

    /**
     * Adds a FileReference
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $track
     * @return void
     */
    public function addTrack(\TYPO3\CMS\Extbase\Domain\Model\FileReference $track)
    {
        $this->track->attach($track);
    }

    /**
     * Removes a FileReference
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $trackToRemove The FileReference to be removed
     * @return void
     */
    public function removeTrack(\TYPO3\CMS\Extbase\Domain\Model\FileReference $trackToRemove)
    {
        $this->track->detach($trackToRemove);
    }

    /**
     * Returns the track
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $track
     */
    public function getTrack()
    {
        return $this->track;
    }

    /**
     * Sets the track
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $track
     * @return void
     */
    public function setTrack(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $track)
    {
        $this->track = $track;
    }

    /**
     * Adds a FileReference
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $uebersichtsbilder
     * @return void
     */
    public function addUebersichtsbilder(\TYPO3\CMS\Extbase\Domain\Model\FileReference $uebersichtsbilder)
    {
        $this->uebersichtsbilder->attach($uebersichtsbilder);
    }

    /**
     * Removes a FileReference
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $uebersichtsbilderToRemove The FileReference to be removed
     * @return void
     */
    public function removeUebersichtsbilder(\TYPO3\CMS\Extbase\Domain\Model\FileReference $uebersichtsbilderToRemove)
    {
        $this->uebersichtsbilder->detach($uebersichtsbilderToRemove);
    }

    /**
     * Returns the uebersichtsbilder
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $uebersichtsbilder
     */
    public function getUebersichtsbilder()
    {
        return $this->uebersichtsbilder;
    }

    /**
     * Sets the uebersichtsbilder
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $uebersichtsbilder
     * @return void
     */
    public function setUebersichtsbilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $uebersichtsbilder)
    {
        $this->uebersichtsbilder = $uebersichtsbilder;
    }

    /**
     * Adds a FileReference
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $aktionbilder
     * @return void
     */
    public function addAktionbilder(\TYPO3\CMS\Extbase\Domain\Model\FileReference $aktionbilder)
    {
        $this->aktionbilder->attach($aktionbilder);
    }

    /**
     * Removes a FileReference
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $aktionbilderToRemove The FileReference to be removed
     * @return void
     */
    public function removeAktionbilder(\TYPO3\CMS\Extbase\Domain\Model\FileReference $aktionbilderToRemove)
    {
        $this->aktionbilder->detach($aktionbilderToRemove);
    }

    /**
     * Returns the aktionbilder
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $aktionbilder
     */
    public function getAktionbilder()
    {
        return $this->aktionbilder;
    }

    /**
     * Sets the aktionbilder
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $aktionbilder
     * @return void
     */
    public function setAktionbilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $aktionbilder)
    {
        $this->aktionbilder = $aktionbilder;
    }

    /**
     * Adds a News
     *
     * @param \GeorgRinger\News\Domain\Model\News $huette
     * @return void
     */
    public function addHuette(\GeorgRinger\News\Domain\Model\News $huette)
    {
        $this->huette->attach($huette);
    }

    /**
     * Removes a News
     *
     * @param \GeorgRinger\News\Domain\Model\News $huetteToRemove The News to be removed
     * @return void
     */
    public function removeHuette(\GeorgRinger\News\Domain\Model\News $huetteToRemove)
    {
        $this->huette->detach($huetteToRemove);
    }

    /**
     * Returns the huette
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\GeorgRinger\News\Domain\Model\News> $huette
     */
    public function getHuette()
    {
        return $this->huette;
    }

    /**
     * Sets the huette
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\GeorgRinger\News\Domain\Model\News> $huette
     * @return void
     */
    public function setHuette(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $huette)
    {
        $this->huette = $huette;
    }

    /**
     * Adds a Map
     *
     * @param \Golf\Skitourenrouten\Domain\Model\Map $map
     * @return void
     */
    public function addMap(\Golf\Skitourenrouten\Domain\Model\Map $map)
    {
        $this->maps->attach($map);
    }

    /**
     * Removes a Map
     *
     * @param \Golf\Skitourenrouten\Domain\Model\Map $mapToRemove The Map to be removed
     * @return void
     */
    public function removeMap(\Golf\Skitourenrouten\Domain\Model\Map $mapToRemove)
    {
        $this->maps->detach($mapToRemove);
    }

    /**
     * Returns the maps
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Golf\Skitourenrouten\Domain\Model\Map> $maps
     */
    public function getMaps()
    {
        return $this->maps;
    }

    /**
     * Sets the maps
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Golf\Skitourenrouten\Domain\Model\Map> $maps
     * @return void
     */
    public function setMaps(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $maps)
    {
        $this->maps = $maps;
    }

    /**
     * Adds a News
     *
     * @param \GeorgRinger\News\Domain\Model\News $guide
     * @return void
     */
    public function addGuide(\GeorgRinger\News\Domain\Model\News $guide)
    {
        $this->guide->attach($guide);
    }

    /**
     * Removes a News
     *
     * @param \GeorgRinger\News\Domain\Model\News $guideToRemove The News to be removed
     * @return void
     */
    public function removeGuide(\GeorgRinger\News\Domain\Model\News $guideToRemove)
    {
        $this->guide->detach($guideToRemove);
    }

    /**
     * Returns the guide
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\GeorgRinger\News\Domain\Model\News> $guide
     */
    public function getGuide()
    {
        return $this->guide;
    }

    /**
     * Sets the guide
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\GeorgRinger\News\Domain\Model\News> $guide
     * @return void
     */
    public function setGuide(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $guide)
    {
        $this->guide = $guide;
    }
}
