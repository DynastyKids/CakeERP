<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BranchesHasStaffs Model
 *
 * @property \App\Model\Table\BranchesTable&\Cake\ORM\Association\BelongsTo $Branches
 * @property \App\Model\Table\StaffsTable&\Cake\ORM\Association\BelongsTo $Staffs
 *
 * @method \App\Model\Entity\BranchesHasStaff newEmptyEntity()
 * @method \App\Model\Entity\BranchesHasStaff newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\BranchesHasStaff[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\BranchesHasStaff get($primaryKey, $options = [])
 * @method \App\Model\Entity\BranchesHasStaff findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\BranchesHasStaff patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\BranchesHasStaff[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\BranchesHasStaff|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BranchesHasStaff saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BranchesHasStaff[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\BranchesHasStaff[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\BranchesHasStaff[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\BranchesHasStaff[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class BranchesHasStaffsTable extends Table
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

        $this->setTable('branches_has_staffs');
        $this->setDisplayField(['Branches_id', 'staffs_id']);
        $this->setPrimaryKey(['Branches_id', 'staffs_id']);

        $this->belongsTo('Branches', [
            'foreignKey' => 'Branches_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Staffs', [
            'foreignKey' => 'staffs_id',
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
        $rules->add($rules->existsIn('Branches_id', 'Branches'), ['errorField' => 'Branches_id']);
        $rules->add($rules->existsIn('staffs_id', 'Staffs'), ['errorField' => 'staffs_id']);

        return $rules;
    }
}
