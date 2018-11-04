<?php
namespace Golf\Skitourenrouten\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Hubertus Golf <info@berti-golf.de>
 */
class MapTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Golf\Skitourenrouten\Domain\Model\Map
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Golf\Skitourenrouten\Domain\Model\Map();
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
    public function getBildReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getBild()
        );
    }

    /**
     * @test
     */
    public function setBildForFileReferenceSetsBild()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setBild($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'bild',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getEanReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getEan()
        );
    }

    /**
     * @test
     */
    public function setEanForIntSetsEan()
    {
        $this->subject->setEan(12);

        self::assertAttributeEquals(
            12,
            'ean',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getKartenreiheReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getKartenreihe()
        );
    }

    /**
     * @test
     */
    public function setKartenreiheForStringSetsKartenreihe()
    {
        $this->subject->setKartenreihe('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'kartenreihe',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getKartennummerReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getKartennummer()
        );
    }

    /**
     * @test
     */
    public function setKartennummerForStringSetsKartennummer()
    {
        $this->subject->setKartennummer('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'kartennummer',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTypReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTyp()
        );
    }

    /**
     * @test
     */
    public function setTypForStringSetsTyp()
    {
        $this->subject->setTyp('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'typ',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getMassstabReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getMassstab()
        );
    }

    /**
     * @test
     */
    public function setMassstabForStringSetsMassstab()
    {
        $this->subject->setMassstab('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'massstab',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPreisReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getPreis()
        );
    }

    /**
     * @test
     */
    public function setPreisForFloatSetsPreis()
    {
        $this->subject->setPreis(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'preis',
            $this->subject,
            '',
            0.000000001
        );
    }

    /**
     * @test
     */
    public function getVerlagReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getVerlag()
        );
    }

    /**
     * @test
     */
    public function setVerlagForStringSetsVerlag()
    {
        $this->subject->setVerlag('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'verlag',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getLinkReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getLink()
        );
    }

    /**
     * @test
     */
    public function setLinkForStringSetsLink()
    {
        $this->subject->setLink('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'link',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getBildurlReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getBildurl()
        );
    }

    /**
     * @test
     */
    public function setBildurlForStringSetsBildurl()
    {
        $this->subject->setBildurl('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'bildurl',
            $this->subject
        );
    }
}
