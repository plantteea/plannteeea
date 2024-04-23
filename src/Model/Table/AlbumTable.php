<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Album Model
 *
 * @method \App\Model\Entity\Album newEmptyEntity()
 * @method \App\Model\Entity\Album newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Album> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Album get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Album findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Album patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Album> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Album|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Album saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Album>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Album>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Album>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Album> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Album>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Album>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Album>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Album> deleteManyOrFail(iterable $entities, array $options = [])
 */
class AlbumTable extends Table
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

        $this->setTable('album');
        $this->setDisplayField('Namaalbum');
        $this->setPrimaryKey('Albumid');
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
            ->scalar('Namaalbum')
            ->maxLength('Namaalbum', 50)
            ->requirePresence('Namaalbum', 'create')
            ->notEmptyString('Namaalbum');

        $validator
            ->scalar('Deskripsi')
            ->requirePresence('Deskripsi', 'create')
            ->notEmptyString('Deskripsi');

        $validator
            ->date('tglmembuat')
            ->requirePresence('tglmembuat', 'create')
            ->notEmptyDate('tglmembuat');

        $validator
            ->integer('usersUserid')
            ->requirePresence('usersUserid', 'create')
            ->notEmptyString('usersUserid');

        return $validator;
    }
}
