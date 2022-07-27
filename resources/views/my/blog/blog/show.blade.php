@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    Blog
@endsection

{{-- Active Menu --}}
@section('blog')
    active
@endsection

@section('blogSpinner')
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
            <li class="breadcrumb-item active">
                Blog
            </li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="mb-3">
        <a href="{{ route('blog.index') }}" class="btn btn-dark">Back </a>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered border-width-3">
                <tr>
                    <th>User </th>
                    <td>{{ $blog->relationtouser->name }}</td>
                </tr>
                <tr>
                    <th>Category </th>
                    <td>{{ $blog->relationtoblogcategory->category_name }}</td>
                </tr>
                <tr>
                    <th>Editors Comment </th>
                    <td>{{ $blog->editors_comment }}</td>
                </tr>
                <tr>
                    <th>Editors Photo </th>
                    <td><img src="{{ asset('uploads/editors_photos/') }}/{{ $blog->editors_photo }}" width="150" height="100"
                            alt="No Photo"></td>
                </tr>
                <tr>
                    <th>BLog Title</th>
                    <td>{{ $blog->title }}</td>
                </tr>
                <tr>
                    <th>BLog Slug</th>
                    <td>{{ $blog->slug }}</td>
                </tr>
                <tr>
                    <th>Short Description </th>
                    <td>{{ $blog->s_description }}</td>
                </tr>
                <tr>
                    <th>Description </th>
                    <td>{!! $blog->description !!}</td>
                </tr>
                <tr>
                    <th>Blog Photo</th>
                    <td><img src="{{ asset('uploads/blog_photos/') }}/{{ $blog->blog_photo }}" width="150" height="100"
                            alt=""></td>
                </tr>
            </table>
        </div>
    </div>
@endsection
