<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Hrzones Model
 *
 * @method \App\Model\Entity\Hrzone get($primaryKey, $options = [])
 * @method \App\Model\Entity\Hrzone newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Hrzone[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Hrzone|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Hrzone patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Hrzone[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Hrzone findOrCreate($search, callable $callback = null)
 */
class HrzonesTable extends Table
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

        $this->table('hrzones');
        $this->displayField('name');
        $this->primaryKey('id');
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
            ->allowEmpty('hrMax');

        return $validator;
    }
}
