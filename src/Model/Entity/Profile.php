<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Profile Entity
 *
 * @property int $id
 * @property string $name
 * @property \Cake\I18n\Time $bithday
 * @property int $altura
 * @property int $weight
 * @property string $gender
 * @property int $bpmLowerLimit
 * @property int $bpmUpperLimit
 *
 * @property \App\Model\Entity\HeartRate[] $heart_rates
 */
class Profile extends Entity
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
        '*' => true,
        'id' => false
    ];
}
