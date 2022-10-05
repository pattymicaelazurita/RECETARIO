<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RecetasFixture
 */
class RecetasFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'titulo' => 'Lorem ipsum dolor sit amet',
                'descripcion' => 'Lorem ipsum dolor sit amet',
                'imagen' => 'Lorem ipsum dolor sit amet',
                'created' => '2022-10-05 12:10:29',
                'modified' => '2022-10-05 12:10:29',
            ],
        ];
        parent::init();
    }
}
