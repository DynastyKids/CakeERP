<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PriorityrefTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PriorityrefTable Test Case
 */
class PriorityrefTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PriorityrefTable
     */
    protected $Priorityref;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
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
        $config = $this->getTableLocator()->exists('Priorityref') ? [] : ['className' => PriorityrefTable::class];
        $this->Priorityref = $this->getTableLocator()->get('Priorityref', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Priorityref);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PriorityrefTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
