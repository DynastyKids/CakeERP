<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pointofsale Entity
 *
 * @property int $id
 * @property int $pos_userid
 * @property int $pos_opentime
 * @property int|null $pos_endtime
 * @property string $pos_openamount
 * @property string $pos_sessionAmount
 * @property string|null $pos_endamount
 *
 * @property \App\Model\Entity\PosProduct[] $pos_products
 */
class Pointofsale extends Entity
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
        'pos_userid' => true,
        'pos_opentime' => true,
        'pos_endtime' => true,
        'pos_openamount' => true,
        'pos_sessionAmount' => true,
        'pos_endamount' => true,
        'pos_products' => true,
    ];
}
