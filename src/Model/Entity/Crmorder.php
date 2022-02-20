<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Crmorder Entity
 *
 * @property int $id
 * @property int $crmHome_id
 * @property int|null $co_productId
 * @property string|null $co_inventoryCode
 * @property int|null $co_quantity
 * @property string $co_sequence
 * @property string|null $co_Taxes
 * @property string|null $co_agreedPrice
 * @property int $co_optionalFlag
 * @property string|null $co_notes
 * @property string|null $co_subsection
 *
 * @property \App\Model\Entity\Crmhome $crmhome
 */
class Crmorder extends Entity
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
        'crmHome_id' => true,
        'co_productId' => true,
        'co_inventoryCode' => true,
        'co_quantity' => true,
        'co_sequence' => true,
        'co_Taxes' => true,
        'co_agreedPrice' => true,
        'co_optionalFlag' => true,
        'co_notes' => true,
        'co_subsection' => true,
        'crmhome' => true,
    ];
}
