<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Salesorder Model
 *
 * @property \App\Model\Table\CustomersTable&\Cake\ORM\Association\BelongsTo $Customers
 * @property \App\Model\Table\CouponsTable&\Cake\ORM\Association\BelongsTo $Coupons
 * @property \App\Model\Table\SoStaffsTable&\Cake\ORM\Association\BelongsTo $SoStaffs
 * @property \App\Model\Table\SostatusTable&\Cake\ORM\Association\BelongsTo $Sostatus
 * @property \App\Model\Table\PriorityrefTable&\Cake\ORM\Association\BelongsTo $Priorityref
 *
 * @method \App\Model\Entity\Salesorder newEmptyEntity()
 * @method \App\Model\Entity\Salesorder newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Salesorder[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Salesorder get($primaryKey, $options = [])
 * @method \App\Model\Entity\Salesorder findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Salesorder patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Salesorder[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Salesorder|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Salesorder saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Salesorder[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Salesorder[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Salesorder[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Salesorder[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class SalesorderTable extends Table
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

        $this->setTable('salesorder');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Customers', [
            'foreignKey' => 'customer_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Coupons', [
            'foreignKey' => 'coupon_id',
        ]);
        $this->belongsTo('SoStaffs', [
            'foreignKey' => 'so_staff_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Sostatus', [
            'foreignKey' => 'soStatus_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Priorityref', [
            'foreignKey' => 'PriorityRef_id',
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
            ->requirePresence('so_ordertime', 'create')
            ->notEmptyString('so_ordertime');

        $validator
            ->allowEmptyString('so_paidTime');

        $validator
            ->allowEmptyString('so_dispatchtime');

        $validator
            ->scalar('so_deliverymethod')
            ->maxLength('so_deliverymethod', 255)
            ->notEmptyString('so_deliverymethod');

        $validator
            ->scalar('so_trackingcourier')
            ->maxLength('so_trackingcourier', 255)
            ->allowEmptyString('so_trackingcourier');

        $validator
            ->scalar('so_trackingno')
            ->maxLength('so_trackingno', 255)
            ->allowEmptyString('so_trackingno');

        $validator
            ->scalar('so_items')
            ->allowEmptyString('so_items');

        $validator
            ->scalar('so_paymentid')
            ->allowEmptyString('so_paymentid');

        $validator
            ->scalar('so_status')
            ->maxLength('so_status', 45)
            ->requirePresence('so_status', 'create')
            ->notEmptyString('so_status');

        $validator
            ->scalar('so_deliveryaddress')
            ->allowEmptyString('so_deliveryaddress');

        $validator
            ->decimal('so_subtotal')
            ->notEmptyString('so_subtotal');

        $validator
            ->decimal('so_promoAmount')
            ->notEmptyString('so_promoAmount');

        $validator
            ->decimal('so_tax')
            ->notEmptyString('so_tax');

        $validator
            ->decimal('so_totalAmount')
            ->notEmptyString('so_totalAmount');

        $validator
            ->scalar('so_currency')
            ->maxLength('so_currency', 10)
            ->notEmptyString('so_currency');

        $validator
            ->integer('so_customerRef')
            ->allowEmptyString('so_customerRef');

        $validator
            ->scalar('so_notes')
            ->allowEmptyString('so_notes');

        $validator
            ->scalar('so_token')
            ->maxLength('so_token', 64)
            ->requirePresence('so_token', 'create')
            ->notEmptyString('so_token');

        $validator
            ->scalar('so_attachemnt')
            ->allowEmptyString('so_attachemnt');

        $validator
            ->scalar('so_campaign')
            ->allowEmptyString('so_campaign');

        $validator
            ->integer('branch_processid')
            ->allowEmptyString('branch_processid');

        $validator
            ->integer('so_salesman')
            ->requirePresence('so_salesman', 'create')
            ->notEmptyString('so_salesman');

        $validator
            ->integer('so_confirmDate')
            ->allowEmptyString('so_confirmDate');

        $validator
            ->integer('so_confirmUser')
            ->allowEmptyString('so_confirmUser');

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
        $rules->add($rules->existsIn('coupon_id', 'Coupons'), ['errorField' => 'coupon_id']);
        $rules->add($rules->existsIn('so_staff_id', 'SoStaffs'), ['errorField' => 'so_staff_id']);
        $rules->add($rules->existsIn('soStatus_id', 'Sostatus'), ['errorField' => 'soStatus_id']);
        $rules->add($rules->existsIn('PriorityRef_id', 'Priorityref'), ['errorField' => 'PriorityRef_id']);

        return $rules;
    }
}
