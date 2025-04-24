<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Page;
use Illuminate\Support\Facades\Log;

class DashboardController extends Controller
{
    public function index()
    {
        $usersCount = User::count();
        $pagesCount = Page::count();
        
        Log::debug('DashboardController data', [
            'usersCount' => $usersCount,
            'pagesCount' => $pagesCount,
            'controller' => __CLASS__
        ]);

        return response()->view('admin.dashboard', [
            'usersCount' => $usersCount,
            'pagesCount' => $pagesCount
        ]);
    }
}