<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'first_name'    => 'John',
                'middle_name'   => null,
                'last_name'     => 'Doe',
                'email'         => 'john@example.com',
                'password_hash' => password_hash('password123', PASSWORD_DEFAULT),
                'gender'        => 'Male',
                'phone_number'  => '09123456789',
                'deleted_at'    => null,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'first_name'    => 'Jane',
                'middle_name'   => 'Ann',
                'last_name'     => 'Smith',
                'email'         => 'jane@example.com',
                'password_hash' => password_hash('mypassword', PASSWORD_DEFAULT),
                'gender'        => 'Female',
                'phone_number'  => '09987654321',
                'deleted_at'    => null,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
        ];

        // Insert multiple rows
        $this->db->table('users')->insertBatch($data);
    }
}
