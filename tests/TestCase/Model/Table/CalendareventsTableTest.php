<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CalendareventsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CalendareventsTable Test Case
 */
class CalendareventsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CalendareventsTable
     */
    protected $Calendarevents;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Calendarevents',
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
        $config = $this->getTableLocator()->exists('Calendarevents') ? [] : ['className' => CalendareventsTable::class];
        $this->Calendarevents = $this->getTableLocator()->get('Calendarevents', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Calendarevents);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CalendareventsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\CalendareventsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
