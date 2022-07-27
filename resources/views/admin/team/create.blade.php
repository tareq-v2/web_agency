@extends('layouts.dashboard')

{{-- title --}}
@section('title')
     Team
@endsection

{{-- menu active --}}
@section('TeamCreate')
    active
@endsection

@section('teamSpinner')
    <div class="spinner-grow spinner-main-grow-style text-primary mr-1 " role="status">
    </div>
@endsection

@section('teamSpinnerCreate')
    spinner-border text-info
@endsection

{{-- Breadcrumb --}}
@section('breadcrumb')
     <h2 class="content-header-title float-left mb-0">Admin Dashboard</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">Home</a>
            </li>
            <li class="breadcrumb-item ">Team</li>
            <li class="breadcrumb-item active">Create Team</li>
        </ol>
    </div>
@endsection

 

{{-- content --}}
@section('content')
<section class="banner-main-section" id="main">
          <div class="row">
            <div class="col-lg-12">
              <div class="card shadow">
                <div class="card-header">
                  <h4 class="card-title">Create Team</h4>
                  @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                  @endif
                </div>
                <div class="card-body">
                  <form action="{{ route('team.store') }}" method="POST" enctype="multipart/form-data">               
                    @csrf

                      <div class="form-group">
                        <label  for="icon">Name <span class="text-danger">*</span></label>
                        <input type="text"  class="form-control" name="member_name" value="{{ old('member_name') }}">
                        @error('member_name')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div> 

                      <div class="form-group">
                        <label  for="icon">Designation <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="member_designation" value="{{ old('member_designation') }}">
                        @error('member_designation')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div> 

                      <div class="form-group">
                        <label  for="icon">Details <span class="text-danger">*</span></label>
                        <input type="hidden" id="member_details"  class="form-control" name="member_details" value="{{ old('member_details') }}">
                        <trix-editor input="member_details" style="min-height: 12rem"></trix-editor>
                        @error('member_details')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div> 

                      <div class="form-group">
                        <label  for="icon">Phone <span class="text-danger">*</span> </label>
                        <input type="text"  class="form-control" name="member_phone" value="{{ old('member_phone') }}">
                        @error('member_phone')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div> 

                      <div class="form-group">
                        <label  for="icon">Email <span class="text-danger">*</span></label>
                        <input type="email"  class="form-control" name="member_email" value="{{ old('member_email') }}">
                        @error('member_email')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div> 

                      <div>
                          <h4>Add Team Member Expertise</h4>
                      </div>

                      <div class="form-group">
                        <label  for="icon"> Name </label>
                        <input type="text"  class="form-control" name="expertise_name_one" placeholder="expertise name" value="{{ old('expertise_name_one') }}">
                        @error('expertise_name_one')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label  for="icon"> level(%) </label>
                        <input type="text"  class="form-control" name="expertise_percent_one" placeholder="expertise percent" value="{{ old('expertise_percent_one') }}">
                        @error('expertise_name_one')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label  for="icon"> Name </label>
                        <input type="text"  class="form-control" name="expertise_name_two" placeholder="expertise name" value="{{ old('expertise_name_two') }}">
                        @error('expertise_name_two')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label  for="icon"> level(%) </label>
                        <input type="text"  class="form-control" name="expertise_percent_two" placeholder="expertise percent" value="{{ old('expertise_percent_two') }}">
                        @error('expertise_percent_two')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label  for="icon"> Name </label>
                        <input type="text"  class="form-control" name="expertise_name_three" placeholder="expertise name" value="{{ old('expertise_name_three') }}">
                        @error('expertise_name_three')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label  for="icon"> level(%) </label>
                        <input type="text"  class="form-control" name="expertise_percent_three" placeholder="expertise percent" value="{{ old('expertise_percent_three') }}">
                        @error('expertise_percent_three')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label  for="icon"> Name </label>
                        <input type="text"  class="form-control" name="expertise_name_four" placeholder="expertise name" value="{{ old('expertise_name_four') }}">
                        @error('expertise_name_four')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label  for="icon"> level(%) </label>
                        <input type="text"  class="form-control" name="expertise_percent_four" placeholder="expertise percent" value="{{ old('expertise_percent_four') }}">
                        @error('expertise_percent_four')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>

                      <div>
                        <h4>Add Team Member Social Media Link</h4>
                      </div>

                      <div class="form-group">
                        <label  for="icon"> Facebook [optional] </label>
                        <input type="text"  class="form-control" name="facebook_link" value="{{ old('facebook_link') }}">
                        @error('facebook_link')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label  for="icon"> Twitter [optional] </label>
                        <input type="text"  class="form-control" name="twitter_link" value="{{ old('twitter_link') }}">
                        @error('twitter_link')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label  for="icon"> GooglePlus Link [optional] </label>
                        <input type="text"  class="form-control" name="google_plus_link" value="{{ old('google_plus_link') }}">
                        @error('google_plus_link')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label  for="icon"> Youtube Link [optional] </label>
                        <input type="text"  class="form-control" name="youtube_link" value="{{ old('youtube_link') }}">
                        @error('youtube_link')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label  for="icon"> LinkedIn Link [optional] </label>
                        <input type="text"  class="form-control" name="linkedin_link" value="{{ old('linkedin_link') }}">
                        @error('linkedin_link')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>

                      <h4>Choose Member Photo </h4>
                      <div class="form-group">
                        <label  for="icon">Photo <span class="text-danger">*</span> (Size: 370 * 350)</label>
                        <input type="file"  class="form-control" name="member_photo" value="{{ old('member_photo') }}">
                        @error('member_photo')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div> 

                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
              </div>
            </div>
          </div>
      </section>

@endsection

