<?php
namespace App\Model\Table;

use App\Model\Entity\Patient;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Patients Model
 *
 * @property \Cake\ORM\Association\HasMany $Appointments
 */
class PatientsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('patients');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Appointments', [
            'foreignKey' => 'patient_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('name');

        $validator
            ->allowEmpty('lastname');

        $validator
            ->allowEmpty('mothersname');

        $validator
            ->allowEmpty('address');

        $validator
            ->email('email')
            ->allowEmpty('email');

        $validator
            ->allowEmpty('phone');

        $validator
            ->date('birthday')
            ->allowEmpty('birthday');

        $validator
            ->integer('patientnumber')
            ->requirePresence('patientnumber', 'create')
            ->notEmpty('patientnumber');

        $validator
            ->allowEmpty('password');

        $validator
            ->boolean('active')
            ->allowEmpty('active');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));
        return $rules;
    }
}
