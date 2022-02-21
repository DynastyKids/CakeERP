<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Basecontent Model
 *
 * @method \App\Model\Entity\Basecontent newEmptyEntity()
 * @method \App\Model\Entity\Basecontent newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Basecontent[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Basecontent get($primaryKey, $options = [])
 * @method \App\Model\Entity\Basecontent findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Basecontent patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Basecontent[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Basecontent|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Basecontent saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Basecontent[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Basecontent[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Basecontent[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Basecontent[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class BasecontentTable extends Table
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

        $this->setTable('basecontent');
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
            ->scalar('bc_path')
            ->allowEmptyString('bc_path');

        $validator
            ->scalar('bc_string')
            ->maxLength('bc_string', 128)
            ->allowEmptyString('bc_string');

        $validator
            ->integer('bc_int')
            ->allowEmptyString('bc_int');

        $validator
            ->scalar('bc_details')
            ->allowEmptyString('bc_details');

        return $validator;
    }
}
