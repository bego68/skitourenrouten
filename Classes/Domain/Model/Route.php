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

use TYPO3\CMS\Extbase\Annotation;
use TYPO3\CMS\Extbase\Annotation\ORM\Cascade;
use TYPO3\CMS\Extbase\Annotation\ORM\Lazy;
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use \TYPO3\CMS\Extbase\Persistence\ObjectStorage;
use \TYPO3\CMS\Extbase\Domain\Model\FileReference;

/**
 * Skiroute
 */
class Route extends AbstractEntity
{
    /**
     * Routenname
     *
     * @var string
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
     * @var ObjectStorage<FileReference>
     * @Cascade("remove")
     */
    protected $track = null;

    /**
     * Übersichtsbilder
     *
     * @var ObjectStorage<FileReference>
     * @Cascade remove
     */
    protected $uebersichtsbilder = null;

    /**
     * Aktionbilder
     *
     * @var ObjectStorage<FileReference>
     * @Cascade remove
     */
    protected $aktionbilder = null;

    /**
     * Berge
     *
     * @var ObjectStorage<Mountain>
     */
    protected $mountains = null;

    /**
     * Gebirge
     *
     * @var ObjectStorage<Mountainregion>
     */
    protected $mountainregions = null;

    /**
     * Hütte / Einkehr
     *
     * @var ObjectStorage<\GeorgRinger\News\Domain\Model\News>
     * @Lazy
     */
    protected $huette = null;

    /**
     * maps
     *
     * @var ObjectStorage<\Golf\Skitourenrouten\Domain\Model\Map>
     * @Lazy
     */
    protected $maps = null;

    /**
     * Skitourenführer
     *
     *
     * @var ObjectStorage<\GeorgRinger\News\Domain\Model\News>
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
        $this->track = new ObjectStorage();
        $this->uebersichtsbilder = new ObjectStorage();
        $this->aktionbilder = new ObjectStorage();
        $this->mountains = new ObjectStorage();
        $this->mountainregions = new ObjectStorage();
        $this->huette = new ObjectStorage();
        $this->maps = new ObjectStorage();
        $this->guide = new ObjectStorage();
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
     * @param Mountain $mountain
     * @return void
     */
    public function addMountain(Mountain $mountain)
    {
        $this->mountains->attach($mountain);
    }

    /**
     * Removes a Mountain
     *
     * @param Mountain $mountainToRemove The Mountain to be removed
     * @return void
     */
    public function removeMountain(Mountain $mountainToRemove)
    {
        $this->mountains->detach($mountainToRemove);
    }

    /**
     * Returns the mountains
     *
     * @return ObjectStorage<Mountain> $mountains
     */
    public function getMountains()
    {
        return $this->mountains;
    }

    /**
     * Sets the mountains
     *
     * @param ObjectStorage<Mountain> $mountains
     * @return void
     */
    public function setMountains(ObjectStorage $mountains)
    {
        $this->mountains = $mountains;
    }

    /**
     * Adds a Mountainregion
     *
     * @param Mountainregion $mountainregion
     * @return void
     */
    public function addMountainregion(Mountainregion $mountainregion)
    {
        $this->mountainregions->attach($mountainregion);
    }

    /**
     * Removes a Mountainregion
     *
     * @param Mountainregion $mountainregionToRemove The Mountainregion to be removed
     * @return void
     */
    public function removeMountainregion(Mountainregion $mountainregionToRemove)
    {
        $this->mountainregions->detach($mountainregionToRemove);
    }

    /**
     * Returns the mountainregions
     *
     * @return ObjectStorage<Mountainregion> $mountainregions
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
     * @param FileReference $track
     * @return void
     */
    public function addTrack(FileReference $track)
    {
        $this->track->attach($track);
    }

    /**
     * Removes a FileReference
     *
     * @param FileReference $trackToRemove The FileReference to be removed
     * @return void
     */
    public function removeTrack(FileReference $trackToRemove)
    {
        $this->track->detach($trackToRemove);
    }

    /**
     * Returns the track
     *
     * @return ObjectStorage<FileReference> $track
     */
    public function getTrack()
    {
        return $this->track;
    }

    /**
     * Sets the track
     *
     * @param ObjectStorage<FileReference> $track
     * @return void
     */
    public function setTrack(ObjectStorage $track)
    {
        $this->track = $track;
    }

    /**
     * Adds a FileReference
     *
     * @param FileReference $uebersichtsbilder
     * @return void
     */
    public function addUebersichtsbilder(FileReference $uebersichtsbilder)
    {
        $this->uebersichtsbilder->attach($uebersichtsbilder);
    }

    /**
     * Removes a FileReference
     *
     * @param FileReference $uebersichtsbilderToRemove The FileReference to be removed
     * @return void
     */
    public function removeUebersichtsbilder(FileReference $uebersichtsbilderToRemove)
    {
        $this->uebersichtsbilder->detach($uebersichtsbilderToRemove);
    }

    /**
     * Returns the uebersichtsbilder
     *
     * @return ObjectStorage<FileReference> $uebersichtsbilder
     */
    public function getUebersichtsbilder()
    {
        return $this->uebersichtsbilder;
    }

    /**
     * Sets the uebersichtsbilder
     *
     * @param ObjectStorage<FileReference> $uebersichtsbilder
     * @return void
     */
    public function setUebersichtsbilder(ObjectStorage $uebersichtsbilder)
    {
        $this->uebersichtsbilder = $uebersichtsbilder;
    }

    /**
     * Adds a FileReference
     *
     * @param FileReference $aktionbilder
     * @return void
     */
    public function addAktionbilder(FileReference $aktionbilder)
    {
        $this->aktionbilder->attach($aktionbilder);
    }

    /**
     * Removes a FileReference
     *
     * @param FileReference $aktionbilderToRemove The FileReference to be removed
     * @return void
     */
    public function removeAktionbilderFileReference( $aktionbilderToRemove)
    {
        $this->aktionbilder->detach($aktionbilderToRemove);
    }

    /**
     * Returns the aktionbilder
     *
     * @return ObjectStorage<FileReference> $aktionbilder
     */
    public function getAktionbilder()
    {
        return $this->aktionbilder;
    }

    /**
     * Sets the aktionbilder
     *
     * @param \ObjectStorage<\FileReference> $aktionbilder
     * @return void
     */
    public function setAktionbilder(ObjectStorage $aktionbilder)
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
     * @return ObjectStorage<\GeorgRinger\News\Domain\Model\News> $huette
     */
    public function getHuette()
    {
        return $this->huette;
    }

    /**
     * Sets the huette
     *
     * @param ObjectStorage<\GeorgRinger\News\Domain\Model\News> $huette
     * @return void
     */
    public function setHuette(ObjectStorage $huette)
    {
        $this->huette = $huette;
    }

    /**
     * Adds a Map
     *
     * @param \Map $map
     * @return void
     */
    public function addMap(Map $map)
    {
        $this->maps->attach($map);
    }

    /**
     * Removes a Map
     *
     * @param Map $mapToRemove The Map to be removed
     * @return void
     */
    public function removeMap(Map $mapToRemove)
    {
        $this->maps->detach($mapToRemove);
    }

    /**
     * Returns the maps
     *
     * @return ObjectStorage<Map> $maps
     */
    public function getMaps()
    {
        return $this->maps;
    }

    /**
     * Sets the maps
     *
     * @param ObjectStorage<Map> $maps
     * @return void
     */
    public function setMaps(ObjectStorage $maps)
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
     * @return bjectStorage<\GeorgRinger\News\Domain\Model\News> $guide
     */
    public function getGuide()
    {
        return $this->guide;
    }

    /**
     * Sets the guide
     *
     * @param ObjectStorage<\GeorgRinger\News\Domain\Model\News> $guide
     * @return void
     */
    public function setGuide(ObjectStorage $guide)
    {
        $this->guide = $guide;
    }
}
