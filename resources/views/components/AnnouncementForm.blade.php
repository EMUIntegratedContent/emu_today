<form method="POST" action="/announcement/form">
  {{ csrf_field() }}
  <div class="row">
    <div class="medium-12 columns">
      <div class="form-group">
        <p class="help-text" id="title-helptext">Please enter a title (50 characters left)</p>
        <input class="form-control @if($errors->first('title')) error @endif" name="title" type="text" value="{{ old('title') }}">
        @if($errors->first('title')) <span class="error">{{ $errors->first('title') }}</span> @endif
      </div>
      <div class="form-group">
        <label>
          <p class="help-text" id="announcement-helptext">(255 characters left)</p>
          <textarea class="form-control @if($errors->first('title')) error @endif" name="announcement" type="textarea" rows="8">{{ old('announcement') }}</textarea>
          @if($errors->first('announcement')) <span class="error">{{ $errors->first('announcement') }}</span> @endif
        </label>
      </div>
    </div> <!-- /.small-12 columns -->
  </div> <!-- /.row -->
  <div class="row">
    <div class="medium-12 columns">
      <div class="form-group">
        <label>External Link</label>
        <p class="help-text" id="title-helptext">Please enter the url for your external web page. (www.yourlink.com)</p>
        <div class="input-group">
          <span class="input-group-label">http://</span>
          <input class="form-control @if($errors->first('title')) error @endif" name="link" type="text" value="{{ old('link') }}">
          @if($errors->first('link')) <span class="error">{{ $errors->first('link') }}</span> @endif
        </div>
      </div>
    </div><!-- /.col-md-4 -->
  </div><!-- /.row -->
  <div class="row">
    <div class="medium-4 columns">
      <div class="form-group">
        <label>External Link Text</label>
        <p class="help-text" id="link_txt-helptext">Please enter link text</p>
        <input class="form-control @if($errors->first('title')) error @endif" name="link_txt" type="text" value="{{ old('link_txt') }}">
        @if($errors->first('link_txt')) <span class="error">{{ $errors->first('link_txt') }}</span> @endif
      </div>
    </div><!-- /.col-md-4 -->
    <div class="medium-8 columns">
    </div><!-- /.md6col -->
  </div>
  <div class="row">
    <div class="medium-12 columns">
      <div class="form-group">
        <label>Email Link</label>
        <p class="help-text" id="title-helptext">Please enter the contact person's email address. (contact@yourlink.com)</p>
        <div class="input-group">
          <span class="input-group-label">mailto:</span>
          <input class="form-control @if($errors->first('title')) error @endif" name="email_link" type="text" value="{{ old('email_link') }}">
          @if($errors->first('email_link')) <span class="error">{{ $errors->first('email_link') }}</span> @endif
        </div>
      </div>
    </div><!-- /.col-md-4 -->
  </div><!-- /.row -->
  <div class="row">
    <div class="medium-4 columns">
      <div class="form-group">
        <label>Email Link Text</label>
        <p class="help-text" id="email-link-helptext">Please enter email link text</p>
        <input class="form-control @if($errors->first('title')) error @endif" name="email_link_txt" type="text" value="{{ old('email_link_txt') }}">
        @if($errors->first('email_link_txt')) <span class="error">{{ $errors->first('email_link_txt') }}</span> @endif
      </div>
    </div><!-- /.col-md-4 -->
    <div class="medium-8 columns">
    </div><!-- /.md6col -->
  </div>
  <div class="row">
    <div class="medium-6 columns">
      <div class="form-group">
        <label for="start-date">Start Date</label>
        <input id="start-date" placeholder="Pick Start Date" readonly="readonly" class="flatpickr-input form-control @if($errors->first('title')) error @endif" name="start_date"type="text" value="{{ old('start_date') }}">
        @if($errors->first('start_date')) <span class="error">{{ $errors->first('start_date') }}</span> @endif
      </div> <!--form-group -->
    </div> <!-- /.small-6 columns -->
    <div class="medium-6 columns">
      <div class="form-group">
        <label for="end-date">End Date</label>
        <input id="end-date" placeholder="Pick Start Date" readonly="readonly" class="flatpickr-input form-control @if($errors->first('title')) error @endif" name="end_date" type="text" value="{{ old('end_date') }}">
        @if($errors->first('end_date')) <span class="error">{{ $errors->first('end_date') }}</span> @endif
      </div> <!--form-group -->
    </div> <!-- /.small-6 columns -->
  </div> <!-- /.row -->
  <div class="row">
    <div class="medium-12 columns">
      <div class="form-group">
        <button type="submit" class="button button-primary">Submit For Approval</button>
      </div>
    </div>
  </div>
</form>
