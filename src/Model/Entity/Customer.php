<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Customer Entity
 *
 * @property int $id
 * @property string $cu_email
 * @property string $cu_password
 * @property int $cu_activate
 * @property int|null $cu_dob
 * @property string|null $cu_firstname
 * @property string|null $cu_lastname
 * @property string|null $cu_businessName
 * @property string|null $cu_mobile
 * @property string|null $cu_workphone
 * @property string|null $cu_PostalAddress
 * @property string|null $cu_token
 * @property int $cu_role
 * @property int|null $cu_createTime
 * @property int|null $cu_lastLogin
 * @property int $cu_group
 * @property string|null $cu_abn
 * @property string|null $cu_accountTag
 * @property string|null $cu_notes
 * @property string|null $cu_authkey
 *
 * @property \App\Model\Entity\Crmhome[] $crmhome
 * @property \App\Model\Entity\Customerbilling[] $customerbillings
 * @property \App\Model\Entity\Salesorder[] $salesorder
 */
class Customer extends Entity
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
        'cu_email' => true,
        'cu_password' => true,
        'cu_activate' => true,
        'cu_dob' => true,
        'cu_firstname' => true,
        'cu_lastname' => true,
        'cu_businessName' => true,
        'cu_mobile' => true,
        'cu_workphone' => true,
        'cu_PostalAddress' => true,
        'cu_token' => true,
        'cu_role' => true,
        'cu_createTime' => true,
        'cu_lastLogin' => true,
        'cu_group' => true,
        'cu_abn' => true,
        'cu_accountTag' => true,
        'cu_notes' => true,
        'cu_authkey' => true,
        'crmhome' => true,
        'customerbillings' => true,
        'salesorder' => true,
    ];
}
