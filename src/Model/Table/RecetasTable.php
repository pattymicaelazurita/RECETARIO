<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Recetas Model
 *
 * @method \App\Model\Entity\Receta newEmptyEntity()
 * @method \App\Model\Entity\Receta newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Receta[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Receta get($primaryKey, $options = [])
 * @method \App\Model\Entity\Receta findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Receta patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Receta[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Receta|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Receta saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Receta[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Receta[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Receta[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Receta[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RecetasTable extends Table
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

        $this->setTable('recetas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->scalar('titulo')
            ->maxLength('titulo', 255)
            ->requirePresence('titulo', 'create')
            ->notEmptyString('titulo');

        $validator
            ->scalar('descripcion')
            ->maxLength('descripcion', 255)
            ->requirePresence('descripcion', 'create')
            ->notEmptyString('descripcion');

        $validator
            ->scalar('imagen')
            ->maxLength('imagen', 255)
            ->requirePresence('imagen', 'create')
            ->notEmptyFile('imagen');

        return $validator;
    }
}
