<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Crmtag Entity
 *
 * @property int $id
 * @property string $ct_name
 * @property string $ct_color
 * @property int|null $ct_creator
 * @property int|null $ct_createTime
 */
class Crmtag extends Entity
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
        'ct_name' => true,
        'ct_color' => true,
        'ct_creator' => true,
        'ct_createTime' => true,
    ];
}
