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
}
