<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CrmtagFixture
 */
class CrmtagFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'crmtag';
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
                'ct_name' => 'Lorem ipsum dolor sit amet',
                'ct_color' => 'Lorem ',
                'ct_creator' => 1,
                'ct_createTime' => 1,
            ],
        ];
        parent::init();
    }
}
