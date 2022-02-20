<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CrmhomeHasCrmtagTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CrmhomeHasCrmtagTable Test Case
 */
class CrmhomeHasCrmtagTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CrmhomeHasCrmtagTable
     */
    protected $CrmhomeHasCrmtag;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.CrmhomeHasCrmtag',
        'app.Crmhome',
        'app.Crmtag',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('CrmhomeHasCrmtag') ? [] : ['className' => CrmhomeHasCrmtagTable::class];
        $this->CrmhomeHasCrmtag = $this->getTableLocator()->get('CrmhomeHasCrmtag', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->CrmhomeHasCrmtag);

        parent::tearDown();
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\CrmhomeHasCrmtagTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
