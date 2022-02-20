<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Soproducts Model
 *
 * @property \App\Model\Table\SalesorderTable&\Cake\ORM\Association\BelongsTo $Salesorder
 * @property \App\Model\Table\ProductsTable&\Cake\ORM\Association\BelongsTo $Products
 *
 * @method \App\Model\Entity\Soproduct newEmptyEntity()
 * @method \App\Model\Entity\Soproduct newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Soproduct[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Soproduct get($primaryKey, $options = [])
 * @method \App\Model\Entity\Soproduct findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Soproduct patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Soproduct[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Soproduct|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Soproduct saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Soproduct[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Soproduct[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Soproduct[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Soproduct[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class SoproductsTable extends Table
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

        $this->setTable('soproducts');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Salesorder', [
            'foreignKey' => 'salesOrder_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Products', [
            'foreignKey' => 'products_id',
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
            ->scalar('sp_shippingMethod')
            ->maxLength('sp_shippingMethod', 45)
            ->allowEmptyString('sp_shippingMethod');

        $validator
            ->scalar('sp_shippingNumber')
            ->maxLength('sp_shippingNumber', 45)
            ->allowEmptyString('sp_shippingNumber');

        $validator
            ->decimal('sp_unitPrice')
            ->notEmptyString('sp_unitPrice');

        $validator
            ->integer('sp_quantity')
            ->notEmptyString('sp_quantity');

        $validator
            ->decimal('sp_tax')
            ->notEmptyString('sp_tax');

        $validator
            ->decimal('sp_subtotal')
            ->notEmptyString('sp_subtotal');

        $validator
            ->scalar('sp_currency')
            ->maxLength('sp_currency', 16)
            ->allowEmptyString('sp_currency');

        $validator
            ->numeric('sp_currencyRate')
            ->allowEmptyString('sp_currencyRate');

        $validator
            ->numeric('sp_discount')
            ->allowEmptyString('sp_discount');

        $validator
            ->decimal('sp_reduceSubtotal')
            ->allowEmptyString('sp_reduceSubtotal');

        $validator
            ->decimal('sp_reductTax')
            ->allowEmptyString('sp_reductTax');

        $validator
            ->integer('sp_qtyDelivered')
            ->notEmptyString('sp_qtyDelivered');

        $validator
            ->integer('sp_qtyInvoiced')
            ->allowEmptyString('sp_qtyInvoiced');

        $validator
            ->integer('sp_salesman')
            ->allowEmptyString('sp_salesman');

        $validator
            ->integer('sp_status')
            ->allowEmptyString('sp_status');

        $validator
            ->scalar('sp_batch')
            ->maxLength('sp_batch', 45)
            ->allowEmptyString('sp_batch');

        $validator
            ->scalar('sp_lot')
            ->maxLength('sp_lot', 45)
            ->allowEmptyString('sp_lot');

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
        $rules->add($rules->existsIn('products_id', 'Products'), ['errorField' => 'products_id']);

        return $rules;
    }
}
