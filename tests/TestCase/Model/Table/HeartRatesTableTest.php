<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HeartRatesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HeartRatesTable Test Case
 */
class HeartRatesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\HeartRatesTable
     */
    public $HeartRates;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.heart_rates',
        'app.profiles',
        'app.hrzones',
        'app.activities'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('HeartRates') ? [] : ['className' => 'App\Model\Table\HeartRatesTable'];
        $this->HeartRates = TableRegistry::get('HeartRates', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->HeartRates);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
