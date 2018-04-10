<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Booking Entity
 *
 * @property string $id
 * @property string $fullname
 * @property string $gender
 * @property string $agerang
 * @property string $phone
 * @property string $program
 * @property string $email
 * @property string $description
 * @property \Cake\I18n\FrozenTime $created
 */
class Booking extends Entity
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
        'fullname' => true,
        'gender' => true,
        'agerang' => true,
        'phone' => true,
        'program' => true,
        'email' => true,
        'description' => true,
        'created' => true
    ];
}
