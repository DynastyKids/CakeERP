<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sostatus Model
 *
 * @method \App\Model\Entity\Sostatus newEmptyEntity()
 * @method \App\Model\Entity\Sostatus newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Sostatus[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sostatus get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sostatus findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Sostatus patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sostatus[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sostatus|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sostatus saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sostatus[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Sostatus[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Sostatus[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Sostatus[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class SostatusTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('sostatus');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('ss_name')
            ->maxLength('ss_name', 64)
            ->requirePresence('ss_name', 'create')
            ->notEmptyString('ss_name');

        $validator
            ->scalar('ss_description')
            ->allowEmptyString('ss_description');

        return $validator;
    }
}
