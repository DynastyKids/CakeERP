<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Socomments Model
 *
 * @property \App\Model\Table\SalesorderTable&\Cake\ORM\Association\BelongsTo $Salesorder
 *
 * @method \App\Model\Entity\Socomment newEmptyEntity()
 * @method \App\Model\Entity\Socomment newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Socomment[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Socomment get($primaryKey, $options = [])
 * @method \App\Model\Entity\Socomment findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Socomment patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Socomment[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Socomment|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Socomment saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Socomment[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Socomment[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Socomment[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Socomment[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class SocommentsTable extends Table
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

        $this->setTable('socomments');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Salesorder', [
            'foreignKey' => 'salesOrder_id',
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
            ->scalar('sc_content')
            ->requirePresence('sc_content', 'create')
            ->notEmptyString('sc_content');

        $validator
            ->integer('sc_userid')
            ->requirePresence('sc_userid', 'create')
            ->notEmptyString('sc_userid');

        $validator
            ->scalar('sc_attachment')
            ->allowEmptyString('sc_attachment');

        $validator
            ->integer('sc_parentId')
            ->allowEmptyString('sc_parentId');

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
        $rules->add($rules->existsIn('salesOrder_id', 'Salesorder'), ['errorField' => 'salesOrder_id']);

        return $rules;
    }
}
