<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BranchesHasProducts Model
 *
 * @property \App\Model\Table\BranchesTable&\Cake\ORM\Association\BelongsTo $Branches
 * @property \App\Model\Table\ProductsTable&\Cake\ORM\Association\BelongsTo $Products
 *
 * @method \App\Model\Entity\BranchesHasProduct newEmptyEntity()
 * @method \App\Model\Entity\BranchesHasProduct newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\BranchesHasProduct[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\BranchesHasProduct get($primaryKey, $options = [])
 * @method \App\Model\Entity\BranchesHasProduct findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\BranchesHasProduct patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\BranchesHasProduct[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\BranchesHasProduct|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BranchesHasProduct saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BranchesHasProduct[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\BranchesHasProduct[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\BranchesHasProduct[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\BranchesHasProduct[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class BranchesHasProductsTable extends Table
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

        $this->setTable('branches_has_products');
        $this->setDisplayField(['Branches_id', 'products_id']);
        $this->setPrimaryKey(['Branches_id', 'products_id']);

        $this->belongsTo('Branches', [
            'foreignKey' => 'Branches_id',
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
            ->integer('quantity')
            ->requirePresence('quantity', 'create')
            ->notEmptyString('quantity');

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
        $rules->add($rules->existsIn('Branches_id', 'Branches'), ['errorField' => 'Branches_id']);
        $rules->add($rules->existsIn('products_id', 'Products'), ['errorField' => 'products_id']);

        return $rules;
    }
}
