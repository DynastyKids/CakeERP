<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Basecontent Entity
 *
 * @property int $id
 * @property string|null $bc_path
 * @property string|null $bc_string
 * @property string|null $bc_details
 */
class Basecontent extends Entity
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
        'bc_path' => true,
        'bc_string' => true,
        'bc_details' => true,
    ];
}
