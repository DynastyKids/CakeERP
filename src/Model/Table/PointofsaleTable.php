<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pointofsale Model
 *
 * @property \App\Model\Table\PosProductsTable&\Cake\ORM\Association\HasMany $PosProducts
 *
 * @method \App\Model\Entity\Pointofsale newEmptyEntity()
 * @method \App\Model\Entity\Pointofsale newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Pointofsale[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pointofsale get($primaryKey, $options = [])
 * @method \App\Model\Entity\Pointofsale findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Pointofsale patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Pointofsale[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pointofsale|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pointofsale saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pointofsale[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pointofsale[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pointofsale[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pointofsale[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class PointofsaleTable extends Table
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

        $this->setTable('pointofsale');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('PosProducts', [
            'foreignKey' => 'pointofsale_id',
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
            ->integer('pos_userid')
            ->requirePresence('pos_userid', 'create')
            ->notEmptyString('pos_userid');

        $validator
            ->requirePresence('pos_opentime', 'create')
            ->notEmptyString('pos_opentime');

        $validator
            ->allowEmptyString('pos_endtime');

        $validator
            ->decimal('pos_openamount')
            ->requirePresence('pos_openamount', 'create')
            ->notEmptyString('pos_openamount');

        $validator
            ->decimal('pos_sessionAmount')
            ->requirePresence('pos_sessionAmount', 'create')
            ->notEmptyString('pos_sessionAmount');

        $validator
            ->decimal('pos_endamount')
            ->allowEmptyString('pos_endamount');

        return $validator;
    }
}
