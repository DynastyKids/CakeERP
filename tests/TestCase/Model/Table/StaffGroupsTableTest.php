<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StaffGroupsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StaffGroupsTable Test Case
 */
class StaffGroupsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\StaffGroupsTable
     */
    protected $StaffGroups;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.StaffGroups',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('StaffGroups') ? [] : ['className' => StaffGroupsTable::class];
        $this->StaffGroups = $this->getTableLocator()->get('StaffGroups', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->StaffGroups);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\StaffGroupsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
