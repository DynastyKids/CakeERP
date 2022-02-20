<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ProductsHasProductcategory Model
 *
 * @property \App\Model\Table\ProductsTable&\Cake\ORM\Association\BelongsTo $Products
 * @property \App\Model\Table\ProductcategoryTable&\Cake\ORM\Association\BelongsTo $Productcategory
 *
 * @method \App\Model\Entity\ProductsHasProductcategory newEmptyEntity()
 * @method \App\Model\Entity\ProductsHasProductcategory newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ProductsHasProductcategory[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ProductsHasProductcategory get($primaryKey, $options = [])
 * @method \App\Model\Entity\ProductsHasProductcategory findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ProductsHasProductcategory patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ProductsHasProductcategory[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ProductsHasProductcategory|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProductsHasProductcategory saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProductsHasProductcategory[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ProductsHasProductcategory[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ProductsHasProductcategory[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ProductsHasProductcategory[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ProductsHasProductcategoryTable extends Table
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

        $this->setTable('products_has_productcategory');
        $this->setDisplayField(['products_id', 'productCategory_id']);
        $this->setPrimaryKey(['products_id', 'productCategory_id']);

        $this->belongsTo('Products', [
            'foreignKey' => 'products_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Productcategory', [
            'foreignKey' => 'productCategory_id',
            'joinType' => 'INNER',
        ]);
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
        $rules->add($rules->existsIn('products_id', 'Products'), ['errorField' => 'products_id']);
        $rules->add($rules->existsIn('productCategory_id', 'Productcategory'), ['errorField' => 'productCategory_id']);

        return $rules;
    }
}
