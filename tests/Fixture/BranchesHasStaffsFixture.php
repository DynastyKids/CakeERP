<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BranchesHasStaffsFixture
 */
class BranchesHasStaffsFixture extends TestFixture
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
                'staffs_id' => 1,
            ],
        ];
        parent::init();
    }
}
