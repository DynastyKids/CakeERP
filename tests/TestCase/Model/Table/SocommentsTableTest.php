<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SocommentsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SocommentsTable Test Case
 */
class SocommentsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SocommentsTable
     */
    protected $Socomments;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Socomments',
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
        $config = $this->getTableLocator()->exists('Socomments') ? [] : ['className' => SocommentsTable::class];
        $this->Socomments = $this->getTableLocator()->get('Socomments', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Socomments);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SocommentsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\SocommentsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
