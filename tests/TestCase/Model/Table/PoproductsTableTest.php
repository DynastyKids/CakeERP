<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PoproductsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PoproductsTable Test Case
 */
class PoproductsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PoproductsTable
     */
    protected $Poproducts;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Poproducts',
        'app.Purchaseorder',
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
        $config = $this->getTableLocator()->exists('Poproducts') ? [] : ['className' => PoproductsTable::class];
        $this->Poproducts = $this->getTableLocator()->get('Poproducts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Poproducts);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PoproductsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\PoproductsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
