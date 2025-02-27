<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrmController extends Controller
{
    public function dashboard()
    {
        return view('crm.dashboard');
    }

    public function customers()
    {
        $customers = collect([
            (object)[
                'id' => 1,
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'phone' => '09171234567',
                'type' => 'Listener'
            ],
            (object)[
                'id' => 2,
                'name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'phone' => '09181234567',
                'type' => 'Publisher'
            ],
            (object)[
                'id' => 3,
                'name' => 'Michael Johnson',
                'email' => 'michael@example.com',
                'phone' => '09191234567',
                'type' => 'Listener'
            ],
            (object)[
                'id' => 4,
                'name' => 'Emily Davis',
                'email' => 'emily@example.com',
                'phone' => '09201234567',
                'type' => 'Publisher'
            ],
            (object)[
                'id' => 5,
                'name' => 'Chris Brown',
                'email' => 'chris@example.com',
                'phone' => '09211234567',
                'type' => 'Listener'
            ],
            (object)[
                'id' => 6,
                'name' => 'Jessica Wilson',
                'email' => 'jessica@example.com',
                'phone' => '09221234567',
                'type' => 'Publisher'
            ],
            (object)[
                'id' => 7,
                'name' => 'David Martinez',
                'email' => 'david@example.com',
                'phone' => '09231234567',
                'type' => 'Listener'
            ],
            (object)[
                'id' => 8,
                'name' => 'Sarah Lee',
                'email' => 'sarah@example.com',
                'phone' => '09241234567',
                'type' => 'Publisher'
            ],
            (object)[
                'id' => 9,
                'name' => 'James Taylor',
                'email' => 'james@example.com',
                'phone' => '09251234567',
                'type' => 'Listener'
            ],
            (object)[
                'id' => 10,
                'name' => 'Linda Clark',
                'email' => 'linda@example.com',
                'phone' => '09261234567',
                'type' => 'Publisher'
            ],
        ]);

        return view('crm.customers', compact('customers'));

    }

    public function leads()
    {
        $leads = collect([
            (object)[
                'id' => 1,
                'name' => 'Carlos Mendoza',
                'email' => 'carlos@example.com',
                'phone' => '09170012345',
                'source' => 'Facebook Ad',
                'status' => 'New'
            ],
            (object)[
                'id' => 2,
                'name' => 'Monica Reyes',
                'email' => 'monica@example.com',
                'phone' => '09170123456',
                'source' => 'Website Form',
                'status' => 'Contacted'
            ],
            (object)[
                'id' => 3,
                'name' => 'Brian Tan',
                'email' => 'brian@example.com',
                'phone' => '09170234567',
                'source' => 'Referral',
                'status' => 'Interested'
            ],
            (object)[
                'id' => 4,
                'name' => 'Angela Lim',
                'email' => 'angela@example.com',
                'phone' => '09170345678',
                'source' => 'Google Ads',
                'status' => 'Follow-up'
            ],
            (object)[
                'id' => 5,
                'name' => 'Paulo Santos',
                'email' => 'paulo@example.com',
                'phone' => '09170456789',
                'source' => 'Instagram',
                'status' => 'New'
            ],
            (object)[
                'id' => 6,
                'name' => 'Grace Uy',
                'email' => 'grace@example.com',
                'phone' => '09170567890',
                'source' => 'Website Form',
                'status' => 'Interested'
            ],
            (object)[
                'id' => 7,
                'name' => 'Ricky Dela Cruz',
                'email' => 'ricky@example.com',
                'phone' => '09170678901',
                'source' => 'Referral',
                'status' => 'Contacted'
            ],
            (object)[
                'id' => 8,
                'name' => 'Maria Bautista',
                'email' => 'maria@example.com',
                'phone' => '09170789012',
                'source' => 'Google Ads',
                'status' => 'Follow-up'
            ],
            (object)[
                'id' => 9,
                'name' => 'Eugene Garcia',
                'email' => 'eugene@example.com',
                'phone' => '09170890123',
                'source' => 'Facebook Ad',
                'status' => 'Interested'
            ],
            (object)[
                'id' => 10,
                'name' => 'Diana Cruz',
                'email' => 'diana@example.com',
                'phone' => '09170901234',
                'source' => 'Instagram',
                'status' => 'New'
            ]
        ]);

        return view('crm.leads', compact('leads'));
    }


    public function deals()
    {
        $deals = collect([
            (object) ['id' => 1, 'name' => 'Yume Premium Subscription', 'customer' => 'John Doe', 'amount' => 10000, 'stage' => 'Prospecting', 'expected_close_date' => '2025-03-15'],
            (object) ['id' => 2, 'name' => 'Yume Ads Campaign', 'customer' => 'Jane Smith', 'amount' => 25000, 'stage' => 'Negotiation', 'expected_close_date' => '2025-03-20'],
            (object) ['id' => 3, 'name' => 'Exclusive Partner Deal', 'customer' => 'ABC Corp', 'amount' => 50000, 'stage' => 'Closed Won', 'expected_close_date' => '2025-02-28'],
            (object) ['id' => 4, 'name' => 'Basic Yume Package', 'customer' => 'XYZ Ltd', 'amount' => 5000, 'stage' => 'Closed Lost', 'expected_close_date' => '2025-02-15'],
        ]);

        return view('crm.deals', compact('deals'));
    }
}
