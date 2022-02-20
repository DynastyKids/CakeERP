<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Accounttag Entity
 *
 * @property int $id
 * @property string|null $at_name
 * @property string|null $at_applicability
 * @property string|null $at_color
 * @property int|null $at_active
 * @property int|null $at_createdDate
 * @property int|null $at_createUser
 */
class Accounttag extends Entity
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
        'at_name' => true,
        'at_applicability' => true,
        'at_color' => true,
        'at_active' => true,
        'at_createdDate' => true,
        'at_createUser' => true,
    ];
}
