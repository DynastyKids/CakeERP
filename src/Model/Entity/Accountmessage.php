<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Accountmessage Entity
 *
 * @property int $id
 * @property int $am_senderid
 * @property int $am_receiverid
 * @property string $am_title
 * @property string $am_contents
 * @property int|null $am_parentid
 * @property string|null $am_attachment
 * @property string|null $am_attsByLink
 */
class Accountmessage extends Entity
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
        'am_senderid' => true,
        'am_receiverid' => true,
        'am_title' => true,
        'am_contents' => true,
        'am_parentid' => true,
        'am_attachment' => true,
        'am_attsByLink' => true,
    ];
}
