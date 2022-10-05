<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RecetasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RecetasTable Test Case
 */
class RecetasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RecetasTable
     */
    protected $Recetas;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Recetas',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Recetas') ? [] : ['className' => RecetasTable::class];
        $this->Recetas = $this->getTableLocator()->get('Recetas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Recetas);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\RecetasTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
