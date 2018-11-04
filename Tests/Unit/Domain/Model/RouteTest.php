<?php
namespace Golf\Skitourenrouten\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Hubertus Golf <info@berti-golf.de>
 */
class RouteTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Golf\Skitourenrouten\Domain\Model\Route
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Golf\Skitourenrouten\Domain\Model\Route();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getRoutennameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getRoutenname()
        );
    }

    /**
     * @test
     */
    public function setRoutennameForStringSetsRoutenname()
    {
        $this->subject->setRoutenname('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'routenname',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getKurzcharakteristikReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getKurzcharakteristik()
        );
    }

    /**
     * @test
     */
    public function setKurzcharakteristikForStringSetsKurzcharakteristik()
    {
        $this->subject->setKurzcharakteristik('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'kurzcharakteristik',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDescriptionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDescription()
        );
    }

    /**
     * @test
     */
    public function setDescriptionForStringSetsDescription()
    {
        $this->subject->setDescription('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'description',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAnfahrtReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAnfahrt()
        );
    }

    /**
     * @test
     */
    public function setAnfahrtForStringSetsAnfahrt()
    {
        $this->subject->setAnfahrt('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'anfahrt',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAusgangspunktReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAusgangspunkt()
        );
    }

    /**
     * @test
     */
    public function setAusgangspunktForStringSetsAusgangspunkt()
    {
        $this->subject->setAusgangspunkt('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'ausgangspunkt',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getRoutenverlaufReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getRoutenverlauf()
        );
    }

    /**
     * @test
     */
    public function setRoutenverlaufForStringSetsRoutenverlauf()
    {
        $this->subject->setRoutenverlauf('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'routenverlauf',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAbfahrtReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAbfahrt()
        );
    }

    /**
     * @test
     */
    public function setAbfahrtForStringSetsAbfahrt()
    {
        $this->subject->setAbfahrt('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'abfahrt',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getVariantenReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getVarianten()
        );
    }

    /**
     * @test
     */
    public function setVariantenForStringSetsVarianten()
    {
        $this->subject->setVarianten('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'varianten',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getLawinengefahrReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getLawinengefahr()
        );
    }

    /**
     * @test
     */
    public function setLawinengefahrForIntSetsLawinengefahr()
    {
        $this->subject->setLawinengefahr(12);

        self::assertAttributeEquals(
            12,
            'lawinengefahr',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getGesamtanspruchReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getGesamtanspruch()
        );
    }

    /**
     * @test
     */
    public function setGesamtanspruchForIntSetsGesamtanspruch()
    {
        $this->subject->setGesamtanspruch(12);

        self::assertAttributeEquals(
            12,
            'gesamtanspruch',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSkitechnischebewertungReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getSkitechnischebewertung()
        );
    }

    /**
     * @test
     */
    public function setSkitechnischebewertungForStringSetsSkitechnischebewertung()
    {
        $this->subject->setSkitechnischebewertung('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'skitechnischebewertung',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getHoehenmeterReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getHoehenmeter()
        );
    }

    /**
     * @test
     */
    public function setHoehenmeterForIntSetsHoehenmeter()
    {
        $this->subject->setHoehenmeter(12);

        self::assertAttributeEquals(
            12,
            'hoehenmeter',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getGehzeitReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getGehzeit()
        );
    }

    /**
     * @test
     */
    public function setGehzeitForStringSetsGehzeit()
    {
        $this->subject->setGehzeit('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'gehzeit',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSchoenheitReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getSchoenheit()
        );
    }

    /**
     * @test
     */
    public function setSchoenheitForIntSetsSchoenheit()
    {
        $this->subject->setSchoenheit(12);

        self::assertAttributeEquals(
            12,
            'schoenheit',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getBeliebtheitReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getBeliebtheit()
        );
    }

    /**
     * @test
     */
    public function setBeliebtheitForIntSetsBeliebtheit()
    {
        $this->subject->setBeliebtheit(12);

        self::assertAttributeEquals(
            12,
            'beliebtheit',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getHangexpositionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getHangexposition()
        );
    }

    /**
     * @test
     */
    public function setHangexpositionForStringSetsHangexposition()
    {
        $this->subject->setHangexposition('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'hangexposition',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getHinweiseReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getHinweise()
        );
    }

    /**
     * @test
     */
    public function setHinweiseForStringSetsHinweise()
    {
        $this->subject->setHinweise('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'hinweise',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getInfoquelleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getInfoquelle()
        );
    }

    /**
     * @test
     */
    public function setInfoquelleForStringSetsInfoquelle()
    {
        $this->subject->setInfoquelle('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'infoquelle',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTrackReturnsInitialValueForFileReference()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getTrack()
        );
    }

    /**
     * @test
     */
    public function setTrackForFileReferenceSetsTrack()
    {
        $track = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $objectStorageHoldingExactlyOneTrack = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneTrack->attach($track);
        $this->subject->setTrack($objectStorageHoldingExactlyOneTrack);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneTrack,
            'track',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addTrackToObjectStorageHoldingTrack()
    {
        $track = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $trackObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $trackObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($track));
        $this->inject($this->subject, 'track', $trackObjectStorageMock);

        $this->subject->addTrack($track);
    }

    /**
     * @test
     */
    public function removeTrackFromObjectStorageHoldingTrack()
    {
        $track = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $trackObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $trackObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($track));
        $this->inject($this->subject, 'track', $trackObjectStorageMock);

        $this->subject->removeTrack($track);
    }

    /**
     * @test
     */
    public function getUebersichtsbilderReturnsInitialValueForFileReference()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getUebersichtsbilder()
        );
    }

    /**
     * @test
     */
    public function setUebersichtsbilderForFileReferenceSetsUebersichtsbilder()
    {
        $uebersichtsbilder = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $objectStorageHoldingExactlyOneUebersichtsbilder = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneUebersichtsbilder->attach($uebersichtsbilder);
        $this->subject->setUebersichtsbilder($objectStorageHoldingExactlyOneUebersichtsbilder);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneUebersichtsbilder,
            'uebersichtsbilder',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addUebersichtsbilderToObjectStorageHoldingUebersichtsbilder()
    {
        $uebersichtsbilder = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $uebersichtsbilderObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $uebersichtsbilderObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($uebersichtsbilder));
        $this->inject($this->subject, 'uebersichtsbilder', $uebersichtsbilderObjectStorageMock);

        $this->subject->addUebersichtsbilder($uebersichtsbilder);
    }

    /**
     * @test
     */
    public function removeUebersichtsbilderFromObjectStorageHoldingUebersichtsbilder()
    {
        $uebersichtsbilder = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $uebersichtsbilderObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $uebersichtsbilderObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($uebersichtsbilder));
        $this->inject($this->subject, 'uebersichtsbilder', $uebersichtsbilderObjectStorageMock);

        $this->subject->removeUebersichtsbilder($uebersichtsbilder);
    }

    /**
     * @test
     */
    public function getAktionbilderReturnsInitialValueForFileReference()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getAktionbilder()
        );
    }

    /**
     * @test
     */
    public function setAktionbilderForFileReferenceSetsAktionbilder()
    {
        $aktionbilder = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $objectStorageHoldingExactlyOneAktionbilder = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneAktionbilder->attach($aktionbilder);
        $this->subject->setAktionbilder($objectStorageHoldingExactlyOneAktionbilder);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneAktionbilder,
            'aktionbilder',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addAktionbilderToObjectStorageHoldingAktionbilder()
    {
        $aktionbilder = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $aktionbilderObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $aktionbilderObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($aktionbilder));
        $this->inject($this->subject, 'aktionbilder', $aktionbilderObjectStorageMock);

        $this->subject->addAktionbilder($aktionbilder);
    }

    /**
     * @test
     */
    public function removeAktionbilderFromObjectStorageHoldingAktionbilder()
    {
        $aktionbilder = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $aktionbilderObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $aktionbilderObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($aktionbilder));
        $this->inject($this->subject, 'aktionbilder', $aktionbilderObjectStorageMock);

        $this->subject->removeAktionbilder($aktionbilder);
    }

    /**
     * @test
     */
    public function getMountainsReturnsInitialValueForMountain()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getMountains()
        );
    }

    /**
     * @test
     */
    public function setMountainsForObjectStorageContainingMountainSetsMountains()
    {
        $mountain = new \Golf\Skitourenrouten\Domain\Model\Mountain();
        $objectStorageHoldingExactlyOneMountains = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneMountains->attach($mountain);
        $this->subject->setMountains($objectStorageHoldingExactlyOneMountains);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneMountains,
            'mountains',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addMountainToObjectStorageHoldingMountains()
    {
        $mountain = new \Golf\Skitourenrouten\Domain\Model\Mountain();
        $mountainsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $mountainsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($mountain));
        $this->inject($this->subject, 'mountains', $mountainsObjectStorageMock);

        $this->subject->addMountain($mountain);
    }

    /**
     * @test
     */
    public function removeMountainFromObjectStorageHoldingMountains()
    {
        $mountain = new \Golf\Skitourenrouten\Domain\Model\Mountain();
        $mountainsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $mountainsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($mountain));
        $this->inject($this->subject, 'mountains', $mountainsObjectStorageMock);

        $this->subject->removeMountain($mountain);
    }

    /**
     * @test
     */
    public function getMountainregionsReturnsInitialValueForMountainregion()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getMountainregions()
        );
    }

    /**
     * @test
     */
    public function setMountainregionsForObjectStorageContainingMountainregionSetsMountainregions()
    {
        $mountainregion = new \Golf\Skitourenrouten\Domain\Model\Mountainregion();
        $objectStorageHoldingExactlyOneMountainregions = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneMountainregions->attach($mountainregion);
        $this->subject->setMountainregions($objectStorageHoldingExactlyOneMountainregions);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneMountainregions,
            'mountainregions',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addMountainregionToObjectStorageHoldingMountainregions()
    {
        $mountainregion = new \Golf\Skitourenrouten\Domain\Model\Mountainregion();
        $mountainregionsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $mountainregionsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($mountainregion));
        $this->inject($this->subject, 'mountainregions', $mountainregionsObjectStorageMock);

        $this->subject->addMountainregion($mountainregion);
    }

    /**
     * @test
     */
    public function removeMountainregionFromObjectStorageHoldingMountainregions()
    {
        $mountainregion = new \Golf\Skitourenrouten\Domain\Model\Mountainregion();
        $mountainregionsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $mountainregionsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($mountainregion));
        $this->inject($this->subject, 'mountainregions', $mountainregionsObjectStorageMock);

        $this->subject->removeMountainregion($mountainregion);
    }

    /**
     * @test
     */
    public function getHuetteReturnsInitialValueForNews()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getHuette()
        );
    }

    /**
     * @test
     */
    public function setHuetteForObjectStorageContainingNewsSetsHuette()
    {
        $huette = new \GeorgRinger\News\Domain\Model\News();
        $objectStorageHoldingExactlyOneHuette = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneHuette->attach($huette);
        $this->subject->setHuette($objectStorageHoldingExactlyOneHuette);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneHuette,
            'huette',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addHuetteToObjectStorageHoldingHuette()
    {
        $huette = new \GeorgRinger\News\Domain\Model\News();
        $huetteObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $huetteObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($huette));
        $this->inject($this->subject, 'huette', $huetteObjectStorageMock);

        $this->subject->addHuette($huette);
    }

    /**
     * @test
     */
    public function removeHuetteFromObjectStorageHoldingHuette()
    {
        $huette = new \GeorgRinger\News\Domain\Model\News();
        $huetteObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $huetteObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($huette));
        $this->inject($this->subject, 'huette', $huetteObjectStorageMock);

        $this->subject->removeHuette($huette);
    }

    /**
     * @test
     */
    public function getMapsReturnsInitialValueForMap()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getMaps()
        );
    }

    /**
     * @test
     */
    public function setMapsForObjectStorageContainingMapSetsMaps()
    {
        $map = new \Golf\Skitourenrouten\Domain\Model\Map();
        $objectStorageHoldingExactlyOneMaps = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneMaps->attach($map);
        $this->subject->setMaps($objectStorageHoldingExactlyOneMaps);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneMaps,
            'maps',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addMapToObjectStorageHoldingMaps()
    {
        $map = new \Golf\Skitourenrouten\Domain\Model\Map();
        $mapsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $mapsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($map));
        $this->inject($this->subject, 'maps', $mapsObjectStorageMock);

        $this->subject->addMap($map);
    }

    /**
     * @test
     */
    public function removeMapFromObjectStorageHoldingMaps()
    {
        $map = new \Golf\Skitourenrouten\Domain\Model\Map();
        $mapsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $mapsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($map));
        $this->inject($this->subject, 'maps', $mapsObjectStorageMock);

        $this->subject->removeMap($map);
    }

    /**
     * @test
     */
    public function getGuideReturnsInitialValueForNews()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getGuide()
        );
    }

    /**
     * @test
     */
    public function setGuideForObjectStorageContainingNewsSetsGuide()
    {
        $guide = new \GeorgRinger\News\Domain\Model\News();
        $objectStorageHoldingExactlyOneGuide = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneGuide->attach($guide);
        $this->subject->setGuide($objectStorageHoldingExactlyOneGuide);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneGuide,
            'guide',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addGuideToObjectStorageHoldingGuide()
    {
        $guide = new \GeorgRinger\News\Domain\Model\News();
        $guideObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $guideObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($guide));
        $this->inject($this->subject, 'guide', $guideObjectStorageMock);

        $this->subject->addGuide($guide);
    }

    /**
     * @test
     */
    public function removeGuideFromObjectStorageHoldingGuide()
    {
        $guide = new \GeorgRinger\News\Domain\Model\News();
        $guideObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $guideObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($guide));
        $this->inject($this->subject, 'guide', $guideObjectStorageMock);

        $this->subject->removeGuide($guide);
    }
}
