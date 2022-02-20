<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Crmhome Entity
 *
 * @property int $id
 * @property int $customer_id
 * @property int|null $cp_expiredate
 * @property int|null $cp_paymentTerms
 * @property int|null $cp_createDate
 * @property int|null $cp_createUser
 * @property int|null $cp_lastModifyDate
 * @property int|null $cp_lastModifyUser
 * @property int|null $cp_statusId
 * @property int $crmOrderStatus_id
 *
 * @property \App\Model\Entity\Customer $customer
 * @property \App\Model\Entity\Crmorderstatus $crmorderstatus
 */
class Crmhome extends Entity
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
        'cp_expiredate' => true,
        'cp_paymentTerms' => true,
        'cp_createDate' => true,
        'cp_createUser' => true,
        'cp_lastModifyDate' => true,
        'cp_lastModifyUser' => true,
        'cp_statusId' => true,
        'crmOrderStatus_id' => true,
        'customer' => true,
        'crmorderstatus' => true,
    ];
}
