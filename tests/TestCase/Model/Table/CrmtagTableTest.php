<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CrmtagTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CrmtagTable Test Case
 */
class CrmtagTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CrmtagTable
     */
    protected $Crmtag;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Crmtag',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Crmtag') ? [] : ['className' => CrmtagTable::class];
        $this->Crmtag = $this->getTableLocator()->get('Crmtag', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Crmtag);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CrmtagTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
