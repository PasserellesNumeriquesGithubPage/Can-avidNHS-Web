<?php

namespace App\Http\Controllers\Features;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActivityController extends Controller
{
    public function addActivity(Request $activityRequest)
    {
        $validate = $activityRequest->validate([
            'activity' => 'required|string',
            'activity_title' => 'required|string',
            'activity_type' => 'required|string',
        ]);
        if (!$validate) {
            return false;
        }
        $activity = new Activity();
        $activity->activity = $validate['activity'];
        $activity->activity_title = $validate['activity_title'];
        $activity->activity_type = $validate['activity_type'];
        $activity->profile_id = Auth::user()->profile->id;
        $activity->activity_at = date('Y-m-d');
        if ($activity->save()) {
            return true;
        }
        return false;
    }

    public function getAllActivity(){
        if (Auth::check()) {
            $activities = Activity::with('profile')->get();
            return view('dashboard.user.admin.admin_tables.activity_table', compact('activities'));
        } else {
            return redirect()->route('user.login');
        }
    }
}
