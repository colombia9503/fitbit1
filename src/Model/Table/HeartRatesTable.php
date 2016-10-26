<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * HeartRates Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Profiles
 * @property \Cake\ORM\Association\BelongsTo $Hrzones
 * @property \Cake\ORM\Association\BelongsTo $Activities
 *
 * @method \App\Model\Entity\HeartRate get($primaryKey, $options = [])
 * @method \App\Model\Entity\HeartRate newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\HeartRate[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\HeartRate|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\HeartRate patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\HeartRate[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\HeartRate findOrCreate($search, callable $callback = null)
 */
class HeartRatesTable extends Table
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

        $this->table('heart_rates');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Profiles', [
            'foreignKey' => 'profile_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Hrzones', [
            'foreignKey' => 'hrZone_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Activities', [
            'foreignKey' => 'activity_id',
            'joinType' => 'INNER'
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
            ->integer('bpm')
            ->allowEmpty('bpm');

        $validator
            ->integer('totalCals')
            ->allowEmpty('totalCals');

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
        $rules->add($rules->existsIn(['profile_id'], 'Profiles'));
        $rules->add($rules->existsIn(['hrZone_id'], 'Hrzones'));
        $rules->add($rules->existsIn(['activity_id'], 'Activities'));

        return $rules;
    }
}
