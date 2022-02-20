<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CrmhomeHasCrmtag Model
 *
 * @property \App\Model\Table\CrmhomeTable&\Cake\ORM\Association\BelongsTo $Crmhome
 * @property \App\Model\Table\CrmtagTable&\Cake\ORM\Association\BelongsTo $Crmtag
 *
 * @method \App\Model\Entity\CrmhomeHasCrmtag newEmptyEntity()
 * @method \App\Model\Entity\CrmhomeHasCrmtag newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\CrmhomeHasCrmtag[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CrmhomeHasCrmtag get($primaryKey, $options = [])
 * @method \App\Model\Entity\CrmhomeHasCrmtag findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\CrmhomeHasCrmtag patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CrmhomeHasCrmtag[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\CrmhomeHasCrmtag|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CrmhomeHasCrmtag saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CrmhomeHasCrmtag[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CrmhomeHasCrmtag[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\CrmhomeHasCrmtag[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CrmhomeHasCrmtag[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CrmhomeHasCrmtagTable extends Table
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

        $this->setTable('crmhome_has_crmtag');
        $this->setDisplayField(['crmHome_id', 'crmTag_id']);
        $this->setPrimaryKey(['crmHome_id', 'crmTag_id']);

        $this->belongsTo('Crmhome', [
            'foreignKey' => 'crmHome_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Crmtag', [
            'foreignKey' => 'crmTag_id',
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
        $rules->add($rules->existsIn('crmHome_id', 'Crmhome'), ['errorField' => 'crmHome_id']);
        $rules->add($rules->existsIn('crmTag_id', 'Crmtag'), ['errorField' => 'crmTag_id']);

        return $rules;
    }
}
