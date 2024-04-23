<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Authentication\PasswordHasher\DefaultPasswordHasher; // Add this line
use Cake\ORM\Entity;


/**
 * User Entity
 *
 * @property int $Userid
 * @property string $Username
 * @property string $Namalengkap
 * @property string $Email
 * @property string $Password
 * @property string $Alamat
 */
class User extends Entity
{


    protected function _setPassword(string $password) : ?string
    {
        if (strlen($password) > 0) {
            return (new DefaultPasswordHasher())->hash($password);
        }
    }
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
        'Username' => true,
        'Namalengkap' => true,
        'Email' => true,
        'Password' => true,
        'Alamat' => true,
    ];
}
