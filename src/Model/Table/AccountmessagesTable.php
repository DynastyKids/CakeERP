<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Accountmessages Model
 *
 * @method \App\Model\Entity\Accountmessage newEmptyEntity()
 * @method \App\Model\Entity\Accountmessage newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Accountmessage[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Accountmessage get($primaryKey, $options = [])
 * @method \App\Model\Entity\Accountmessage findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Accountmessage patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Accountmessage[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Accountmessage|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Accountmessage saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Accountmessage[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Accountmessage[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Accountmessage[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Accountmessage[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class AccountmessagesTable extends Table
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

        $this->setTable('accountmessages');
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
            ->integer('am_senderid')
            ->requirePresence('am_senderid', 'create')
            ->notEmptyString('am_senderid');

        $validator
            ->integer('am_receiverid')
            ->requirePresence('am_receiverid', 'create')
            ->notEmptyString('am_receiverid');

        $validator
            ->scalar('am_title')
            ->requirePresence('am_title', 'create')
            ->notEmptyString('am_title');

        $validator
            ->scalar('am_contents')
            ->requirePresence('am_contents', 'create')
            ->notEmptyString('am_contents');

        $validator
            ->integer('am_parentid')
            ->allowEmptyString('am_parentid');

        $validator
            ->scalar('am_attachment')
            ->maxLength('am_attachment', 255)
            ->allowEmptyString('am_attachment');

        $validator
            ->scalar('am_attsByLink')
            ->allowEmptyString('am_attsByLink');

        return $validator;
    }
}
