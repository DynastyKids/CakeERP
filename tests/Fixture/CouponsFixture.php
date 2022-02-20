<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CouponsFixture
 */
class CouponsFixture extends TestFixture
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
                'cp_code' => 'Lorem ipsum dolor sit amet',
                'cp_startTime' => 1,
                'cp_endTime' => 1,
                'cp_deducepercent' => 1,
                'cp_deduceamount' => 1,
                'cp_newuser' => 1,
                'cp_applyprod' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'cp_amount' => 1.5,
            ],
        ];
        parent::init();
    }
}
