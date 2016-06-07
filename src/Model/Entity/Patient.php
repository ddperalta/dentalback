<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Patient Entity.
 *
 * @property int $id
 * @property string $name
 * @property string $lastname
 * @property string $mothersname
 * @property string $address
 * @property string $email
 * @property string $phone
 * @property \Cake\I18n\Time $birthday
 * @property int $patientnumber
 * @property string $password
 * @property bool $active
 * @property \Cake\I18n\Time $modified
 * @property \Cake\I18n\Time $created
 * @property \App\Model\Entity\Appointment[] $appointments
 */
class Patient extends Entity
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
    protected $_virtual = ['full_name', 'id_profile', 'age', 'birthday_string'];
    
    protected function _getFullName() {
        return $this->_properties['name'].' '.$this->_properties['lastname'].' '.$this->_properties['mothersname'];
    }

    protected function _getIdProfile() {
        return $this->_properties['id'];
    }

    protected function _getBirthdayString() {
        return date_format($this->_properties['birthday'], 'd M');
    }

    protected function _getAge() {
        //debug($this->_properties['birthday']);
        return date_diff(date_create($this->_properties['birthday']), date_create('now'))->y;
    }
    /**
     * Fields that are excluded from JSON an array versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
