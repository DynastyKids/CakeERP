<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Products Model
 *
 * @method \App\Model\Entity\Product newEmptyEntity()
 * @method \App\Model\Entity\Product newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Product[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Product get($primaryKey, $options = [])
 * @method \App\Model\Entity\Product findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Product patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Product[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Product|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Product saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Product[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Product[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Product[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Product[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ProductsTable extends Table
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

        $this->setTable('products');
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
            ->scalar('p_sku')
            ->requirePresence('p_sku', 'create')
            ->notEmptyString('p_sku');

        $validator
            ->scalar('p_barcode')
            ->maxLength('p_barcode', 64)
            ->allowEmptyString('p_barcode');

        $validator
            ->scalar('p_group')
            ->maxLength('p_group', 45)
            ->allowEmptyString('p_group');

        $validator
            ->scalar('p_promoGroup')
            ->allowEmptyString('p_promoGroup');

        $validator
            ->decimal('p_onlinePrice')
            ->notEmptyString('p_onlinePrice');

        $validator
            ->decimal('p_retailPrice')
            ->notEmptyString('p_retailPrice');

        $validator
            ->decimal('p_cubic_long')
            ->notEmptyString('p_cubic_long');

        $validator
            ->decimal('p_cubit_width')
            ->notEmptyString('p_cubit_width');

        $validator
            ->decimal('p_cubic_height')
            ->notEmptyString('p_cubic_height');

        $validator
            ->integer('p_publish')
            ->notEmptyString('p_publish');

        $validator
            ->integer('p_hide')
            ->notEmptyString('p_hide');

        $validator
            ->integer('p_totalquantity')
            ->notEmptyString('p_totalquantity');

        return $validator;
    }
}
