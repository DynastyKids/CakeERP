<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Coupon Entity
 *
 * @property int $id
 * @property string $cp_code
 * @property int $cp_startTime
 * @property int $cp_endTime
 * @property float|null $cp_deducepercent
 * @property float|null $cp_deduceamount
 * @property int $cp_newuser
 * @property string|null $cp_applyprod
 * @property string $cp_amount
 *
 * @property \App\Model\Entity\Salesorder[] $salesorder
 */
class Coupon extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'cp_code' => true,
        'cp_startTime' => true,
        'cp_endTime' => true,
        'cp_deducepercent' => true,
        'cp_deduceamount' => true,
        'cp_newuser' => true,
        'cp_applyprod' => true,
        'cp_amount' => true,
        'salesorder' => true,
    ];
}
