<?php
namespace Golf\Skitourenrouten\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Hubertus Golf <info@berti-golf.de>
 */
class MapControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Golf\Skitourenrouten\Controller\MapController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Golf\Skitourenrouten\Controller\MapController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllMapsFromRepositoryAndAssignsThemToView()
    {

        $allMaps = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $mapRepository = $this->getMockBuilder(\Golf\Skitourenrouten\Domain\Repository\MapRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $mapRepository->expects(self::once())->method('findAll')->will(self::returnValue($allMaps));
        $this->inject($this->subject, 'mapRepository', $mapRepository);

        $view = $this->getMockBuilder(TYPO3Fluid\Fluid\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('maps', $allMaps);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }
}
