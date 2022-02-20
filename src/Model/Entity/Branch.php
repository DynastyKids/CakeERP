<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Branch Entity
 *
 * @property int $id
 * @property string|null $br_name
 * @property string|null $br_abn
 * @property string|null $br_address
 * @property string|null $br_phone
 * @property string|null $br_email
 * @property string|null $br_currency
 * @property string|null $br_logo
 * @property int|null $so_pickupFlag
 * @property int|null $in_locationFlag
 */
class Branch extends Entity
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
        'br_name' => true,
        'br_abn' => true,
        'br_address' => true,
        'br_phone' => true,
        'br_email' => true,
        'br_currency' => true,
        'br_logo' => true,
        'so_pickupFlag' => true,
        'in_locationFlag' => true,
    ];
}
