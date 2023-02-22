<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Statistic;

class StatisticController extends Controller
{
    public function statistic(User $user,Statistic $statistic)
    {
        return view('training/statistic')->with([
            'users' => $user->get(),
            'statistics' => $statistic->get(),
            ]);
    }
}
