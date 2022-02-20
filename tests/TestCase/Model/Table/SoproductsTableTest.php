<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SoproductsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SoproductsTable Test Case
 */
class SoproductsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SoproductsTable
     */
    protected $Soproducts;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Soproducts',
        'app.Salesorder',
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
        $config = $this->getTableLocator()->exists('Soproducts') ? [] : ['className' => SoproductsTable::class];
        $this->Soproducts = $this->getTableLocator()->get('Soproducts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Soproducts);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SoproductsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\SoproductsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
