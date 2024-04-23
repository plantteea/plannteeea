<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PhotoFixture
 */
class PhotoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'photo';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'fotoid' => 1,
                'Judulfoto' => 'Lorem ipsum dolor sit amet',
                'Deskripsifoto' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'Tglupload' => '2024-04-23',
                'lokfile' => 'Lorem ipsum dolor sit amet',
                'usersUserid' => 1,
                'albumAlbumid' => 1,
            ],
        ];
        parent::init();
    }
}
