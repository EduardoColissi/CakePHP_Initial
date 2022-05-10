<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CatsArtigosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CatsArtigosTable Test Case
 */
class CatsArtigosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CatsArtigosTable
     */
    public $CatsArtigos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.CatsArtigos',
        'app.Artigos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('CatsArtigos') ? [] : ['className' => CatsArtigosTable::class];
        $this->CatsArtigos = TableRegistry::getTableLocator()->get('CatsArtigos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CatsArtigos);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
