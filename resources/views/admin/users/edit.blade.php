@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    Users
@endsection

@section('usersList')
    active
@endsection

@section('userSpinnerList')
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
            <li class="breadcrumb-item">Users</li>
            <li class="breadcrumb-item">
                <a href="{{ route('testimonial.index') }}">User List</a>
            </li>
            <li class="breadcrumb-item active">Update User</li>
        </ol>
    </div>
@endsection

@section('content')

<div class="row">
    <div class="col-md-12 col-12 m-auto">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Update User</h4>
            </div>
            <div class="card-body">
                <form class="form form-vertical" action="{{ route('users.update', $single_user->id) }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-12">

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name">Full Name <span class="text-danger">*</span></label>
                                    <input type="text" id="name" class="form-control" name="name" value="{{ $single_user->name }}"/>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email">Email <span class="text-danger">*</span></label>
                                    <input type="text" id="email" class="form-control" name="email" value="{{ $single_user->email }}"/>
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary mr-1">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection