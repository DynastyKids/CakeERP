<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Accounttags Model
 *
 * @method \App\Model\Entity\Accounttag newEmptyEntity()
 * @method \App\Model\Entity\Accounttag newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Accounttag[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Accounttag get($primaryKey, $options = [])
 * @method \App\Model\Entity\Accounttag findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Accounttag patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Accounttag[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Accounttag|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Accounttag saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Accounttag[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Accounttag[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Accounttag[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Accounttag[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class AccounttagsTable extends Table
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

        $this->setTable('accounttags');
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
            ->scalar('at_name')
            ->allowEmptyString('at_name');

        $validator
            ->scalar('at_applicability')
            ->maxLength('at_applicability', 45)
            ->allowEmptyString('at_applicability');

        $validator
            ->scalar('at_color')
            ->maxLength('at_color', 6)
            ->allowEmptyString('at_color');

        $validator
            ->integer('at_active')
            ->allowEmptyString('at_active');

        $validator
            ->allowEmptyString('at_createdDate');

        $validator
            ->integer('at_createUser')
            ->allowEmptyString('at_createUser');

        return $validator;
    }
}
