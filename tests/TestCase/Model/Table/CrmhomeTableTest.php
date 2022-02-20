<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CrmhomeTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CrmhomeTable Test Case
 */
class CrmhomeTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CrmhomeTable
     */
    protected $Crmhome;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Crmhome',
        'app.Customers',
        'app.Crmorderstatus',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Crmhome') ? [] : ['className' => CrmhomeTable::class];
        $this->Crmhome = $this->getTableLocator()->get('Crmhome', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Crmhome);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CrmhomeTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\CrmhomeTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
