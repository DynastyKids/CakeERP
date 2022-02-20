<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CrmhomeHasCrmtag Entity
 *
 * @property int $crmHome_id
 * @property int $crmTag_id
 *
 * @property \App\Model\Entity\Crmhome $crmhome
 * @property \App\Model\Entity\Crmtag $crmtag
 */
class CrmhomeHasCrmtag extends Entity
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
        'crmhome' => true,
        'crmtag' => true,
    ];
}
