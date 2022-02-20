<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Crmorders Model
 *
 * @property \App\Model\Table\CrmhomeTable&\Cake\ORM\Association\BelongsTo $Crmhome
 *
 * @method \App\Model\Entity\Crmorder newEmptyEntity()
 * @method \App\Model\Entity\Crmorder newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Crmorder[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Crmorder get($primaryKey, $options = [])
 * @method \App\Model\Entity\Crmorder findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Crmorder patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Crmorder[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Crmorder|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Crmorder saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Crmorder[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Crmorder[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Crmorder[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Crmorder[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CrmordersTable extends Table
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

        $this->setTable('crmorders');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Crmhome', [
            'foreignKey' => 'crmHome_id',
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
            ->integer('co_productId')
            ->allowEmptyString('co_productId');

        $validator
            ->scalar('co_inventoryCode')
            ->allowEmptyString('co_inventoryCode');

        $validator
            ->integer('co_quantity')
            ->allowEmptyString('co_quantity');

        $validator
            ->scalar('co_sequence')
            ->maxLength('co_sequence', 45)
            ->requirePresence('co_sequence', 'create')
            ->notEmptyString('co_sequence');

        $validator
            ->decimal('co_Taxes')
            ->allowEmptyString('co_Taxes');

        $validator
            ->decimal('co_agreedPrice')
            ->allowEmptyString('co_agreedPrice');

        $validator
            ->notEmptyString('co_optionalFlag');

        $validator
            ->scalar('co_notes')
            ->allowEmptyString('co_notes');

        $validator
            ->scalar('co_subsection')
            ->allowEmptyString('co_subsection');

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
        $rules->add($rules->existsIn('crmHome_id', 'Crmhome'), ['errorField' => 'crmHome_id']);

        return $rules;
    }
}
