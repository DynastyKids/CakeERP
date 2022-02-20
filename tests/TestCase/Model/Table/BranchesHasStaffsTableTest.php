<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BranchesHasStaffsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BranchesHasStaffsTable Test Case
 */
class BranchesHasStaffsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BranchesHasStaffsTable
     */
    protected $BranchesHasStaffs;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.BranchesHasStaffs',
        'app.Branches',
        'app.Staffs',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('BranchesHasStaffs') ? [] : ['className' => BranchesHasStaffsTable::class];
        $this->BranchesHasStaffs = $this->getTableLocator()->get('BranchesHasStaffs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->BranchesHasStaffs);

        parent::tearDown();
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\BranchesHasStaffsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
