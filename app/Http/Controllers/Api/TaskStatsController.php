<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class TaskStatsController extends Controller
{
    public function index()
    {
        $userId = Auth::id();
        
        $stats = [
            'pending' => Task::forUser($userId)->byStatus('pending')->count(),
            'inProgress' => Task::forUser($userId)->byStatus('in-progress')->count(),
            'completed' => Task::forUser($userId)->byStatus('completed')->count(),
        ];
        
        return response()->json($stats);
    }
}