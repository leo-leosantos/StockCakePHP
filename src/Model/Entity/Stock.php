<?php
namespace Stock\Model\Entity;

use Cake\ORM\Entity;

/**
 * Stock Entity
 *
 * @property int $id
 * @property int $product_id
 * @property int $decimal
 * @property float $unit_price
 * @property float $unit_cost
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \Stock\Model\Entity\Product $product
 */
class Stock extends Entity
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
        'product_id' => true,
        'decimal' => true,
        'unit_price' => true,
        'unit_cost' => true,
        'created' => true,
        'modified' => true,
        'product' => true
    ];
}
