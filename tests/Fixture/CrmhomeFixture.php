<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CrmhomeFixture
 */
class CrmhomeFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'crmhome';
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
                'customer_id' => 1,
                'cp_expiredate' => 1,
                'cp_paymentTerms' => 1,
                'cp_createDate' => 1,
                'cp_createUser' => 1,
                'cp_lastModifyDate' => 1,
                'cp_lastModifyUser' => 1,
                'cp_statusId' => 1,
                'crmOrderStatus_id' => 1,
            ],
        ];
        parent::init();
    }
}
