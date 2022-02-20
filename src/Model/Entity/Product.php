<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity
 *
 * @property int $id
 * @property string $p_sku
 * @property string|null $p_barcode
 * @property string|null $p_group
 * @property string|null $p_promoGroup
 * @property string $p_onlinePrice
 * @property string $p_retailPrice
 * @property string $p_cubic_long
 * @property string $p_cubit_width
 * @property string $p_cubic_height
 * @property int $p_publish
 * @property int $p_hide
 * @property int $p_totalquantity
 */
class Product extends Entity
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
        'p_sku' => true,
        'p_barcode' => true,
        'p_group' => true,
        'p_promoGroup' => true,
        'p_onlinePrice' => true,
        'p_retailPrice' => true,
        'p_cubic_long' => true,
        'p_cubit_width' => true,
        'p_cubic_height' => true,
        'p_publish' => true,
        'p_hide' => true,
        'p_totalquantity' => true,
    ];
}
