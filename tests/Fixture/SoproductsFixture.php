<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SoproductsFixture
 */
class SoproductsFixture extends TestFixture
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
                'salesOrder_id' => 1,
                'products_id' => 1,
                'sp_shippingMethod' => 'Lorem ipsum dolor sit amet',
                'sp_shippingNumber' => 'Lorem ipsum dolor sit amet',
                'sp_unitPrice' => 1.5,
                'sp_quantity' => 1,
                'sp_tax' => 1.5,
                'sp_subtotal' => 1.5,
                'sp_currency' => 'Lorem ipsum do',
                'sp_currencyRate' => 1,
                'sp_discount' => 1,
                'sp_reduceSubtotal' => 1.5,
                'sp_reductTax' => 1.5,
                'sp_qtyDelivered' => 1,
                'sp_qtyInvoiced' => 1,
                'sp_salesman' => 1,
                'sp_status' => 1,
                'sp_batch' => 'Lorem ipsum dolor sit amet',
                'sp_lot' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
