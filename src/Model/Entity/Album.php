<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Album Entity
 *
 * @property int $Albumid
 * @property string $Namaalbum
 * @property string $Deskripsi
 * @property \Cake\I18n\Date $tglmembuat
 * @property int $usersUserid
 */
class Album extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'Namaalbum' => true,
        'Deskripsi' => true,
        'tglmembuat' => true,
        'usersUserid' => true,
    ];
}
