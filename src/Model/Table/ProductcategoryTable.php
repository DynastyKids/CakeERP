<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Productcategory Model
 *
 * @method \App\Model\Entity\Productcategory newEmptyEntity()
 * @method \App\Model\Entity\Productcategory newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Productcategory[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Productcategory get($primaryKey, $options = [])
 * @method \App\Model\Entity\Productcategory findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Productcategory patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Productcategory[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Productcategory|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Productcategory saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Productcategory[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Productcategory[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Productcategory[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Productcategory[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ProductcategoryTable extends Table
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

        $this->setTable('productcategory');
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
            ->scalar('pc_name')
            ->maxLength('pc_name', 255)
            ->allowEmptyString('pc_name');

        $validator
            ->scalar('pc_describe')
            ->allowEmptyString('pc_describe');

        $validator
            ->notEmptyString('pc_available');

        return $validator;
    }
}
