<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InventoryFixture
 */
class InventoryFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'inventory';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'products_id' => 1,
                'in_count' => 1,
                'in_ProduceDate' => '2022-02-20',
                'in_BestBefore' => '2022-02-20',
                'in_eachUnitPrice' => 1,
            ],
        ];
        parent::init();
    }
}
