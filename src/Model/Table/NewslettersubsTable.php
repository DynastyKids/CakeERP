<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Newslettersubs Model
 *
 * @method \App\Model\Entity\Newslettersub newEmptyEntity()
 * @method \App\Model\Entity\Newslettersub newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Newslettersub[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Newslettersub get($primaryKey, $options = [])
 * @method \App\Model\Entity\Newslettersub findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Newslettersub patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Newslettersub[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Newslettersub|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Newslettersub saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Newslettersub[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Newslettersub[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Newslettersub[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Newslettersub[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class NewslettersubsTable extends Table
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

        $this->setTable('newslettersubs');
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
            ->scalar('nl_name')
            ->requirePresence('nl_name', 'create')
            ->notEmptyString('nl_name');

        $validator
            ->scalar('nl_email')
            ->requirePresence('nl_email', 'create')
            ->notEmptyString('nl_email');

        $validator
            ->integer('nl_group')
            ->allowEmptyString('nl_group');

        return $validator;
    }
}
