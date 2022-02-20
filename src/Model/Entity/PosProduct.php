<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PosProduct Entity
 *
 * @property int $id
 * @property int $pointofsale_id
 * @property int $products_id
 * @property string|null $pos_email
 * @property string|null $pos_mobile
 * @property string $pos_unitPrice
 * @property int $pos_discountRate
 * @property string $pos_discountAmount
 * @property int $pos_count
 * @property string $pos_actualPrice
 *
 * @property \App\Model\Entity\Pointofsale $pointofsale
 * @property \App\Model\Entity\Product $product
 */
class PosProduct extends Entity
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
        'pointofsale_id' => true,
        'products_id' => true,
        'pos_email' => true,
        'pos_mobile' => true,
        'pos_unitPrice' => true,
        'pos_discountRate' => true,
        'pos_discountAmount' => true,
        'pos_count' => true,
        'pos_actualPrice' => true,
        'pointofsale' => true,
        'product' => true,
    ];
}
