<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Customerbilling Entity
 *
 * @property int $id
 * @property string $cb_firstname
 * @property string $cb_lastname
 * @property string|null $cb_address
 * @property string|null $cb_phone
 * @property string|null $cb_mobile
 * @property int $customer_id
 *
 * @property \App\Model\Entity\Customer $customer
 */
class Customerbilling extends Entity
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
        'cb_firstname' => true,
        'cb_lastname' => true,
        'cb_address' => true,
        'cb_phone' => true,
        'cb_mobile' => true,
        'customer_id' => true,
        'customer' => true,
    ];
}
