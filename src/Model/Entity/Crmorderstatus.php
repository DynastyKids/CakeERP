<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Crmorderstatus Entity
 *
 * @property int $id
 * @property int $cs_code
 * @property string $cs_name
 * @property string|null $cs_description
 */
class Crmorderstatus extends Entity
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
        'cs_code' => true,
        'cs_name' => true,
        'cs_description' => true,
    ];
}
