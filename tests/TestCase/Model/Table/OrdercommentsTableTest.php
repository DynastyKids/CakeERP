<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrdercommentsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrdercommentsTable Test Case
 */
class OrdercommentsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OrdercommentsTable
     */
    protected $Ordercomments;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Ordercomments',
        'app.Purchaseorder',
        'app.Salesorder',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Ordercomments') ? [] : ['className' => OrdercommentsTable::class];
        $this->Ordercomments = $this->getTableLocator()->get('Ordercomments', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Ordercomments);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\OrdercommentsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\OrdercommentsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
