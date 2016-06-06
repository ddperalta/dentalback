<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Appointment Entity.
 *
 * @property int $id
 * @property \Cake\I18n\Time $appointment_date
 * @property int $patient_id
 * @property \App\Model\Entity\Patient $patient
 * @property int $doctor_id
 * @property \App\Model\Entity\Doctor $doctor
 * @property int $unit_id
 * @property \App\Model\Entity\Unit $unit
 * @property float $total
 * @property bool $confirmed
 * @property string $description
 * @property string $recomendations
 * @property string $rated
 * @property \Cake\I18n\Time $modified
 * @property \Cake\I18n\Time $created
 */
class Appointment extends Entity
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
        'id' => false,
    ];
}
