<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CrmhomeHasCrmtagFixture
 */
class CrmhomeHasCrmtagFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'crmhome_has_crmtag';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'crmHome_id' => 1,
                'crmTag_id' => 1,
            ],
        ];
        parent::init();
    }
}
