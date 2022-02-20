<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BasecontentTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BasecontentTable Test Case
 */
class BasecontentTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BasecontentTable
     */
    protected $Basecontent;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Basecontent',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Basecontent') ? [] : ['className' => BasecontentTable::class];
        $this->Basecontent = $this->getTableLocator()->get('Basecontent', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Basecontent);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\BasecontentTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
