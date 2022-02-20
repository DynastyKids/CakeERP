<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PoproductsFixture
 */
class PoproductsFixture extends TestFixture
{
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
                'purchaseOrder_id' => 1,
                'products_id' => 1,
                'pp_quantity' => 1,
                'pp_plannedDelivery' => 1,
                'pp_productId' => 1,
                'pp_pricepunit' => 1.5,
                'pp_subtotal' => 1.5,
                'pp_tax' => 1.5,
                'pp_total' => 1.5,
                'pp_currency' => 'Lorem ipsum dolor sit amet',
                'pp_convertRate' => 1,
                'pp_status' => 1,
                'pp_createUser' => 1,
                'pp_createDate' => 1,
            ],
        ];
        parent::init();
    }
}
