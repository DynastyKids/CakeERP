<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Calendarevent Entity
 *
 * @property int $id
 * @property int $staffs_id
 * @property string $ev_title
 * @property string $ev_detail
 * @property int $ev_type
 * @property int $ev_priority
 * @property string|null $ev_involvedUsers
 * @property int|null $ev_alarmTime
 * @property string|null $ev_location
 * @property int|null $ev_eventTime
 * @property int|null $ev_duration
 * @property int|null $ev_createUser
 * @property int|null $ev_createTime
 * @property int|null $ev_lastupdateUser
 * @property int|null $ev_lastupdateTime
 *
 * @property \App\Model\Entity\Staff $staff
 */
class Calendarevent extends Entity
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
        'staffs_id' => true,
        'ev_title' => true,
        'ev_detail' => true,
        'ev_type' => true,
        'ev_priority' => true,
        'ev_involvedUsers' => true,
        'ev_alarmTime' => true,
        'ev_location' => true,
        'ev_eventTime' => true,
        'ev_duration' => true,
        'ev_createUser' => true,
        'ev_createTime' => true,
        'ev_lastupdateUser' => true,
        'ev_lastupdateTime' => true,
        'staff' => true,
    ];
}
