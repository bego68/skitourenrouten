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
use TYPO3\CMS\Extbase\Annotation\Validate;
use TYPO3\CMS\Extbase\Domain\Model\FileReference;
use TYPO3\CMS\Extbase\Annotation\Cascade;

	
/**
 * Karte
 */
class Map extends AbstractEntity
{
    /**
     * Name
     *
     * @var string
     */
    protected $name = '';

    /**
     * Beschreibung
     *
     * @var string
     */
    protected $description = '';

    /**
     * Bild
     *
     * @var FileReference
     */
    protected $bild = null;

    /**
     * EAN
     *
     * @var int
     */
    protected $ean = 0;

    /**
     * Kartenreihe
     *
     * @var string
     */
    protected $kartenreihe = '';

    /**
     * Kartennummer
     *
     * @var string
     */
    protected $kartennummer = '';

    /**
     * Typ
     *
     * @var string
     */
    protected $typ = '';

    /**
     * Maßstab
     *
     * @var string
     */
    protected $massstab = '';

    /**
     * Preis in Euro
     *
     * @var float
     */
    protected $preis = 0.0;

    /**
     * Verlag
     *
     * @var string
     */
    protected $verlag = '';

    /**
     * Link zur Bestellung
     *
     * @var string
     */
    protected $link = '';

    /**
     * Bild-URL
     *
     * @var string
     */
    protected $bildurl = '';

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
     * @return FileReference $bild
     */
    public function getBild()
    {
        return $this->bild;
    }

    /**
     * Sets the bild
     *
     * @param FileReference $bild
     * @return void
     */
    public function setBild(FileReference $bild)
    {
        $this->bild = $bild;
    }

    /**
     * Returns the ean
     *
     * @return int $ean
     */
    public function getEan()
    {
        return $this->ean;
    }

    /**
     * Sets the ean
     *
     * @param int $ean
     * @return void
     */
    public function setEan($ean)
    {
        $this->ean = $ean;
    }

    /**
     * Returns the kartenreihe
     *
     * @return string $kartenreihe
     */
    public function getKartenreihe()
    {
        return $this->kartenreihe;
    }

    /**
     * Sets the kartenreihe
     *
     * @param string $kartenreihe
     * @return void
     */
    public function setKartenreihe($kartenreihe)
    {
        $this->kartenreihe = $kartenreihe;
    }

    /**
     * Returns the kartennummer
     *
     * @return string $kartennummer
     */
    public function getKartennummer()
    {
        return $this->kartennummer;
    }

    /**
     * Sets the kartennummer
     *
     * @param string $kartennummer
     * @return void
     */
    public function setKartennummer($kartennummer)
    {
        $this->kartennummer = $kartennummer;
    }

    /**
     * Returns the typ
     *
     * @return string $typ
     */
    public function getTyp()
    {
        return $this->typ;
    }

    /**
     * Sets the typ
     *
     * @param string $typ
     * @return void
     */
    public function setTyp($typ)
    {
        $this->typ = $typ;
    }

    /**
     * Returns the massstab
     *
     * @return string $massstab
     */
    public function getMassstab()
    {
        return $this->massstab;
    }

    /**
     * Sets the massstab
     *
     * @param string $massstab
     * @return void
     */
    public function setMassstab($massstab)
    {
        $this->massstab = $massstab;
    }

    /**
     * Returns the preis
     *
     * @return float $preis
     */
    public function getPreis()
    {
        return $this->preis;
    }

    /**
     * Sets the preis
     *
     * @param float $preis
     * @return void
     */
    public function setPreis($preis)
    {
        $this->preis = $preis;
    }

    /**
     * Returns the verlag
     *
     * @return string $verlag
     */
    public function getVerlag()
    {
        return $this->verlag;
    }

    /**
     * Sets the verlag
     *
     * @param string $verlag
     * @return void
     */
    public function setVerlag($verlag)
    {
        $this->verlag = $verlag;
    }

    /**
     * Returns the link
     *
     * @return string $link
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Sets the link
     *
     * @param string $link
     * @return void
     */
    public function setLink($link)
    {
        $this->link = $link;
    }

    /**
     * Returns the bildurl
     *
     * @return string $bildurl
     */
    public function getBildurl()
    {
        return $this->bildurl;
    }

    /**
     * Sets the bildurl
     *
     * @param string $bildurl
     * @return void
     */
    public function setBildurl($bildurl)
    {
        $this->bildurl = $bildurl;
    }
}
