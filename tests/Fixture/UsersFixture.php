<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
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
                'email' => 'Lorem ipsum dolor sit amet',
                'phone_number' => 'Lorem ipsum dolor sit amet',
                'country_code' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
<<<<<<< HEAD
                'created' => '2022-10-10 18:14:52',
                'modified' => '2022-10-10 18:14:52',
=======
                'created' => '2022-10-13 14:55:09',
                'modified' => '2022-10-13 14:55:09',
>>>>>>> develop
            ],
        ];
        parent::init();
    }
}
