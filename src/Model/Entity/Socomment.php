<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Socomment Entity
 *
 * @property int $id
 * @property int $salesOrder_id
 * @property string $sc_content
 * @property int $sc_userid
 * @property string|null $sc_attachment
 * @property int|null $sc_parentId
 *
 * @property \App\Model\Entity\Salesorder $salesorder
 */
class Socomment extends Entity
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
        'salesOrder_id' => true,
        'sc_content' => true,
        'sc_userid' => true,
        'sc_attachment' => true,
        'sc_parentId' => true,
        'salesorder' => true,
    ];
}
