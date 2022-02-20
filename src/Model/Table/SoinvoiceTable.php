<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Soinvoice Model
 *
 * @property \App\Model\Table\SalesorderTable&\Cake\ORM\Association\BelongsTo $Salesorder
 *
 * @method \App\Model\Entity\Soinvoice newEmptyEntity()
 * @method \App\Model\Entity\Soinvoice newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Soinvoice[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Soinvoice get($primaryKey, $options = [])
 * @method \App\Model\Entity\Soinvoice findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Soinvoice patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Soinvoice[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Soinvoice|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Soinvoice saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Soinvoice[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Soinvoice[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Soinvoice[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Soinvoice[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class SoinvoiceTable extends Table
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

        $this->setTable('soinvoice');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Salesorder', [
            'foreignKey' => 'salesOrder_id',
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
            ->scalar('si_invoiceNumber')
            ->maxLength('si_invoiceNumber', 255)
            ->requirePresence('si_invoiceNumber', 'create')
            ->notEmptyString('si_invoiceNumber');

        $validator
            ->dateTime('si_createTime')
            ->requirePresence('si_createTime', 'create')
            ->notEmptyDateTime('si_createTime');

        $validator
            ->scalar('si_products')
            ->allowEmptyString('si_products');

        $validator
            ->scalar('si_paymentid')
            ->requirePresence('si_paymentid', 'create')
            ->notEmptyString('si_paymentid');

        $validator
            ->scalar('si_transactionID')
            ->allowEmptyString('si_transactionID');

        $validator
            ->scalar('si_transactionAuth')
            ->maxLength('si_transactionAuth', 255)
            ->allowEmptyString('si_transactionAuth');

        $validator
            ->decimal('si_transactionAmount')
            ->allowEmptyString('si_transactionAmount');

        $validator
            ->scalar('salesorder_invoicecol')
            ->maxLength('salesorder_invoicecol', 45)
            ->allowEmptyString('salesorder_invoicecol');

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
        $rules->add($rules->existsIn('salesOrder_id', 'Salesorder'), ['errorField' => 'salesOrder_id']);

        return $rules;
    }
}
