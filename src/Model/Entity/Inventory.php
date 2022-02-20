<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Inventory Entity
 *
 * @property int $id
 * @property int $products_id
 * @property int|null $in_count
 * @property \Cake\I18n\FrozenDate|null $in_ProduceDate
 * @property \Cake\I18n\FrozenDate|null $in_BestBefore
 * @property float $in_eachUnitPrice
 *
 * @property \App\Model\Entity\Product $product
 */
class Inventory extends Entity
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
        'products_id' => true,
        'in_count' => true,
        'in_ProduceDate' => true,
        'in_BestBefore' => true,
        'in_eachUnitPrice' => true,
        'product' => true,
    ];
}
