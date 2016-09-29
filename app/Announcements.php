<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Announcements extends Model
{
  protected $fillable = [
    // 'is_promoted',
    // 'is_approved',
    'title',
    'announcement',
    'start_date',
    'end_date',
    'link_txt',
    'link',
    'link_txt',
    'link',
    'email_link_txt',
    'email_link'
  ];
  protected $dates = [
    'end_date', 'start_date',
    'submission_date', 'approved_date'
  ];
}
