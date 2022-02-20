<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NewslettersubsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NewslettersubsTable Test Case
 */
class NewslettersubsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\NewslettersubsTable
     */
    protected $Newslettersubs;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Newslettersubs',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Newslettersubs') ? [] : ['className' => NewslettersubsTable::class];
        $this->Newslettersubs = $this->getTableLocator()->get('Newslettersubs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Newslettersubs);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\NewslettersubsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
