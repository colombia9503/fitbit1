<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * HeartRate Entity
 *
 * @property int $id
 * @property int $profile_id
 * @property int $bpm
 * @property int $hrZone_id
 * @property int $activity_id
 * @property int $totalCals
 *
 * @property \App\Model\Entity\Profile $profile
 * @property \App\Model\Entity\Hrzone $hrzone
 * @property \App\Model\Entity\Activity $activity
 */
class HeartRate extends Entity
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
