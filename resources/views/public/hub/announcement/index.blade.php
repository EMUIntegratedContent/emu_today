@extends('public.layouts.global')

@section('content')
<div id="content-area">
  <div id="listing-bar">
    <div class="row">
      <div class="large-12 medium-12 small-12 columns">
        <div id="title-grouping" class="row">
          <div class="large-5 medium-7 small-12 columns  noleftpadding"><h3 class="news-caps">Announcements <!-- <a class="smaller-title" href="">[ RSS feed ]</a> --></h3></div>
        </div>
        <div class="row">
          <div class="large-12 medium-12 small-12">

            @unless(empty($announcements))
            <ul class="accordion" data-accordion role="tablist">
              @foreach($announcements as $announcement)
              <li class="accordion-navigation">
                <a href="#panel{{ $announcement->id }}d" role="tab" id="panel1d-heading" aria-controls="panel{{ $announcement->id }}d">{{ $announcement->title }}</a>
                <div id="panel{{ $announcement->id }}d" class="content" role="tabpanel" aria-labelledby="panel{{ $announcement->id }}d-heading">
                  <p>{{ $announcement->announcement }}</p>
                  @if($announcement->link)
                  <p>For more information visit: <a href="http://{{$announcement->link}}" class="accordion-link" target="_blank">{{$announcement->link_txt or 'More Info'}}</a></p>
                  @endif
                  @if($announcement->email_link)
                  <p>For more information click: <a href="mailto://{{$announcement->email_link}}" class="accordion-link" target="_blank">{{$announcement->email_link_txt or $announcement->email_link}}</a></p>
                  @endif
                </div>
              </li>
              @endforeach
            </ul>
            @else <!-- No announcements? Display this: -->
            <p>There are no announcements at this time.</p>
            @endunless

            <div id="base-grouping" class="row">
              <div class="large-5 medium-7 hide-for-small columns">&nbsp;</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>   <!--end content area-->
@stop
