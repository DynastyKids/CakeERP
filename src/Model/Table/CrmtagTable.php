<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Crmtag Model
 *
 * @method \App\Model\Entity\Crmtag newEmptyEntity()
 * @method \App\Model\Entity\Crmtag newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Crmtag[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Crmtag get($primaryKey, $options = [])
 * @method \App\Model\Entity\Crmtag findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Crmtag patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Crmtag[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Crmtag|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Crmtag saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Crmtag[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Crmtag[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Crmtag[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Crmtag[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CrmtagTable extends Table
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

        $this->setTable('crmtag');
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
            ->scalar('ct_name')
            ->maxLength('ct_name', 64)
            ->requirePresence('ct_name', 'create')
            ->notEmptyString('ct_name');

        $validator
            ->scalar('ct_color')
            ->maxLength('ct_color', 8)
            ->requirePresence('ct_color', 'create')
            ->notEmptyString('ct_color');

        $validator
            ->integer('ct_creator')
            ->allowEmptyString('ct_creator');

        $validator
            ->integer('ct_createTime')
            ->allowEmptyString('ct_createTime');

        return $validator;
    }
}
