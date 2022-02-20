<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Calendarevents Model
 *
 * @property \App\Model\Table\StaffsTable&\Cake\ORM\Association\BelongsTo $Staffs
 *
 * @method \App\Model\Entity\Calendarevent newEmptyEntity()
 * @method \App\Model\Entity\Calendarevent newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Calendarevent[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Calendarevent get($primaryKey, $options = [])
 * @method \App\Model\Entity\Calendarevent findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Calendarevent patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Calendarevent[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Calendarevent|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Calendarevent saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Calendarevent[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Calendarevent[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Calendarevent[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Calendarevent[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CalendareventsTable extends Table
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

        $this->setTable('calendarevents');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Staffs', [
            'foreignKey' => 'staffs_id',
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
            ->scalar('ev_title')
            ->requirePresence('ev_title', 'create')
            ->notEmptyString('ev_title');

        $validator
            ->scalar('ev_detail')
            ->requirePresence('ev_detail', 'create')
            ->notEmptyString('ev_detail');

        $validator
            ->integer('ev_type')
            ->requirePresence('ev_type', 'create')
            ->notEmptyString('ev_type');

        $validator
            ->integer('ev_priority')
            ->notEmptyString('ev_priority');

        $validator
            ->scalar('ev_involvedUsers')
            ->allowEmptyString('ev_involvedUsers');

        $validator
            ->integer('ev_alarmTime')
            ->allowEmptyString('ev_alarmTime');

        $validator
            ->scalar('ev_location')
            ->allowEmptyString('ev_location');

        $validator
            ->integer('ev_eventTime')
            ->allowEmptyString('ev_eventTime');

        $validator
            ->integer('ev_duration')
            ->allowEmptyString('ev_duration');

        $validator
            ->integer('ev_createUser')
            ->allowEmptyString('ev_createUser');

        $validator
            ->integer('ev_createTime')
            ->allowEmptyString('ev_createTime');

        $validator
            ->integer('ev_lastupdateUser')
            ->allowEmptyString('ev_lastupdateUser');

        $validator
            ->integer('ev_lastupdateTime')
            ->allowEmptyString('ev_lastupdateTime');

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
        $rules->add($rules->existsIn('staffs_id', 'Staffs'), ['errorField' => 'staffs_id']);

        return $rules;
    }
}
