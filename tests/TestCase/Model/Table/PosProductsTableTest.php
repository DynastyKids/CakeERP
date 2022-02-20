<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PosProductsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PosProductsTable Test Case
 */
class PosProductsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PosProductsTable
     */
    protected $PosProducts;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.PosProducts',
        'app.Pointofsale',
        'app.Products',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('PosProducts') ? [] : ['className' => PosProductsTable::class];
        $this->PosProducts = $this->getTableLocator()->get('PosProducts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->PosProducts);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PosProductsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\PosProductsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
