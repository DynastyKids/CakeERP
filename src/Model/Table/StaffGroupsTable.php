<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * StaffGroups Model
 *
 * @method \App\Model\Entity\StaffGroup newEmptyEntity()
 * @method \App\Model\Entity\StaffGroup newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\StaffGroup[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\StaffGroup get($primaryKey, $options = [])
 * @method \App\Model\Entity\StaffGroup findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\StaffGroup patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\StaffGroup[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\StaffGroup|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\StaffGroup saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\StaffGroup[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\StaffGroup[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\StaffGroup[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\StaffGroup[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class StaffGroupsTable extends Table
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

        $this->setTable('staff_groups');
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
            ->scalar('sg_name')
            ->requirePresence('sg_name', 'create')
            ->notEmptyString('sg_name');

        $validator
            ->scalar('sg_applyBranch')
            ->allowEmptyString('sg_applyBranch');

        $validator
            ->scalar('staff_groupscol')
            ->maxLength('staff_groupscol', 45)
            ->allowEmptyString('staff_groupscol');

        return $validator;
    }
}
