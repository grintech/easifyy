<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * State Entity
 *
 * @property int $id
 * @property string $name
 * @property string|null $gst_code
 * @property \Cake\I18n\FrozenTime|null $created
 *
 * @property \App\Model\Entity\Address[] $addresses
 * @property \App\Model\Entity\Merchant[] $merchants
 * @property \App\Model\Entity\Supplier[] $suppliers
 */
class State extends Entity
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
        'name' => true,
        'gst_code' => true,
        'created' => true,
        'addresses' => true,
        'merchants' => true,
        'suppliers' => true,
    ];
}
