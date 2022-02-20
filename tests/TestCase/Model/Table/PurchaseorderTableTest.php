<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PurchaseorderTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PurchaseorderTable Test Case
 */
class PurchaseorderTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PurchaseorderTable
     */
    protected $Purchaseorder;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Purchaseorder',
        'app.Priorityref',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Purchaseorder') ? [] : ['className' => PurchaseorderTable::class];
        $this->Purchaseorder = $this->getTableLocator()->get('Purchaseorder', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Purchaseorder);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PurchaseorderTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\PurchaseorderTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
