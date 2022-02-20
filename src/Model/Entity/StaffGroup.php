<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * StaffGroup Entity
 *
 * @property int $id
 * @property string $sg_name
 * @property string|null $sg_applyBranch
 * @property string|null $staff_groupscol
 */
class StaffGroup extends Entity
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
        'sg_name' => true,
        'sg_applyBranch' => true,
        'staff_groupscol' => true,
    ];
}
