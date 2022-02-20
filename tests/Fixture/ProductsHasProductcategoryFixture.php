<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProductsHasProductcategoryFixture
 */
class ProductsHasProductcategoryFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'products_has_productcategory';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'products_id' => 1,
                'productCategory_id' => 1,
            ],
        ];
        parent::init();
    }
}
