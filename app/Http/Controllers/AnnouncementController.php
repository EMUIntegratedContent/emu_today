<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Announcements;

class AnnouncementController extends Controller
{
  public function index()
  { // Method to display and populate Announcements Page
    $announcements = Announcements::get();
    return view('public.hub.announcement.index', compact('announcements'));
  }

  public function edit()
  { // Method to display and populate public announcements submission form
    return view('public.hub.announcement.form');
  }

  public function store(Announcements $announcement, Request $request)
  { // Method to validate and store announcements submission
    $this->validate($request, [ // validate takes rules to test against, see laravel documentation for rules
      // errors array is global. if validation fails, errors array will be populated
      'title' => 'required|min:10',
      'announcement' => 'required|min:20',
      'link_txt' => 'required',
      'link' => 'required',
      'email_link_txt' => 'required',
      'email_link' => 'required|email',
      'start_date' => 'required|date',
      'end_date' => 'required|date',
    ]);

    $write = $announcement->create([ // Is there a less verbose method to drop values in db table?
      // 'is_approved' => '0',
      // 'is_promoted' => '0',
      'title' => $request->title,
      'announcement' => $request->announcement,
      'link_txt' => $request->link_txt,
      'link' => $request->link,
      'email_link_txt' => $request->email_link_txt,
      'email_link' => $request->email_link,
      'start_date' => $request->start_date,
      'end_date' => $request->end_date,
    ]);

    if($write){
      // Did the database write happen successfully? Return success
      $success = true; return view('public.hub.announcement.form', compact('success'));
    } else {
      // Laravel will display a SQL EXCEPTION error page. So this will naver return.
      return 'Write to database failed.';
    }
  }
}
