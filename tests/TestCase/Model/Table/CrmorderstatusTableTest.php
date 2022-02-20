<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CrmorderstatusTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CrmorderstatusTable Test Case
 */
class CrmorderstatusTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CrmorderstatusTable
     */
    protected $Crmorderstatus;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
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
        $config = $this->getTableLocator()->exists('Crmorderstatus') ? [] : ['className' => CrmorderstatusTable::class];
        $this->Crmorderstatus = $this->getTableLocator()->get('Crmorderstatus', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Crmorderstatus);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CrmorderstatusTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
