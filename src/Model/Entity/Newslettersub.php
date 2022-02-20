<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Newslettersub Entity
 *
 * @property int $id
 * @property string $nl_name
 * @property string $nl_email
 * @property int|null $nl_group
 */
class Newslettersub extends Entity
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
        'nl_name' => true,
        'nl_email' => true,
        'nl_group' => true,
    ];
}
