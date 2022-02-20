<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Staff Entity
 *
 * @property int $id
 * @property string $sf_Firstname
 * @property string $sf_Lastname
 * @property string|null $sf_address
 * @property string $sf_email
 * @property string $sf_password
 * @property int $sf_createTime
 * @property int|null $sf_lastLogin
 * @property string|null $sf_role
 * @property string|null $sf_phone
 * @property string|null $sf_mobile
 * @property string|null $sf_jobTitle
 * @property string|null $sf_website
 * @property string|null $sf_taxID
 * @property string|null $sf_tags
 * @property string|null $sf_token
 * @property int|null $sf_tokenissue
 * @property string|null $sf_authkey
 * @property int|null $staff_groups_id
 *
 * @property \App\Model\Entity\StaffGroup $staff_group
 */
class Staff extends Entity
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
        'sf_Firstname' => true,
        'sf_Lastname' => true,
        'sf_address' => true,
        'sf_email' => true,
        'sf_password' => true,
        'sf_createTime' => true,
        'sf_lastLogin' => true,
        'sf_role' => true,
        'sf_phone' => true,
        'sf_mobile' => true,
        'sf_jobTitle' => true,
        'sf_website' => true,
        'sf_taxID' => true,
        'sf_tags' => true,
        'sf_token' => true,
        'sf_tokenissue' => true,
        'sf_authkey' => true,
        'staff_groups_id' => true,
        'staff_group' => true,
    ];
}
