<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CustomerbillingsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CustomerbillingsTable Test Case
 */
class CustomerbillingsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CustomerbillingsTable
     */
    protected $Customerbillings;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Customerbillings',
        'app.Customers',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Customerbillings') ? [] : ['className' => CustomerbillingsTable::class];
        $this->Customerbillings = $this->getTableLocator()->get('Customerbillings', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Customerbillings);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CustomerbillingsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\CustomerbillingsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
