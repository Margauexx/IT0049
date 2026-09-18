<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index(): string
    {
       $customers = [
        [
            'full_name' => 'Lucille J. West',
            'email' => 'LucilleJWest@dayrep.com',
            'phone' => '704-996-9504',
        ],
         [
            'full_name' => 'Edward M. Roden',
            'email' => 'EdwardMRoden@jourrapide.com',
            'phone' => '585-762-3103',
        ],
         [
            'full_name' => 'James R. Ledbetter',
            'email' => 'JamesRLedbetter@teleworm.us',
            'phone' => '636-597-2535',
        ],
         [
            'full_name' => 'Christoper E. Browne',
            'email' => 'ChristoperEBrowne@armyspy.com',
            'phone' => '917-281-0570',
        ],
         [
            'full_name' => 'Janet K. Rankin',
            'email' => 'JanetKRankin@dayrep.com',
            'phone' => '815-372-8816',
        ]
       ];

       $data = ['title' => 'Customer Accounts', 'pageTitle'=> 'Customer Accounts', 'customers'=> $customers];

       return view('customer/index', $data);
    }
}
