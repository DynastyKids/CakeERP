<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CrmhomeHasCrmhomeFixture
 */
class CrmhomeHasCrmhomeFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'crmhome_has_crmhome';
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
                'crmHome_id1' => 1,
            ],
        ];
        parent::init();
    }
}
