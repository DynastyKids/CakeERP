<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AccounttagsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AccounttagsTable Test Case
 */
class AccounttagsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AccounttagsTable
     */
    protected $Accounttags;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Accounttags',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Accounttags') ? [] : ['className' => AccounttagsTable::class];
        $this->Accounttags = $this->getTableLocator()->get('Accounttags', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Accounttags);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\AccounttagsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
