<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'         => '1',
                'title'      => 'user_management_access',
                'created_at' => '2019-09-19 12:14:15',
                'updated_at' => '2019-09-19 12:14:15',
            ],
            [
                'id'         => '2',
                'title'      => 'permission_create',
                'created_at' => '2019-09-19 12:14:15',
                'updated_at' => '2019-09-19 12:14:15',
            ],
            [
                'id'         => '3',
                'title'      => 'permission_edit',
                'created_at' => '2019-09-19 12:14:15',
                'updated_at' => '2019-09-19 12:14:15',
            ],
            [
                'id'         => '4',
                'title'      => 'permission_show',
                'created_at' => '2019-09-19 12:14:15',
                'updated_at' => '2019-09-19 12:14:15',
            ],
            [
                'id'         => '5',
                'title'      => 'permission_delete',
                'created_at' => '2019-09-19 12:14:15',
                'updated_at' => '2019-09-19 12:14:15',
            ],
            [
                'id'         => '6',
                'title'      => 'permission_access',
                'created_at' => '2019-09-19 12:14:15',
                'updated_at' => '2019-09-19 12:14:15',
            ],
            [
                'id'         => '7',
                'title'      => 'role_create',
                'created_at' => '2019-09-19 12:14:15',
                'updated_at' => '2019-09-19 12:14:15',
            ],
            [
                'id'         => '8',
                'title'      => 'role_edit',
                'created_at' => '2019-09-19 12:14:15',
                'updated_at' => '2019-09-19 12:14:15',
            ],
            [
                'id'         => '9',
                'title'      => 'role_show',
                'created_at' => '2019-09-19 12:14:15',
                'updated_at' => '2019-09-19 12:14:15',
            ],
            [
                'id'         => '10',
                'title'      => 'role_delete',
                'created_at' => '2019-09-19 12:14:15',
                'updated_at' => '2019-09-19 12:14:15',
            ],
            [
                'id'         => '11',
                'title'      => 'role_access',
                'created_at' => '2019-09-19 12:14:15',
                'updated_at' => '2019-09-19 12:14:15',
            ],
            [
                'id'         => '12',
                'title'      => 'user_create',
                'created_at' => '2019-09-19 12:14:15',
                'updated_at' => '2019-09-19 12:14:15',
            ],
            [
                'id'         => '13',
                'title'      => 'user_edit',
                'created_at' => '2019-09-19 12:14:15',
                'updated_at' => '2019-09-19 12:14:15',
            ],
            [
                'id'         => '14',
                'title'      => 'user_show',
                'created_at' => '2019-09-19 12:14:15',
                'updated_at' => '2019-09-19 12:14:15',
            ],
            [
                'id'         => '15',
                'title'      => 'user_delete',
                'created_at' => '2019-09-19 12:14:15',
                'updated_at' => '2019-09-19 12:14:15',
            ],
            [
                'id'         => '16',
                'title'      => 'user_access',
                'created_at' => '2019-09-19 12:14:15',
                'updated_at' => '2019-09-19 12:14:15',
            ],
            [
                'id'         => '17',
                'title'      => 'room_create',
                'created_at' => '2019-09-19 12:14:15',
                'updated_at' => '2019-09-19 12:14:15',
            ],
            [
                'id'         => '18',
                'title'      => 'room_edit',
                'created_at' => '2019-09-19 12:14:15',
                'updated_at' => '2019-09-19 12:14:15',
            ],
            [
                'id'         => '19',
                'title'      => 'room_show',
                'created_at' => '2019-09-19 12:14:15',
                'updated_at' => '2019-09-19 12:14:15',
            ],
            [
                'id'         => '20',
                'title'      => 'room_delete',
                'created_at' => '2019-09-19 12:14:15',
                'updated_at' => '2019-09-19 12:14:15',
            ],
            [
                'id'         => '21',
                'title'      => 'room_access',
                'created_at' => '2019-09-19 12:14:15',
                'updated_at' => '2019-09-19 12:14:15',
            ],
            [
                'id'         => '22',
                'title'      => 'book_history_create',
                'created_at' => '2019-09-19 12:14:15',
                'updated_at' => '2019-09-19 12:14:15',
            ],
            [
                'id'         => '23',
                'title'      => 'book_history_edit',
                'created_at' => '2019-09-19 12:14:15',
                'updated_at' => '2019-09-19 12:14:15',
            ],
            [
                'id'         => '24',
                'title'      => 'book_history_show',
                'created_at' => '2019-09-19 12:14:15',
                'updated_at' => '2019-09-19 12:14:15',
            ],
            [
                'id'         => '25',
                'title'      => 'book_history_delete',
                'created_at' => '2019-09-19 12:14:15',
                'updated_at' => '2019-09-19 12:14:15',
            ],
            [
                'id'         => '26',
                'title'      => 'book_history_access',
                'created_at' => '2019-09-19 12:14:15',
                'updated_at' => '2019-09-19 12:14:15',
            ],
            [
                'id'         => '27',
                'title'      => 'check_in_create',
                'created_at' => '2019-09-19 12:14:15',
                'updated_at' => '2019-09-19 12:14:15',
            ],
            [
                'id'         => '28',
                'title'      => 'check_in_edit',
                'created_at' => '2019-09-19 12:14:15',
                'updated_at' => '2019-09-19 12:14:15',
            ],
            [
                'id'         => '29',
                'title'      => 'check_in_show',
                'created_at' => '2019-09-19 12:14:15',
                'updated_at' => '2019-09-19 12:14:15',
            ],
            [
                'id'         => '30',
                'title'      => 'check_in_delete',
                'created_at' => '2019-09-19 12:14:15',
                'updated_at' => '2019-09-19 12:14:15',
            ],
            [
                'id'         => '31',
                'title'      => 'check_in_access',
                'created_at' => '2019-09-19 12:14:15',
                'updated_at' => '2019-09-19 12:14:15',
            ],
            [
                'id'         => '32',
                'title'      => 'appointment_create',
                'created_at' => '2019-09-19 12:14:15',
                'updated_at' => '2019-09-19 12:14:15',
            ],
            [
                'id'         => '33',
                'title'      => 'appointment_edit',
                'created_at' => '2019-09-19 12:14:15',
                'updated_at' => '2019-09-19 12:14:15',
            ],
            [
                'id'         => '34',
                'title'      => 'appointment_show',
                'created_at' => '2019-09-19 12:14:15',
                'updated_at' => '2019-09-19 12:14:15',
            ],
            [
                'id'         => '35',
                'title'      => 'appointment_delete',
                'created_at' => '2019-09-19 12:14:15',
                'updated_at' => '2019-09-19 12:14:15',
            ],
            [
                'id'         => '36',
                'title'      => 'appointment_access',
                'created_at' => '2019-09-19 12:14:15',
                'updated_at' => '2019-09-19 12:14:15',
            ],
        ];

        Permission::insert($permissions);
    }
}
