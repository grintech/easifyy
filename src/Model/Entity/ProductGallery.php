<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ProductGallery Entity
 *
 * @property int $id
 * @property int $product_id
 * @property string $type
 * @property string $url
 * @property \Cake\I18n\FrozenTime|null $created
 *
 * @property \App\Model\Entity\Product $product
 */
class ProductGallery extends Entity
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
        'type' => true,
        'url' => true,
        'created' => true,
        'product' => true,
    ];
}
