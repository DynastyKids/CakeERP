<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CrmordersTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CrmordersTable Test Case
 */
class CrmordersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CrmordersTable
     */
    protected $Crmorders;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Crmorders',
        'app.Crmhome',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Crmorders') ? [] : ['className' => CrmordersTable::class];
        $this->Crmorders = $this->getTableLocator()->get('Crmorders', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Crmorders);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CrmordersTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\CrmordersTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
