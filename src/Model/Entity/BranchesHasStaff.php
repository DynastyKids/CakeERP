<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * BranchesHasStaff Entity
 *
 * @property int $Branches_id
 * @property int $staffs_id
 *
 * @property \App\Model\Entity\Branch $branch
 * @property \App\Model\Entity\Staff $staff
 */
class BranchesHasStaff extends Entity
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
        'branch' => true,
        'staff' => true,
    ];
}
