<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SostatusTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SostatusTable Test Case
 */
class SostatusTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SostatusTable
     */
    protected $Sostatus;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Sostatus',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Sostatus') ? [] : ['className' => SostatusTable::class];
        $this->Sostatus = $this->getTableLocator()->get('Sostatus', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Sostatus);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SostatusTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
