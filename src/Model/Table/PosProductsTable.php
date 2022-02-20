<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PosProducts Model
 *
 * @property \App\Model\Table\PointofsaleTable&\Cake\ORM\Association\BelongsTo $Pointofsale
 * @property \App\Model\Table\ProductsTable&\Cake\ORM\Association\BelongsTo $Products
 *
 * @method \App\Model\Entity\PosProduct newEmptyEntity()
 * @method \App\Model\Entity\PosProduct newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\PosProduct[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PosProduct get($primaryKey, $options = [])
 * @method \App\Model\Entity\PosProduct findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\PosProduct patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PosProduct[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\PosProduct|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PosProduct saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PosProduct[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\PosProduct[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\PosProduct[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\PosProduct[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class PosProductsTable extends Table
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

        $this->setTable('pos_products');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Pointofsale', [
            'foreignKey' => 'pointofsale_id',
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
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('pos_email')
            ->maxLength('pos_email', 128)
            ->allowEmptyString('pos_email');

        $validator
            ->scalar('pos_mobile')
            ->maxLength('pos_mobile', 45)
            ->allowEmptyString('pos_mobile');

        $validator
            ->decimal('pos_unitPrice')
            ->requirePresence('pos_unitPrice', 'create')
            ->notEmptyString('pos_unitPrice');

        $validator
            ->integer('pos_discountRate')
            ->notEmptyString('pos_discountRate');

        $validator
            ->decimal('pos_discountAmount')
            ->notEmptyString('pos_discountAmount');

        $validator
            ->integer('pos_count')
            ->notEmptyString('pos_count');

        $validator
            ->decimal('pos_actualPrice')
            ->notEmptyString('pos_actualPrice');

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
        $rules->add($rules->existsIn('pointofsale_id', 'Pointofsale'), ['errorField' => 'pointofsale_id']);
        $rules->add($rules->existsIn('products_id', 'Products'), ['errorField' => 'products_id']);

        return $rules;
    }
}
