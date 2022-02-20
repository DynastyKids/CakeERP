<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Soproduct Entity
 *
 * @property int $id
 * @property int $salesOrder_id
 * @property int $products_id
 * @property string|null $sp_shippingMethod
 * @property string|null $sp_shippingNumber
 * @property string $sp_unitPrice
 * @property int $sp_quantity
 * @property string $sp_tax
 * @property string $sp_subtotal
 * @property string|null $sp_currency
 * @property float|null $sp_currencyRate
 * @property float|null $sp_discount
 * @property string|null $sp_reduceSubtotal
 * @property string|null $sp_reductTax
 * @property int $sp_qtyDelivered
 * @property int|null $sp_qtyInvoiced
 * @property int|null $sp_salesman
 * @property int|null $sp_status
 * @property string|null $sp_batch
 * @property string|null $sp_lot
 *
 * @property \App\Model\Entity\Salesorder $salesorder
 * @property \App\Model\Entity\Product $product
 */
class Soproduct extends Entity
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
        'products_id' => true,
        'sp_shippingMethod' => true,
        'sp_shippingNumber' => true,
        'sp_unitPrice' => true,
        'sp_quantity' => true,
        'sp_tax' => true,
        'sp_subtotal' => true,
        'sp_currency' => true,
        'sp_currencyRate' => true,
        'sp_discount' => true,
        'sp_reduceSubtotal' => true,
        'sp_reductTax' => true,
        'sp_qtyDelivered' => true,
        'sp_qtyInvoiced' => true,
        'sp_salesman' => true,
        'sp_status' => true,
        'sp_batch' => true,
        'sp_lot' => true,
        'salesorder' => true,
        'product' => true,
    ];
}
