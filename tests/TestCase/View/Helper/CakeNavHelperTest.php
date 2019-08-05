<?php
namespace CakeNav\Test\TestCase\View\Helper;

use CakeNav\View\Helper\CakeNavHelper;
use Cake\TestSuite\TestCase;
use Cake\View\View;

/**
 * CakeNav\View\Helper\CakeNavHelper Test Case
 */
class CakeNavHelperTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \CakeNav\View\Helper\CakeNavHelper
     */
    public $CakeNav;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $view = new View();
        $this->CakeNav = new CakeNavHelper($view);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CakeNav);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
