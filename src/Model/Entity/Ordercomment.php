<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ordercomment Entity
 *
 * @property int $id
 * @property int|null $purchaseOrder_id
 * @property int|null $salesOrder_id
 * @property string $pc_content
 * @property int $pc_userid
 * @property string|null $pc_attachment
 * @property int|null $pc_parentId
 *
 * @property \App\Model\Entity\Purchaseorder $purchaseorder
 * @property \App\Model\Entity\Salesorder $salesorder
 */
class Ordercomment extends Entity
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
        'purchaseOrder_id' => true,
        'salesOrder_id' => true,
        'pc_content' => true,
        'pc_userid' => true,
        'pc_attachment' => true,
        'pc_parentId' => true,
        'purchaseorder' => true,
        'salesorder' => true,
    ];
}
