<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Purchaseorder Entity
 *
 * @property int $id
 * @property string|null $po_reference
 * @property string|null $po_attachment
 * @property int $po_ordertime
 * @property int $po_confirmDate
 * @property int|null $po_dispatchtime
 * @property string $po_subtotalAmount
 * @property string $po_taxAmount
 * @property string $po_totalAmount
 * @property string|null $po_convertRate
 * @property string|null $po_currency
 * @property string|null $po_trackingcourier
 * @property string|null $po_trackingno
 * @property string|null $po_receiveAddress
 * @property string|null $po_items
 * @property string|null $po_deliverymethod
 * @property int $po_requestUser
 * @property int $po_approveUser
 * @property int|null $po_partnerid
 * @property string|null $po_invoices
 * @property int|null $po_status
 * @property string|null $po_notes
 * @property int|null $po_alarmDate
 * @property string|null $po_alarmNote
 * @property string|null $po_deliveryAdd
 * @property string $po_token
 * @property int|null $PriorityRef_id
 *
 * @property \App\Model\Entity\Priorityref $priorityref
 */
class Purchaseorder extends Entity
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
        'po_reference' => true,
        'po_attachment' => true,
        'po_ordertime' => true,
        'po_confirmDate' => true,
        'po_dispatchtime' => true,
        'po_subtotalAmount' => true,
        'po_taxAmount' => true,
        'po_totalAmount' => true,
        'po_convertRate' => true,
        'po_currency' => true,
        'po_trackingcourier' => true,
        'po_trackingno' => true,
        'po_receiveAddress' => true,
        'po_items' => true,
        'po_deliverymethod' => true,
        'po_requestUser' => true,
        'po_approveUser' => true,
        'po_partnerid' => true,
        'po_invoices' => true,
        'po_status' => true,
        'po_notes' => true,
        'po_alarmDate' => true,
        'po_alarmNote' => true,
        'po_deliveryAdd' => true,
        'po_token' => true,
        'PriorityRef_id' => true,
        'priorityref' => true,
    ];
}
