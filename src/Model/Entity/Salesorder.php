<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Salesorder Entity
 *
 * @property int $id
 * @property int $customer_id
 * @property int $so_ordertime
 * @property int|null $so_paidTime
 * @property int|null $so_dispatchtime
 * @property string $so_deliverymethod
 * @property string|null $so_trackingcourier
 * @property string|null $so_trackingno
 * @property string|null $so_items
 * @property string|null $so_paymentid
 * @property string $so_status
 * @property string|null $so_deliveryaddress
 * @property int|null $coupon_id
 * @property string $so_subtotal
 * @property string $so_promoAmount
 * @property string $so_tax
 * @property string $so_totalAmount
 * @property string $so_currency
 * @property int|null $so_customerRef
 * @property int $so_staff_id
 * @property string|null $so_notes
 * @property string $so_token
 * @property string|null $so_attachemnt
 * @property string|null $so_campaign
 * @property int|null $branch_processid
 * @property int $soStatus_id
 * @property int $so_salesman
 * @property int|null $so_confirmDate
 * @property int|null $so_confirmUser
 * @property int|null $PriorityRef_id
 *
 * @property \App\Model\Entity\Customer $customer
 * @property \App\Model\Entity\Coupon $coupon
 * @property \App\Model\Entity\SoStaff $so_staff
 * @property \App\Model\Entity\Sostatus $sostatus
 * @property \App\Model\Entity\Priorityref $priorityref
 */
class Salesorder extends Entity
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
        'customer_id' => true,
        'so_ordertime' => true,
        'so_paidTime' => true,
        'so_dispatchtime' => true,
        'so_deliverymethod' => true,
        'so_trackingcourier' => true,
        'so_trackingno' => true,
        'so_items' => true,
        'so_paymentid' => true,
        'so_status' => true,
        'so_deliveryaddress' => true,
        'coupon_id' => true,
        'so_subtotal' => true,
        'so_promoAmount' => true,
        'so_tax' => true,
        'so_totalAmount' => true,
        'so_currency' => true,
        'so_customerRef' => true,
        'so_staff_id' => true,
        'so_notes' => true,
        'so_token' => true,
        'so_attachemnt' => true,
        'so_campaign' => true,
        'branch_processid' => true,
        'soStatus_id' => true,
        'so_salesman' => true,
        'so_confirmDate' => true,
        'so_confirmUser' => true,
        'PriorityRef_id' => true,
        'customer' => true,
        'coupon' => true,
        'so_staff' => true,
        'sostatus' => true,
        'priorityref' => true,
    ];
}
