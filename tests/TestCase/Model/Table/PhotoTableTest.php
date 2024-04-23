<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PhotoTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PhotoTable Test Case
 */
class PhotoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PhotoTable
     */
    protected $Photo;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Photo',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Photo') ? [] : ['className' => PhotoTable::class];
        $this->Photo = $this->getTableLocator()->get('Photo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Photo);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PhotoTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
