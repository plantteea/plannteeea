<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AlbumFixture
 */
class AlbumFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'album';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'Albumid' => 1,
                'Namaalbum' => 'Lorem ipsum dolor sit amet',
                'Deskripsi' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'tglmembuat' => '2024-04-23',
                'usersUserid' => 1,
            ],
        ];
        parent::init();
    }
}
