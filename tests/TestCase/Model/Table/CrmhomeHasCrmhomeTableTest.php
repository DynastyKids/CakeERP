<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CrmhomeHasCrmhomeTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CrmhomeHasCrmhomeTable Test Case
 */
class CrmhomeHasCrmhomeTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CrmhomeHasCrmhomeTable
     */
    protected $CrmhomeHasCrmhome;

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
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('CrmhomeHasCrmhome') ? [] : ['className' => CrmhomeHasCrmhomeTable::class];
        $this->CrmhomeHasCrmhome = $this->getTableLocator()->get('CrmhomeHasCrmhome', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->CrmhomeHasCrmhome);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CrmhomeHasCrmhomeTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\CrmhomeHasCrmhomeTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
