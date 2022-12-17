<?php

namespace App\Http\Controllers\backend;
use Carbon\Carbon;
use App\Models\webinar;
use App\Models\category;
use App\Models\classroom;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function panelDashboard() {
        $todayDate = Carbon::now()->format('d-m-Y');
        $thisMonth = Carbon::now()->format('m');

        $totalWebinar = webinar::count();
        $todayWebinar = webinar::whereDate('created_at', $todayDate)->count();
        $thisMonthWebinar = webinar::whereMonth('created_at', $thisMonth)->count();

        $totalCategory = category::count();
        $totalClass = classroom::count();

      

      

        return view('admin.dashboard', compact('totalWebinar', 'totalCategory', 'totalClass', 'todayDate', 'thisMonth', 'thisMonthWebinar','todayWebinar'));
    }
}
