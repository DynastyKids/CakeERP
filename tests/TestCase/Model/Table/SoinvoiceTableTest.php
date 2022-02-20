<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SoinvoiceTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SoinvoiceTable Test Case
 */
class SoinvoiceTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SoinvoiceTable
     */
    protected $Soinvoice;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Soinvoice',
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
        $config = $this->getTableLocator()->exists('Soinvoice') ? [] : ['className' => SoinvoiceTable::class];
        $this->Soinvoice = $this->getTableLocator()->get('Soinvoice', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Soinvoice);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SoinvoiceTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\SoinvoiceTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
