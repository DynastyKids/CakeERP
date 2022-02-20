<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Soinvoice Entity
 *
 * @property int $id
 * @property string $si_invoiceNumber
 * @property \Cake\I18n\FrozenTime $si_createTime
 * @property string|null $si_products
 * @property string $si_paymentid
 * @property string|null $si_transactionID
 * @property string|null $si_transactionAuth
 * @property string|null $si_transactionAmount
 * @property string|null $salesorder_invoicecol
 * @property int $salesOrder_id
 *
 * @property \App\Model\Entity\Salesorder $salesorder
 */
class Soinvoice extends Entity
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
        'si_invoiceNumber' => true,
        'si_createTime' => true,
        'si_products' => true,
        'si_paymentid' => true,
        'si_transactionID' => true,
        'si_transactionAuth' => true,
        'si_transactionAmount' => true,
        'salesorder_invoicecol' => true,
        'salesOrder_id' => true,
        'salesorder' => true,
    ];
}
