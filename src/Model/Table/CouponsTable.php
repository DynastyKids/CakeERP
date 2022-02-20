<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Coupons Model
 *
 * @property \App\Model\Table\SalesorderTable&\Cake\ORM\Association\HasMany $Salesorder
 *
 * @method \App\Model\Entity\Coupon newEmptyEntity()
 * @method \App\Model\Entity\Coupon newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Coupon[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Coupon get($primaryKey, $options = [])
 * @method \App\Model\Entity\Coupon findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Coupon patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Coupon[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Coupon|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Coupon saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Coupon[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Coupon[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Coupon[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Coupon[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CouponsTable extends Table
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

        $this->setTable('coupons');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Salesorder', [
            'foreignKey' => 'coupon_id',
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
            ->scalar('cp_code')
            ->maxLength('cp_code', 64)
            ->requirePresence('cp_code', 'create')
            ->notEmptyString('cp_code');

        $validator
            ->requirePresence('cp_startTime', 'create')
            ->notEmptyString('cp_startTime');

        $validator
            ->requirePresence('cp_endTime', 'create')
            ->notEmptyString('cp_endTime');

        $validator
            ->numeric('cp_deducepercent')
            ->allowEmptyString('cp_deducepercent');

        $validator
            ->numeric('cp_deduceamount')
            ->allowEmptyString('cp_deduceamount');

        $validator
            ->integer('cp_newuser')
            ->notEmptyString('cp_newuser');

        $validator
            ->scalar('cp_applyprod')
            ->allowEmptyString('cp_applyprod');

        $validator
            ->decimal('cp_amount')
            ->notEmptyString('cp_amount');

        return $validator;
    }
}
