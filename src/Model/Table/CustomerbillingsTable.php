<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Customerbillings Model
 *
 * @property \App\Model\Table\CustomersTable&\Cake\ORM\Association\BelongsTo $Customers
 *
 * @method \App\Model\Entity\Customerbilling newEmptyEntity()
 * @method \App\Model\Entity\Customerbilling newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Customerbilling[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Customerbilling get($primaryKey, $options = [])
 * @method \App\Model\Entity\Customerbilling findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Customerbilling patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Customerbilling[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Customerbilling|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Customerbilling saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Customerbilling[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Customerbilling[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Customerbilling[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Customerbilling[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CustomerbillingsTable extends Table
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

        $this->setTable('customerbillings');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Customers', [
            'foreignKey' => 'customer_id',
            'joinType' => 'INNER',
        ]);
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
            ->scalar('cb_firstname')
            ->requirePresence('cb_firstname', 'create')
            ->notEmptyString('cb_firstname');

        $validator
            ->scalar('cb_lastname')
            ->requirePresence('cb_lastname', 'create')
            ->notEmptyString('cb_lastname');

        $validator
            ->scalar('cb_address')
            ->allowEmptyString('cb_address');

        $validator
            ->scalar('cb_phone')
            ->maxLength('cb_phone', 45)
            ->allowEmptyString('cb_phone');

        $validator
            ->scalar('cb_mobile')
            ->maxLength('cb_mobile', 45)
            ->allowEmptyString('cb_mobile');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('customer_id', 'Customers'), ['errorField' => 'customer_id']);

        return $rules;
    }
}
