<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ProductsHasProductcategory Entity
 *
 * @property int $products_id
 * @property int $productCategory_id
 *
 * @property \App\Model\Entity\Product $product
 * @property \App\Model\Entity\Productcategory $productcategory
 */
class ProductsHasProductcategory extends Entity
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
        'product' => true,
        'productcategory' => true,
    ];
}
