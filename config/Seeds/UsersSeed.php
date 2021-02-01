<?php
declare(strict_types=1);

use Authentication\PasswordHasher\DefaultPasswordHasher;
use Migrations\AbstractSeed;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $hash = new DefaultPasswordHasher();

        $data = [
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@admin.com',
            'password' => $hash->hash('123'),
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
