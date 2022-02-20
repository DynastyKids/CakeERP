<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PointofsaleFixture
 */
class PointofsaleFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'pointofsale';
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
                'pos_userid' => 1,
                'pos_opentime' => 1,
                'pos_endtime' => 1,
                'pos_openamount' => 1.5,
                'pos_sessionAmount' => 1.5,
                'pos_endamount' => 1.5,
            ],
        ];
        parent::init();
    }
}
