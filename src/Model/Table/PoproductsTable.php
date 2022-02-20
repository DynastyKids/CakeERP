<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Poproducts Model
 *
 * @property \App\Model\Table\PurchaseorderTable&\Cake\ORM\Association\BelongsTo $Purchaseorder
 * @property \App\Model\Table\ProductsTable&\Cake\ORM\Association\BelongsTo $Products
 *
 * @method \App\Model\Entity\Poproduct newEmptyEntity()
 * @method \App\Model\Entity\Poproduct newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Poproduct[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Poproduct get($primaryKey, $options = [])
 * @method \App\Model\Entity\Poproduct findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Poproduct patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Poproduct[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Poproduct|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Poproduct saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Poproduct[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Poproduct[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Poproduct[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Poproduct[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class PoproductsTable extends Table
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

        $this->setTable('poproducts');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Purchaseorder', [
            'foreignKey' => 'purchaseOrder_id',
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
            ->integer('pp_quantity')
            ->notEmptyString('pp_quantity');

        $validator
            ->allowEmptyString('pp_plannedDelivery');

        $validator
            ->integer('pp_productId')
            ->allowEmptyString('pp_productId');

        $validator
            ->decimal('pp_pricepunit')
            ->notEmptyString('pp_pricepunit');

        $validator
            ->decimal('pp_subtotal')
            ->notEmptyString('pp_subtotal');

        $validator
            ->decimal('pp_tax')
            ->notEmptyString('pp_tax');

        $validator
            ->decimal('pp_total')
            ->notEmptyString('pp_total');

        $validator
            ->scalar('pp_currency')
            ->maxLength('pp_currency', 45)
            ->allowEmptyString('pp_currency');

        $validator
            ->numeric('pp_convertRate')
            ->allowEmptyString('pp_convertRate');

        $validator
            ->integer('pp_status')
            ->allowEmptyString('pp_status');

        $validator
            ->integer('pp_createUser')
            ->allowEmptyString('pp_createUser');

        $validator
            ->integer('pp_createDate')
            ->allowEmptyString('pp_createDate');

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
        $rules->add($rules->existsIn('purchaseOrder_id', 'Purchaseorder'), ['errorField' => 'purchaseOrder_id']);
        $rules->add($rules->existsIn('products_id', 'Products'), ['errorField' => 'products_id']);

        return $rules;
    }
}
