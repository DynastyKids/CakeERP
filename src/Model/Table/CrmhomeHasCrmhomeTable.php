<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CrmhomeHasCrmhome Model
 *
 * @property \App\Model\Table\CrmhomeTable&\Cake\ORM\Association\BelongsTo $Crmhome
 *
 * @method \App\Model\Entity\CrmhomeHasCrmhome newEmptyEntity()
 * @method \App\Model\Entity\CrmhomeHasCrmhome newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\CrmhomeHasCrmhome[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CrmhomeHasCrmhome get($primaryKey, $options = [])
 * @method \App\Model\Entity\CrmhomeHasCrmhome findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\CrmhomeHasCrmhome patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CrmhomeHasCrmhome[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\CrmhomeHasCrmhome|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CrmhomeHasCrmhome saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CrmhomeHasCrmhome[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CrmhomeHasCrmhome[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\CrmhomeHasCrmhome[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CrmhomeHasCrmhome[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CrmhomeHasCrmhomeTable extends Table
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

        $this->setTable('crmhome_has_crmhome');
        $this->setDisplayField(['crmHome_id', 'crmHome_id1']);
        $this->setPrimaryKey(['crmHome_id', 'crmHome_id1']);

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
            ->integer('crmHome_id1')
            ->allowEmptyString('crmHome_id1', null, 'create');

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
