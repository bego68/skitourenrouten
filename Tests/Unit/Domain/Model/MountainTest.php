<?php
namespace Golf\Skitourenrouten\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Hubertus Golf <info@berti-golf.de>
 */
class MountainTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Golf\Skitourenrouten\Domain\Model\Mountain
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Golf\Skitourenrouten\Domain\Model\Mountain();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setNameForStringSetsName()
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'name',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getHeightReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getHeight()
        );
    }

    /**
     * @test
     */
    public function setHeightForIntSetsHeight()
    {
        $this->subject->setHeight(12);

        self::assertAttributeEquals(
            12,
            'height',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getLatitudeReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getLatitude()
        );
    }

    /**
     * @test
     */
    public function setLatitudeForFloatSetsLatitude()
    {
        $this->subject->setLatitude(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'latitude',
            $this->subject,
            '',
            0.000000001
        );
    }

    /**
     * @test
     */
    public function getLongitudeReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getLongitude()
        );
    }

    /**
     * @test
     */
    public function setLongitudeForFloatSetsLongitude()
    {
        $this->subject->setLongitude(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'longitude',
            $this->subject,
            '',
            0.000000001
        );
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
}
