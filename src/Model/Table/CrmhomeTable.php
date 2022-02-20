<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Crmhome Model
 *
 * @property \App\Model\Table\CustomersTable&\Cake\ORM\Association\BelongsTo $Customers
 * @property \App\Model\Table\CrmorderstatusTable&\Cake\ORM\Association\BelongsTo $Crmorderstatus
 *
 * @method \App\Model\Entity\Crmhome newEmptyEntity()
 * @method \App\Model\Entity\Crmhome newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Crmhome[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Crmhome get($primaryKey, $options = [])
 * @method \App\Model\Entity\Crmhome findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Crmhome patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Crmhome[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Crmhome|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Crmhome saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Crmhome[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Crmhome[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Crmhome[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Crmhome[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CrmhomeTable extends Table
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

        $this->setTable('crmhome');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Customers', [
            'foreignKey' => 'customer_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Crmorderstatus', [
            'foreignKey' => 'crmOrderStatus_id',
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
            ->integer('cp_expiredate')
            ->allowEmptyString('cp_expiredate');

        $validator
            ->integer('cp_paymentTerms')
            ->allowEmptyString('cp_paymentTerms');

        $validator
            ->integer('cp_createDate')
            ->allowEmptyString('cp_createDate');

        $validator
            ->integer('cp_createUser')
            ->allowEmptyString('cp_createUser');

        $validator
            ->integer('cp_lastModifyDate')
            ->allowEmptyString('cp_lastModifyDate');

        $validator
            ->integer('cp_lastModifyUser')
            ->allowEmptyString('cp_lastModifyUser');

        $validator
            ->integer('cp_statusId')
            ->allowEmptyString('cp_statusId');

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
        $rules->add($rules->existsIn('crmOrderStatus_id', 'Crmorderstatus'), ['errorField' => 'crmOrderStatus_id']);

        return $rules;
    }
}
