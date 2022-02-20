<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Staffs Model
 *
 * @property \App\Model\Table\StaffGroupsTable&\Cake\ORM\Association\BelongsTo $StaffGroups
 *
 * @method \App\Model\Entity\Staff newEmptyEntity()
 * @method \App\Model\Entity\Staff newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Staff[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Staff get($primaryKey, $options = [])
 * @method \App\Model\Entity\Staff findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Staff patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Staff[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Staff|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Staff saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Staff[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Staff[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Staff[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Staff[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class StaffsTable extends Table
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

        $this->setTable('staffs');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('StaffGroups', [
            'foreignKey' => 'staff_groups_id',
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
            ->scalar('sf_Firstname')
            ->requirePresence('sf_Firstname', 'create')
            ->notEmptyString('sf_Firstname');

        $validator
            ->scalar('sf_Lastname')
            ->requirePresence('sf_Lastname', 'create')
            ->notEmptyString('sf_Lastname');

        $validator
            ->scalar('sf_address')
            ->requirePresence('sf_address', 'create')
            ->notEmptyString('sf_address');

        $validator
            ->scalar('sf_email')
            ->maxLength('sf_email', 45)
            ->requirePresence('sf_email', 'create')
            ->notEmptyString('sf_email');

        $validator
            ->scalar('sf_password')
            ->maxLength('sf_password', 45)
            ->requirePresence('sf_password', 'create')
            ->notEmptyString('sf_password');

        $validator
            ->requirePresence('sf_createTime', 'create')
            ->notEmptyString('sf_createTime');

        $validator
            ->allowEmptyString('sf_lastLogin');

        $validator
            ->scalar('sf_role')
            ->maxLength('sf_role', 64)
            ->allowEmptyString('sf_role');

        $validator
            ->scalar('sf_phone')
            ->maxLength('sf_phone', 16)
            ->allowEmptyString('sf_phone');

        $validator
            ->scalar('sf_mobile')
            ->maxLength('sf_mobile', 16)
            ->allowEmptyString('sf_mobile');

        $validator
            ->scalar('sf_jobTitle')
            ->requirePresence('sf_jobTitle', 'create')
            ->notEmptyString('sf_jobTitle');

        $validator
            ->scalar('sf_website')
            ->allowEmptyString('sf_website');

        $validator
            ->scalar('sf_taxID')
            ->maxLength('sf_taxID', 64)
            ->allowEmptyString('sf_taxID');

        $validator
            ->scalar('sf_tags')
            ->allowEmptyString('sf_tags');

        $validator
            ->scalar('sf_token')
            ->maxLength('sf_token', 64)
            ->allowEmptyString('sf_token');

        $validator
            ->scalar('sf_authkey')
            ->maxLength('sf_authkey', 64)
            ->allowEmptyString('sf_authkey');

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
        $rules->add($rules->existsIn('staff_groups_id', 'StaffGroups'), ['errorField' => 'staff_groups_id']);

        return $rules;
    }
}
