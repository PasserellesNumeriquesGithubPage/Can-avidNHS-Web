<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Announcement;
use App\Models\Applicant;
use App\Models\Career;
use App\Models\Document;
use App\Models\Event;
use App\Models\History;
use App\Models\News;
use App\Models\profile;

use App\Models\User;
use Symfony\Component\HttpKernel\Profiler\Profiler;

class FilterTableController extends Controller
{
    public function searchAnnouncement(Request $request)
    {
        if (Auth::check()) {
            $searchTerm = $request->input('search');
            $columns = ['announcements', 'announcements_what', 'announcements_who', 'announcements_when','announcements_where','announcements_why','announcements_how','profile_id','announcements_uploaded'];
            $query = Announcement::with('profile')->where(function ($query) use ($columns, $searchTerm) {
                foreach ($columns as $column) {
                    $query->orWhere($column, 'LIKE', '%' . $searchTerm . '%');
                }
            });
            $announcements = $query->get();
            return view('Announcement.index_announcement', compact('announcements'));
        } else {
            return redirect()->route('login');
        }
    }
    public function searchApplicant(Request $request)
    {
        if (Auth::check()) {
            $searchTerm = $request->input('search');
            $columns = ['applicant_name', 'applicant_email', 'career_id', 'date_applied'];
            $query = Applicant::where(function ($query) use ($columns, $searchTerm) {
                foreach ($columns as $column) {
                    $query->orWhere($column, 'LIKE', '%' . $searchTerm . '%');
                }
            });
            $applicants = $query->get();
            return view('Applicant.index_applicants', compact('applicants'));
        } else {
            return redirect()->route('login');
        }
    }

    public function searchCareer(Request $request)
    {
        if (Auth::check()) {
            $searchTerm = $request->input('search');
            $columns = ['career_position', 'career_description', 'career_uploaded', 'career_requirements'];
            $query = Career::where(function ($query) use ($columns, $searchTerm) {
                foreach ($columns as $column) {
                    $query->orWhere($column, 'LIKE', '%' . $searchTerm . '%');
                }
            });
            $careers = $query->get();
            return view('Career.index_career', compact('careers'));
        } else {
            return redirect()->route('login');
        }
    }
    public function searchDocument(Request $request)
    {
        if (Auth::check()) {
            $searchTerm = $request->input('search');
            $columns = ['search_id', 'Document', 'Student_Name', 'Requester_Name','Date_to_Get','Requester_Email','Requested_At'];
            $query = Document::where(function ($query) use ($columns, $searchTerm) {
                foreach ($columns as $column) {
                    $query->orWhere($column, 'LIKE', '%' . $searchTerm . '%');
                }
            });
            $requested = $query->get();
            return view('Request_Document_.index_request', compact('requested'));
        } else {
            return redirect()->route('login');
        }
    }
    public function searchEvent(Request $request)
    {
        if (Auth::check()) {
            $searchTerm = $request->input('search');
            $columns = ['events', 'events_description', 'events_uploaded', 'events_started','events_end'];
            $query = Event::where(function ($query) use ($columns, $searchTerm) {
                foreach ($columns as $column) {
                    $query->orWhere($column, 'LIKE', '%' . $searchTerm . '%');
                }
            });
            $events = $query->get();
            return view('Event.index_events', compact('events'));
        } else {
            return redirect()->route('login');
        }
    }
    public function searchLogs(Request $request)
    {
        if (Auth::check()) {
            $searchTerm = $request->input('search');
            $columns = ['Action', 'Type', 'Old_data', 'New_data','Date'];
            $query = History::where(function ($query) use ($columns, $searchTerm) {
                foreach ($columns as $column) {
                    $query->orWhere($column, 'LIKE', '%' . $searchTerm . '%');
                }
            });
            $logs = $query->get();
            return view('History.index_log', compact('logs'));
        } else {
            return redirect()->route('login');
        }
    }
    public function searchNews(Request $request)
    {
        if (Auth::check()) {
            $searchTerm = $request->input('search');
            $columns = ['news', 'news_description', 'news_updated', 'news_uploaded','Date'];
            $query = News::where(function ($query) use ($columns, $searchTerm) {
                foreach ($columns as $column) {
                    $query->orWhere($column, 'LIKE', '%' . $searchTerm . '%');
                }
            });
            $logs = $query->get();
            return view('History.index_log', compact('logs'));
        } else {
            return redirect()->route('login');
        }
    }
    public function searchUser(Request $request)
    {
        if (Auth::check()) {
            $searchTerm = $request->input('search');
            $columns = ['name','age','gender','position','department','phone_number'];
            $query = Profile::where(function ($query) use ($columns, $searchTerm) {
                foreach ($columns as $column) {
                    $query->orWhere($column, 'LIKE', '%' . $searchTerm . '%');
                }
            });
            $users = $query->get();
            return view('User.index_user', compact('users'));
        } else {
            return redirect()->route('login');
        }
    }
}
