<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Article Entity
 *
 * @property int $id
 * @property int $a_publishTime
 * @property int|null $a_lastModifyTime
 * @property string $a_title
 * @property string|null $a_content
 * @property int $a_status
 * @property int|null $a_type
 */
class Article extends Entity
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
        'a_publishTime' => true,
        'a_lastModifyTime' => true,
        'a_title' => true,
        'a_content' => true,
        'a_status' => true,
        'a_type' => true,
    ];
}
