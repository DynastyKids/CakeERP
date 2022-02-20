<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Poproduct Entity
 *
 * @property int $id
 * @property int $purchaseOrder_id
 * @property int $products_id
 * @property int $pp_quantity
 * @property int|null $pp_plannedDelivery
 * @property int|null $pp_productId
 * @property string $pp_pricepunit
 * @property string $pp_subtotal
 * @property string $pp_tax
 * @property string $pp_total
 * @property string|null $pp_currency
 * @property float|null $pp_convertRate
 * @property int|null $pp_status
 * @property int|null $pp_createUser
 * @property int|null $pp_createDate
 *
 * @property \App\Model\Entity\Purchaseorder $purchaseorder
 * @property \App\Model\Entity\Product $product
 */
class Poproduct extends Entity
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
        'products_id' => true,
        'pp_quantity' => true,
        'pp_plannedDelivery' => true,
        'pp_productId' => true,
        'pp_pricepunit' => true,
        'pp_subtotal' => true,
        'pp_tax' => true,
        'pp_total' => true,
        'pp_currency' => true,
        'pp_convertRate' => true,
        'pp_status' => true,
        'pp_createUser' => true,
        'pp_createDate' => true,
        'purchaseorder' => true,
        'product' => true,
    ];
}
