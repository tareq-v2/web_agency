@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
     Team
@endsection

@section('teamSpinner')
    <div class="spinner-grow spinner-main-grow-style text-primary mr-1 " role="status">
    </div>
@endsection


{{-- Breadcrumb --}}
@section('breadcrumb')
     <h2 class="content-header-title float-left mb-0">Admin Dashboard</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">Home</a>
            </li>
            <li class="breadcrumb-item "> Team</li>
            <li class="breadcrumb-item ">
                <a href="{{ route('team.index') }}">Team List</a>
            </li>
            <li class="breadcrumb-item active">Update Team</li>
        </ol>
    </div>
@endsection

@section('content')

<div class="row">
    <div class="col-md-12 col-12 m-auto">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Update Team</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('team.update', $team->id) }}" method="POST" enctype="multipart/form-data">               
                    @csrf
                    @method('PUT')
                      <div class="form-group">
                        <label  for="icon">Name <span class="text-danger">*</span></label>
                        <input type="text"  class="form-control" name="member_name" value="{{ $team->member_name }}">
                        @error('member_name')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div> 

                      <div class="form-group">
                        <label  for="icon">Designation <span class="text-danger">*</span></label>
                        <input type="text"  class="form-control" name="member_designation" value="{{ $team->member_designation }}">
                        @error('member_designation')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div> 

                      <div class="form-group">
                        <label  for="icon">Details <span class="text-danger">*</span></label>
                        <input type="hidden" id="member_details"  class="form-control" name="member_details" value="{{ $team->member_details }}">
                        <trix-editor input="member_details">
                          
                        </trix-editor>
                        @error('member_details')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label  for="icon">Phone <span class="text-danger">*</span></label>
                        <input type="text"  class="form-control" name="member_phone" value="{{ $team->member_phone }}">
                        @error('member_phone')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div> 

                      <div class="form-group">
                        <label  for="icon">Email <span class="text-danger">*</span></label>
                        <input type="email"  class="form-control" name="member_email" value="{{ $team->member_email }}">
                        @error('member_email')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div> 

                      <div>
                          <h4>Add Member Expertise</h4>
                      </div>

                      <div class="form-group">
                        <label  for="icon"> Name </label>
                        <input type="text"  class="form-control" name="expertise_name_one" value="{{ $team->expertise_name_one }}">
                        @error('expertise_name_one')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label  for="icon"> level(%) </label>
                        <input type="text"  class="form-control" name="expertise_percent_one" value="{{ $team->expertise_percent_one }}">
                        @error('expertise_name_one')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label  for="icon"> Name </label>
                        <input type="text"  class="form-control" name="expertise_name_two" value="{{ $team->expertise_name_two }}">
                        @error('expertise_name_two')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label  for="icon"> level(%) </label>
                        <input type="text"  class="form-control" name="expertise_percent_two" value="{{ $team->expertise_percent_two }}">
                        @error('expertise_percent_two')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label  for="icon"> Name </label>
                        <input type="text"  class="form-control" name="expertise_name_three" value="{{ $team->expertise_name_three }}">
                        @error('expertise_name_three')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label  for="icon"> level(%) </label>
                        <input type="text"  class="form-control" name="expertise_percent_three" value="{{ $team->expertise_percent_three }}">
                        @error('expertise_percent_three')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label  for="icon"> Name </label>
                        <input type="text"  class="form-control" name="expertise_name_four" value="{{ $team->expertise_name_four }}">
                        @error('expertise_name_four')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label  for="icon"> level(%) </label>
                        <input type="text"  class="form-control" name="expertise_percent_four" value="{{ $team->expertise_percent_four }}">
                        @error('expertise_percent_four')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>

                      <div>
                        <h4>Add Member Social Media Link</h4>
                      </div>

                      <div class="form-group">
                        <label  for="icon"> Facebook [optional] </label>
                        <input type="text"  class="form-control" name="facebook_link" value="{{ $team->facebook_link }}">
                        @error('facebook_link')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label  for="icon"> Twitter [optional] </label>
                        <input type="text"  class="form-control" name="twitter_link" value="{{ $team->twitter_link }}">
                        @error('twitter_link')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label  for="icon"> GooglePlus [optional] </label>
                        <input type="text"  class="form-control" name="google_plus_link" value="{{ $team->google_plus_link }}">
                        @error('google_plus_link')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label  for="icon"> Youtube [optional] </label>
                        <input type="text"  class="form-control" name="youtube_link" value="{{ $team->youtube_link }}">
                        @error('youtube_link')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label  for="icon"> LinkedIn [optional] </label>
                        <input type="text"  class="form-control" name="linkedin_link" value="{{ $team->linkedin_link }}">
                        @error('linkedin_link')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div>

                      <h3>Choose Member Photo </h3>
                      <div class="form-group">
                        <label  for="icon">Photo <span class="text-danger">*</span> (Size: 370 * 350)</label>
                        <input type="file"  class="form-control" name="member_photo" >
                        @error('member_photo')
                            <span class="text-danger"> {{ $message }} *</span>
                        @enderror
                      </div> 

                      <div class="col-12">
                        <div class="form-group">
                            <label for="name">preview image</label>
                            
                            <img width="50" height="50" src="{{ asset('uploads/images/team') }}/{{ $team->member_photo }}" alt="">
                            <br>
                        
                        </div>
                    </div>

                      <button type="submit" class="btn btn-primary">Update</button>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection