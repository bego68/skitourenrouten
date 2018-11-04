<?php
namespace Golf\Skitourenrouten\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Hubertus Golf <info@berti-golf.de>
 */
class MountainControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Golf\Skitourenrouten\Controller\MountainController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Golf\Skitourenrouten\Controller\MountainController::class)
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
    public function listActionFetchesAllMountainsFromRepositoryAndAssignsThemToView()
    {

        $allMountains = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $mountainRepository = $this->getMockBuilder(\Golf\Skitourenrouten\Domain\Repository\MountainRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $mountainRepository->expects(self::once())->method('findAll')->will(self::returnValue($allMountains));
        $this->inject($this->subject, 'mountainRepository', $mountainRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('mountains', $allMountains);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenMountainToView()
    {
        $mountain = new \Golf\Skitourenrouten\Domain\Model\Mountain();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('mountain', $mountain);

        $this->subject->showAction($mountain);
    }
}
