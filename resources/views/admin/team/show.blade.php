@extends('layouts.dashboard')

{{-- title --}}
@section('title')
    Team 
@endsection

@section('teamSpinner')
    <div class="spinner-grow spinner-main-grow-style text-primary mr-1 " role="status">
    </div>
@endsection



{{-- content --}}
@section('content')
<section class="banner-main-section py-5 all-pages-input" id="main">
    <div class="row">
        <div class="col-12">
            <h2 class="dash-ad-title m-0 mb-3">Admin Dashboard | <span class="dash-span-title">View Team Member Details</span></h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"> Team Membar </h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="table-responsive">
                                            <table  class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                             Name
                                                        </th>
                                                        <td>
                                                            {{ $team->member_name }}
                                                        </td>
                                                    </tr>                                
                                                    <tr>
                                                        <th>
                                                             Designation
                                                        </th>
                                                        <td>
                                                            {{ $team->member_designation }}
                                                        </td>
                                                    </tr>                                
                                                    <tr>
                                                        <th>
                                                             Phone
                                                        </th>
                                                        <td>
                                                            {{ $team->member_phone }}
                                                        </td>
                                                    </tr>                                
                                                    <tr>
                                                        <th>
                                                             Email
                                                        </th>
                                                        <td>
                                                            {{ $team->member_email }}
                                                        </td>
                                                    </tr>                                
                                                    <tr>
                                                        <th>
                                                            Expertise
                                                        </th>
                                                        <td>
                                                            {{ $team->expertise_name_one }}
                                                        </td>
                                                    </tr>                                
                                                    <tr>
                                                        <th>
                                                            Level 
                                                        </th>
                                                        <td>
                                                            {{ $team->expertise_percent_one }}
                                                        </td>
                                                    </tr>                                
                                                    <tr>
                                                        <th>
                                                            Expertise
                                                        </th>
                                                        <td>
                                                            {{ $team->expertise_name_two }}
                                                        </td>
                                                    </tr>                                
                                                    <tr>
                                                        <th>
                                                            Level 
                                                        </th>
                                                        <td>
                                                            {{ $team->expertise_percent_two }}
                                                        </td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <th>
                                                            Expertise
                                                        </th>
                                                        <td>
                                                            {{ $team->expertise_name_three }}
                                                        </td>
                                                    </tr>                                
                                                    <tr>
                                                        <th>
                                                            Level 
                                                        </th>
                                                        <td>
                                                            {{ $team->expertise_percent_three }}
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th>
                                                            Expertise
                                                        </th>
                                                        <td>
                                                            {{ $team->expertise_name_three }}
                                                        </td>
                                                    </tr>                                
                                                    <tr>
                                                        <th>
                                                            Level 
                                                        </th>
                                                        <td>
                                                            {{ $team->expertise_percent_three }}
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th>
                                                            name 
                                                        </th>
                                                        <td>
                                                            {{ $team->expertise_name_four }}
                                                        </td>
                                                    </tr>                                
                                                    <tr>
                                                        <th>
                                                            Level 
                                                        </th>
                                                        <td>
                                                            {{ $team->expertise_percent_four }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>
                                                            Facebook
                                                        </th>
                                                        <td>
                                                            {{ $team->facebook_link }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>
                                                            Twitter
                                                        </th>
                                                        <td>
                                                            {{ $team->twitter_link }}
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th>
                                                            Google Plus
                                                        </th>
                                                        <td>
                                                            {{ $team->google_plus_link }}
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th>
                                                            Youtube
                                                        </th>
                                                        <td>
                                                            {{ $team->youtube_link }}
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th>
                                                            LinkedIn
                                                        </th>
                                                        <td>
                                                            {{ $team->linkedin_link }}
                                                        </td>
                                                    </tr>
                                                                                
                                                    <tr>
                                                        <th>
                                                             Photo
                                                        </th>
                                                        <td>
                                                   
                                                            <img src="{{ asset('uploads/images/team') }}/{{ $team->member_photo }}" alt="not found" width="70" height="70">
                                                        </td>
                                                    </tr>                                                               
                                                                                                            
                                                </tbody>
                                            </table>
                                            <a class="btn mt-1 btn-success" href="{{ route('team.index') }}">Return Back</a>
                                            <a class="btn edit-btn mt-1 btn-primary" href="{{ route('team.edit', $team->id) }}">Edit</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
 
@endsection