<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PointofsaleTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PointofsaleTable Test Case
 */
class PointofsaleTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PointofsaleTable
     */
    protected $Pointofsale;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Pointofsale',
        'app.PosProducts',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Pointofsale') ? [] : ['className' => PointofsaleTable::class];
        $this->Pointofsale = $this->getTableLocator()->get('Pointofsale', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Pointofsale);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PointofsaleTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
