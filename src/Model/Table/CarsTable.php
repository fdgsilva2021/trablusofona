<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cars Model
 *
 * @method \App\Model\Entity\Car newEmptyEntity()
 * @method \App\Model\Entity\Car newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Car[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Car get($primaryKey, $options = [])
 * @method \App\Model\Entity\Car findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Car patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Car[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Car|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Car saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Car[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Car[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Car[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Car[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CarsTable extends Table
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

        $this->setTable('cars');
        
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
            ->scalar('marca')
            ->maxLength('marca', 20)
            ->requirePresence('marca', 'create')
            ->notEmptyString('marca');

        $validator
            ->scalar('matricula')
            ->maxLength('matricula', 6)
            ->requirePresence('matricula', 'create')
            ->notEmptyString('matricula');

        $validator
            ->scalar('cor')
            ->maxLength('cor', 20)
            ->requirePresence('cor', 'create')
            ->notEmptyString('cor');

        return $validator;
    }
}
