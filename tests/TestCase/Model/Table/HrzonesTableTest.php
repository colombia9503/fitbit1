<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HrzonesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HrzonesTable Test Case
 */
class HrzonesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\HrzonesTable
     */
    public $Hrzones;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.hrzones'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Hrzones') ? [] : ['className' => 'App\Model\Table\HrzonesTable'];
        $this->Hrzones = TableRegistry::get('Hrzones', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Hrzones);

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
