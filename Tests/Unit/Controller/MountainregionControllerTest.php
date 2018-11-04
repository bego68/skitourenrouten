<?php
namespace Golf\Skitourenrouten\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Hubertus Golf <info@berti-golf.de>
 */
class MountainregionControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Golf\Skitourenrouten\Controller\MountainregionController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Golf\Skitourenrouten\Controller\MountainregionController::class)
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
    public function listActionFetchesAllMountainregionsFromRepositoryAndAssignsThemToView()
    {

        $allMountainregions = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $mountainregionRepository = $this->getMockBuilder(\Golf\Skitourenrouten\Domain\Repository\MountainregionRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $mountainregionRepository->expects(self::once())->method('findAll')->will(self::returnValue($allMountainregions));
        $this->inject($this->subject, 'mountainregionRepository', $mountainregionRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('mountainregions', $allMountainregions);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenMountainregionToView()
    {
        $mountainregion = new \Golf\Skitourenrouten\Domain\Model\Mountainregion();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('mountainregion', $mountainregion);

        $this->subject->showAction($mountainregion);
    }
}
