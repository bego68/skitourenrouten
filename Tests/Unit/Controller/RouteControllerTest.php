<?php
namespace Golf\Skitourenrouten\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Hubertus Golf <info@berti-golf.de>
 */
class RouteControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Golf\Skitourenrouten\Controller\RouteController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Golf\Skitourenrouten\Controller\RouteController::class)
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
    public function listActionFetchesAllRoutesFromRepositoryAndAssignsThemToView()
    {

        $allRoutes = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $routeRepository = $this->getMockBuilder(\Golf\Skitourenrouten\Domain\Repository\RouteRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $routeRepository->expects(self::once())->method('findAll')->will(self::returnValue($allRoutes));
        $this->inject($this->subject, 'routeRepository', $routeRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('routes', $allRoutes);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenRouteToView()
    {
        $route = new \Golf\Skitourenrouten\Domain\Model\Route();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('route', $route);

        $this->subject->showAction($route);
    }
}
