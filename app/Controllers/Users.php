<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        $users = [
            [
                'username' => 'Hicent',
                'full_name' => 'Donald L. Patterson',
                'role' => 'Administrator',
            ],
            [
                'username' => 'Viss2000',
                'full_name' => 'Holly B. Rodriguez',
                'role' => 'Cashier',
            ],
            [
                'username' => 'Caved1970',
                'full_name' => 'Molly B. Bowers',
                'role' => 'Manager',
            ],
            [
                'username' => 'Evelien',
                'full_name' => 'Samuel F. Taylor',
                'role' => 'Cashier',
            ],
            [
                'username' => 'Thear1971',
                'full_name' => 'Kassandra K. Chandler',
                'role' => 'Staff',
            ]
        ];

        $data = ['title' => 'User Accounts', 'pageTitle' => 'User Accounts', 'users' => $users];

        return view('user/index', $data);
    }
}
