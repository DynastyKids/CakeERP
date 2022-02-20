<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Productcategory Entity
 *
 * @property int $id
 * @property string|null $pc_name
 * @property string|null $pc_describe
 * @property int $pc_available
 */
class Productcategory extends Entity
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
        'pc_name' => true,
        'pc_describe' => true,
        'pc_available' => true,
    ];
}
