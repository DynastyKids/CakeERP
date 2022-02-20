<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Crmorderstatus Model
 *
 * @method \App\Model\Entity\Crmorderstatus newEmptyEntity()
 * @method \App\Model\Entity\Crmorderstatus newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Crmorderstatus[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Crmorderstatus get($primaryKey, $options = [])
 * @method \App\Model\Entity\Crmorderstatus findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Crmorderstatus patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Crmorderstatus[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Crmorderstatus|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Crmorderstatus saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Crmorderstatus[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Crmorderstatus[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Crmorderstatus[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Crmorderstatus[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CrmorderstatusTable extends Table
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

        $this->setTable('crmorderstatus');
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
            ->integer('cs_code')
            ->requirePresence('cs_code', 'create')
            ->notEmptyString('cs_code');

        $validator
            ->scalar('cs_name')
            ->maxLength('cs_name', 16)
            ->requirePresence('cs_name', 'create')
            ->notEmptyString('cs_name');

        $validator
            ->scalar('cs_description')
            ->allowEmptyString('cs_description');

        return $validator;
    }
}
