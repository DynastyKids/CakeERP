<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ordercomments Model
 *
 * @property \App\Model\Table\PurchaseorderTable&\Cake\ORM\Association\BelongsTo $Purchaseorder
 * @property \App\Model\Table\SalesorderTable&\Cake\ORM\Association\BelongsTo $Salesorder
 *
 * @method \App\Model\Entity\Ordercomment newEmptyEntity()
 * @method \App\Model\Entity\Ordercomment newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Ordercomment[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ordercomment get($primaryKey, $options = [])
 * @method \App\Model\Entity\Ordercomment findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Ordercomment patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Ordercomment[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ordercomment|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ordercomment saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ordercomment[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Ordercomment[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Ordercomment[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Ordercomment[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class OrdercommentsTable extends Table
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

        $this->setTable('ordercomments');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Purchaseorder', [
            'foreignKey' => 'purchaseOrder_id',
        ]);
        $this->belongsTo('Salesorder', [
            'foreignKey' => 'salesOrder_id',
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
            ->scalar('pc_content')
            ->requirePresence('pc_content', 'create')
            ->notEmptyString('pc_content');

        $validator
            ->integer('pc_userid')
            ->requirePresence('pc_userid', 'create')
            ->notEmptyString('pc_userid');

        $validator
            ->scalar('pc_attachment')
            ->allowEmptyString('pc_attachment');

        $validator
            ->integer('pc_parentId')
            ->allowEmptyString('pc_parentId');

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
        $rules->add($rules->existsIn('salesOrder_id', 'Salesorder'), ['errorField' => 'salesOrder_id']);

        return $rules;
    }
}
