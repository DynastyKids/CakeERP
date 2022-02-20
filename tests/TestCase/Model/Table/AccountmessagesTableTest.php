<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AccountmessagesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AccountmessagesTable Test Case
 */
class AccountmessagesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AccountmessagesTable
     */
    protected $Accountmessages;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Accountmessages',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Accountmessages') ? [] : ['className' => AccountmessagesTable::class];
        $this->Accountmessages = $this->getTableLocator()->get('Accountmessages', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Accountmessages);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\AccountmessagesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
