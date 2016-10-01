@extends('public.layouts.global')

@section('meta')
<!-- flatpickr styles -->
<link rel="stylesheet" href="/css/flatpickr.min.css" />
@stop

@section('content')
<div id="content-area">
  <div id="listing-bar">
    <div class="row">
      <div class="large-12 medium-12 small-12 columns">
        <div class="row">
          <div style='float:left' class="medium-6 columns">
            <h3 class="cal-caps toptitle">Announcements</h3>
            <div>
              @unless (empty($success))
              <!-- On success -->
              <div data-alert class="alert-box success radius">
                The Announcement has been submitted.
                <a href="#" class="close">&times;</a>
              </div>
              @endunless

              @include('components.AnnouncementForm')

            </div><!-- /.medium-6 columns -->
          </div>
          <!--  -->
          <div class="medium-6 columns float-right">
            <div class="row">
              <div class="small-12 column">
                <h3 class="cal-caps toptitle">Your Submitted Events</h3>
                <table id="user-events-submitted-table" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th class="text-left">Title</th>
                      <th class="text-left">Start Date</th>
                      <th class="text-left">End Date</th>
                      <th class="text-left">Submitted</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>item</td>
                      <td>item</td>
                      <td>item</td>
                      <td>item</td>
                    </tr>
                    @unless(empty($submitteditems))
                    @foreach($submitteditems as $item)
                    <tr>
                      <td>{{ $item->title }}</td>
                      <td>{{-- $item->start_date->toFormattedDateString() --}}</td>
                      <td>{{-- $item->end_date->toFormattedDateString() --}}</td>
                      <td>{{-- $item->submission_date->toFormattedDateString() --}}</td>
                    </tr>
                    @endforeach
                    @endunless
                  </tbody>
                </table>
              </div><!-- /.small-12 column -->
            </div><!-- /.row -->
            <div class="row">
              <div class="small-12 column">
                <h3 class="cal-caps toptitle">Your Approved Announcements</h3>
                <table id="user-events-approved-table" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th class="text-left">Title</th>
                      <th class="text-left">Start Date</th>
                      <th class="text-left">End Date</th>
                      <th class="text-left">Approved</th>
                    </tr>
                  </thead>
                  <tbody>
                    @unless(empty($submitteditems))
                    @foreach($approveditems as $item)
                    <tr>
                      <td>{{ $item->title }}</td>
                      <td>{{-- $item->start_date->toFormattedDateString() --}}</td>
                      <td>{{-- $item->end_date->toFormattedDateString() --}}</td>
                      <td>{{-- $item->approved_date->toFormattedDateString() --}}</td>
                    </tr>
                    @endforeach
                    @endunless
                  </tbody>
                </table>
              </div><!-- /.small-12 column -->
            </div><!-- /.row -->
            <!-- End right side 'Your Announcements' -->
          </div><!-- /.medium-6 column -->
        </div>
      </div>
    </div>
  </div>
@stop

@section('scripts')
<script type="text/javascript" src="/js/flatpickr.min.js"></script>
<script>
// This is were we init our datetimepicker
new Flatpickr(document.getElementById('start-date'));
new Flatpickr(document.getElementById('end-date'));
</script>
@stop
