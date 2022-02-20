<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BranchesHasProductsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BranchesHasProductsTable Test Case
 */
class BranchesHasProductsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BranchesHasProductsTable
     */
    protected $BranchesHasProducts;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.BranchesHasProducts',
        'app.Branches',
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
        $config = $this->getTableLocator()->exists('BranchesHasProducts') ? [] : ['className' => BranchesHasProductsTable::class];
        $this->BranchesHasProducts = $this->getTableLocator()->get('BranchesHasProducts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->BranchesHasProducts);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\BranchesHasProductsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\BranchesHasProductsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
