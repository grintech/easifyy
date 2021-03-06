<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * OrderInvitation Entity
 *
 * @property int $id
 * @property int $order_id
 * @property int $user_id
 * @property int $view_status
 * @property \Cake\I18n\FrozenTime $updated
 * @property \Cake\I18n\FrozenTime $created
 *
 * @property \App\Model\Entity\Order $order
 * @property \App\Model\Entity\User $user
 */
class OrderInvitation extends Entity
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
        'order_id' => true,
        'user_id' => true,
        'view_status' => true,
        'updated' => true,
        'created' => true,
        'order' => true,
        'user' => true,
    ];
}
