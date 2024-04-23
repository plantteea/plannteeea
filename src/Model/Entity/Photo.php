<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Photo Entity
 *
 * @property int $fotoid
 * @property string $Judulfoto
 * @property string $Deskripsifoto
 * @property \Cake\I18n\Date $Tglupload
 * @property string $lokfile
 * @property int $usersUserid
 * @property int $albumAlbumid
 */
class Photo extends Entity
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
        'Judulfoto' => true,
        'Deskripsifoto' => true,
        'Tglupload' => true,
        'photo' => true,
        'lokfile' => true,
        'usersUserid' => true,
        'albumAlbumid' => true,
    ];
}
