<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Purchaseorder Model
 *
 * @property \App\Model\Table\PriorityrefTable&\Cake\ORM\Association\BelongsTo $Priorityref
 *
 * @method \App\Model\Entity\Purchaseorder newEmptyEntity()
 * @method \App\Model\Entity\Purchaseorder newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Purchaseorder[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Purchaseorder get($primaryKey, $options = [])
 * @method \App\Model\Entity\Purchaseorder findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Purchaseorder patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Purchaseorder[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Purchaseorder|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Purchaseorder saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Purchaseorder[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Purchaseorder[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Purchaseorder[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Purchaseorder[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class PurchaseorderTable extends Table
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

        $this->setTable('purchaseorder');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

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
            ->scalar('po_reference')
            ->allowEmptyString('po_reference');

        $validator
            ->scalar('po_attachment')
            ->allowEmptyString('po_attachment');

        $validator
            ->requirePresence('po_ordertime', 'create')
            ->notEmptyString('po_ordertime');

        $validator
            ->requirePresence('po_confirmDate', 'create')
            ->notEmptyString('po_confirmDate');

        $validator
            ->allowEmptyString('po_dispatchtime');

        $validator
            ->decimal('po_subtotalAmount')
            ->requirePresence('po_subtotalAmount', 'create')
            ->notEmptyString('po_subtotalAmount');

        $validator
            ->decimal('po_taxAmount')
            ->notEmptyString('po_taxAmount');

        $validator
            ->decimal('po_totalAmount')
            ->requirePresence('po_totalAmount', 'create')
            ->notEmptyString('po_totalAmount');

        $validator
            ->decimal('po_convertRate')
            ->allowEmptyString('po_convertRate');

        $validator
            ->scalar('po_currency')
            ->maxLength('po_currency', 10)
            ->allowEmptyString('po_currency');

        $validator
            ->scalar('po_trackingcourier')
            ->maxLength('po_trackingcourier', 255)
            ->allowEmptyString('po_trackingcourier');

        $validator
            ->scalar('po_trackingno')
            ->maxLength('po_trackingno', 255)
            ->allowEmptyString('po_trackingno');

        $validator
            ->scalar('po_receiveAddress')
            ->allowEmptyString('po_receiveAddress');

        $validator
            ->scalar('po_items')
            ->allowEmptyString('po_items');

        $validator
            ->scalar('po_deliverymethod')
            ->allowEmptyString('po_deliverymethod');

        $validator
            ->integer('po_requestUser')
            ->requirePresence('po_requestUser', 'create')
            ->notEmptyString('po_requestUser');

        $validator
            ->integer('po_approveUser')
            ->requirePresence('po_approveUser', 'create')
            ->notEmptyString('po_approveUser');

        $validator
            ->integer('po_partnerid')
            ->allowEmptyString('po_partnerid');

        $validator
            ->scalar('po_invoices')
            ->allowEmptyString('po_invoices');

        $validator
            ->integer('po_status')
            ->allowEmptyString('po_status');

        $validator
            ->scalar('po_notes')
            ->allowEmptyString('po_notes');

        $validator
            ->allowEmptyString('po_alarmDate');

        $validator
            ->scalar('po_alarmNote')
            ->allowEmptyString('po_alarmNote');

        $validator
            ->scalar('po_deliveryAdd')
            ->allowEmptyString('po_deliveryAdd');

        $validator
            ->scalar('po_token')
            ->maxLength('po_token', 64)
            ->requirePresence('po_token', 'create')
            ->notEmptyString('po_token');

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
        $rules->add($rules->existsIn('PriorityRef_id', 'Priorityref'), ['errorField' => 'PriorityRef_id']);

        return $rules;
    }
}
