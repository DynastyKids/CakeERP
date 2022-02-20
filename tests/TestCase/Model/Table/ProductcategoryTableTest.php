<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProductcategoryTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProductcategoryTable Test Case
 */
class ProductcategoryTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProductcategoryTable
     */
    protected $Productcategory;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Productcategory',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Productcategory') ? [] : ['className' => ProductcategoryTable::class];
        $this->Productcategory = $this->getTableLocator()->get('Productcategory', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Productcategory);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ProductcategoryTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
