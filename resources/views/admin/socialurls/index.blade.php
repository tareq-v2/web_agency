@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    Social Urls
@endsection

{{-- Active Menu --}}
@section('socialurls')
    active
@endsection


{{-- Breadcrumb --}}
@section('breadcrumb')
    <h2 class="content-header-title float-left mb-0">Admin Dashboard</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">Home</a>
            </li>
            <li class="breadcrumb-item active">
                Social Urls
            </li>
        </ol>
    </div>
@endsection

{{-- Page Content --}}
@section('content')
    <section id="basic-vertical-layouts">
        <div class="row">
            <div class="col-md-12 col-12 m-auto">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Social Urls</h4>
                    
                    </div>
                    <div class="card-body">
                        <form action="{{ route('socialurls.update', $socialurls->id) }}" method="POST"
                            class="form form-vertical">
                            @csrf
                            {{ method_field('PUT') }}
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="fb_url">Fb Url</label>
                                        <input type="text" name="fb_url" value="{{ socialurls()->fb_url }}" id="fb_url"
                                            class="form-control" />
                                        @error('fb_url')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="instagram_url">Instagram Url</label>
                                        <input type="text" name="instagram_url" value="{{ socialurls()->instagram_url }}"
                                            id="instagram_url" class="form-control" />
                                        @error('instagram_url')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="youtube_url">Youtube Url</label>
                                        <input type="text" name="youtube_url" value="{{ socialurls()->youtube_url }}"
                                            id="youtube_url" class="form-control" />
                                        @error('youtube_url')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="linkedin_url">LinkedIn Url</label>
                                        <input type="text" name="linkedin_url" value="{{ socialurls()->linkedin_url }}"
                                            id="linkedin_url" class="form-control" />
                                        @error('linkedin_url')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="twitter_url">Twitter Url</label>
                                        <input type="text" name="twitter_url" value="{{ socialurls()->twitter_url }}"
                                            id="twitter_url" class="form-control" />
                                        @error('twitter_url')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary mr-1">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
