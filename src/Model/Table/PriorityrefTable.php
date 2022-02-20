<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Priorityref Model
 *
 * @method \App\Model\Entity\Priorityref newEmptyEntity()
 * @method \App\Model\Entity\Priorityref newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Priorityref[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Priorityref get($primaryKey, $options = [])
 * @method \App\Model\Entity\Priorityref findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Priorityref patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Priorityref[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Priorityref|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Priorityref saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Priorityref[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Priorityref[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Priorityref[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Priorityref[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class PriorityrefTable extends Table
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

        $this->setTable('priorityref');
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
            ->scalar('pr_name')
            ->maxLength('pr_name', 64)
            ->requirePresence('pr_name', 'create')
            ->notEmptyString('pr_name');

        $validator
            ->scalar('pr_description')
            ->allowEmptyString('pr_description');

        return $validator;
    }
}
