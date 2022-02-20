<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\CrmhomeHasCrmhomeController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\CrmhomeHasCrmhomeController Test Case
 *
 * @uses \App\Controller\CrmhomeHasCrmhomeController
 */
class CrmhomeHasCrmhomeControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.CrmhomeHasCrmhome',
        'app.Crmhome',
    ];

    /**
     * Test index method
     *
     * @return void
     * @uses \App\Controller\CrmhomeHasCrmhomeController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @uses \App\Controller\CrmhomeHasCrmhomeController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @uses \App\Controller\CrmhomeHasCrmhomeController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @uses \App\Controller\CrmhomeHasCrmhomeController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @uses \App\Controller\CrmhomeHasCrmhomeController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
