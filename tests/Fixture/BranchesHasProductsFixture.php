<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BranchesHasProductsFixture
 */
class BranchesHasProductsFixture extends TestFixture
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
                'Branches_id' => 1,
                'products_id' => 1,
                'quantity' => 1,
            ],
        ];
        parent::init();
    }
}