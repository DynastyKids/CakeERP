<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * BranchesHasProduct Entity
 *
 * @property int $Branches_id
 * @property int $products_id
 * @property int $quantity
 *
 * @property \App\Model\Entity\Branch $branch
 * @property \App\Model\Entity\Product $product
 */
class BranchesHasProduct extends Entity
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
        'quantity' => true,
        'branch' => true,
        'product' => true,
    ];
}