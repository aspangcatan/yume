<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class SfaController extends Controller
{
    public function dashboard(){
        $activitiesCount = 25; // Example data
        $tasksCount = 8; // Example data
        $meetingsCount = 3; // Example data

        $recentActivities = [
            ['title' => 'Call with Advertiser X', 'date' => '2025-02-26', 'type' => 'Call'],
            ['title' => 'Email Follow-up with Partner Y', 'date' => '2025-02-25', 'type' => 'Email'],
            ['title' => 'Meeting with Listener Z', 'date' => '2025-02-24', 'type' => 'Meeting']
        ];

        return view('sfa.dashboard', compact('activitiesCount', 'tasksCount', 'meetingsCount', 'recentActivities'));
    }

    public function activities()
    {
        $activities = [
            ['title' => 'Call with Advertiser X', 'date' => '2025-02-26', 'type' => 'Call'],
            ['title' => 'Email Follow-up with Partner Y', 'date' => '2025-02-25', 'type' => 'Email']
        ];

        return view('sfa.activities', compact('activities'));
    }


    public function tasks()
    {
        // Dummy data for now
        $tasks = collect([
            ['title' => 'Follow-up with Advertiser A', 'assigned_to' => 'John Doe', 'due_date' => '2025-02-28', 'status' => 'Pending'],
            ['title' => 'Schedule demo for Partner B', 'assigned_to' => 'Jane Smith', 'due_date' => '2025-03-02', 'status' => 'Completed'],
            ['title' => 'Prepare contract for Listener C', 'assigned_to' => 'Mark Lee', 'due_date' => '2025-03-05', 'status' => 'Pending'],
            ['title' => 'Send email campaign to new leads', 'assigned_to' => 'Sarah Kim', 'due_date' => '2025-03-04', 'status' => 'Pending'],
            ['title' => 'Verify documents for Partner D', 'assigned_to' => 'John Doe', 'due_date' => '2025-03-06', 'status' => 'Completed'],
        ]);

        return view('sfa.tasks', compact('tasks'));
    }


    public function calendar()
    {
        $events = [
            [
                'title' => 'Meeting with Publisher',
                'start' => '2025-02-27'
            ],
            [
                'title' => 'Deadline: Deal Follow-up',
                'start' => '2025-03-01'
            ],
            [
                'title' => 'Yume Product Demo',
                'start' => '2025-03-05'
            ]
        ];

        return view('sfa.calendar', compact('events'));
    }

}
