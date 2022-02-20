<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PosProductsFixture
 */
class PosProductsFixture extends TestFixture
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
                'pointofsale_id' => 1,
                'products_id' => 1,
                'pos_email' => 'Lorem ipsum dolor sit amet',
                'pos_mobile' => 'Lorem ipsum dolor sit amet',
                'pos_unitPrice' => 1.5,
                'pos_discountRate' => 1,
                'pos_discountAmount' => 1.5,
                'pos_count' => 1,
                'pos_actualPrice' => 1.5,
            ],
        ];
        parent::init();
    }
}
