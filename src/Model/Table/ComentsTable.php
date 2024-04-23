<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Coments Model
 *
 * @method \App\Model\Entity\Coment newEmptyEntity()
 * @method \App\Model\Entity\Coment newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Coment> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Coment get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Coment findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Coment patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Coment> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Coment|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Coment saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Coment>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Coment>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Coment>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Coment> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Coment>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Coment>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Coment>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Coment> deleteManyOrFail(iterable $entities, array $options = [])
 */
class ComentsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('coments');
        $this->setDisplayField('Komentarid');
        $this->setPrimaryKey('Komentarid');
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
            ->scalar('Isikomentar')
            ->requirePresence('Isikomentar', 'create')
            ->notEmptyString('Isikomentar');

        $validator
            ->date('Tanggalkomentar')
            ->requirePresence('Tanggalkomentar', 'create')
            ->notEmptyDate('Tanggalkomentar');

        $validator
            ->integer('usersUserid')
            ->requirePresence('usersUserid', 'create')
            ->notEmptyString('usersUserid');

        $validator
            ->integer('photofotoid')
            ->requirePresence('photofotoid', 'create')
            ->notEmptyString('photofotoid');

        return $validator;
    }
}
