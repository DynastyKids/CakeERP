<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Customers Model
 *
 * @property \App\Model\Table\CrmhomeTable&\Cake\ORM\Association\HasMany $Crmhome
 * @property \App\Model\Table\CustomerbillingsTable&\Cake\ORM\Association\HasMany $Customerbillings
 * @property \App\Model\Table\SalesorderTable&\Cake\ORM\Association\HasMany $Salesorder
 *
 * @method \App\Model\Entity\Customer newEmptyEntity()
 * @method \App\Model\Entity\Customer newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Customer[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Customer get($primaryKey, $options = [])
 * @method \App\Model\Entity\Customer findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Customer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Customer[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Customer|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Customer saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Customer[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Customer[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Customer[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Customer[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CustomersTable extends Table
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

        $this->setTable('customers');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Crmhome', [
            'foreignKey' => 'customer_id',
        ]);
        $this->hasMany('Customerbillings', [
            'foreignKey' => 'customer_id',
        ]);
        $this->hasMany('Salesorder', [
            'foreignKey' => 'customer_id',
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
            ->scalar('cu_email')
            ->maxLength('cu_email', 255)
            ->requirePresence('cu_email', 'create')
            ->notEmptyString('cu_email')
            ->add('cu_email', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('cu_password')
            ->maxLength('cu_password', 255)
            ->requirePresence('cu_password', 'create')
            ->notEmptyString('cu_password');

        $validator
            ->integer('cu_activate')
            ->notEmptyString('cu_activate');

        $validator
            ->allowEmptyString('cu_dob');

        $validator
            ->scalar('cu_firstname')
            ->allowEmptyString('cu_firstname');

        $validator
            ->scalar('cu_lastname')
            ->allowEmptyString('cu_lastname');

        $validator
            ->scalar('cu_businessName')
            ->allowEmptyString('cu_businessName');

        $validator
            ->scalar('cu_mobile')
            ->maxLength('cu_mobile', 16)
            ->allowEmptyString('cu_mobile');

        $validator
            ->scalar('cu_workphone')
            ->maxLength('cu_workphone', 16)
            ->allowEmptyString('cu_workphone');

        $validator
            ->scalar('cu_PostalAddress')
            ->allowEmptyString('cu_PostalAddress');

        $validator
            ->scalar('cu_token')
            ->maxLength('cu_token', 128)
            ->allowEmptyString('cu_token');

        $validator
            ->integer('cu_role')
            ->notEmptyString('cu_role');

        $validator
            ->integer('cu_createTime')
            ->allowEmptyString('cu_createTime');

        $validator
            ->allowEmptyString('cu_lastLogin');

        $validator
            ->integer('cu_group')
            ->notEmptyString('cu_group');

        $validator
            ->scalar('cu_abn')
            ->maxLength('cu_abn', 16)
            ->allowEmptyString('cu_abn');

        $validator
            ->scalar('cu_accountTag')
            ->allowEmptyString('cu_accountTag');

        $validator
            ->scalar('cu_notes')
            ->allowEmptyString('cu_notes');

        $validator
            ->scalar('cu_authkey')
            ->maxLength('cu_authkey', 64)
            ->allowEmptyString('cu_authkey');

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
        $rules->add($rules->isUnique(['cu_email']), ['errorField' => 'cu_email']);

        return $rules;
    }
}
