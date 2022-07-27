


@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    Process
@endsection

@section('homeSpinner')
    <div class="spinner-grow spinner-main-grow-style text-primary mr-1 " role="status">
    </div>
@endsection

@section('processSpinner')
    <div class="spinner-grow spinner-main-grow-style text-primary mr-1 " role="status">
    </div>
@endsection

@section('processSpinnerList')
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
            <li class="breadcrumb-item">Process</li>
            <li class="breadcrumb-item">
                <a href="{{ route('process.index') }}">Process List</a>
            </li>
            <li class="breadcrumb-item active">Update Process</li>
        </ol>
    </div>
@endsection

@section('content')

<div class="row">
    <div class="col-md-12 col-12 m-auto">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit Process</h4>
            </div>
            <div class="card-body">
                <form class="form form-vertical" action="{{ route('process.update', $process->id) }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-12">

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="title">Title<span class="text-danger"> *</span></label>
                                    <input type="text" id="title" class="form-control" name="title" value="{{ $process->title }}" />
                                    @error('user_name')
                                      <span style="color:red">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="descriptioin">Description<span class="text-danger"> *</span></label>
                                    <textarea type="text" id="descriptioin" class="form-control" name="description" >{{ $process->description }}</textarea>
                                    @error('user_review')
                                      <span style="color:red">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="process_photo">Process Photo<span class="text-danger"> *</span></label>
                                    <input type="file" name="process_photo" class="form-control">
                                    <br>
                                    @error('user_photo')
                                      <span style="color:red">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name">Preview Photo</label>

                                    <img width="100" height="70" src="{{ asset('uploads/process_photo') }}/{{ $process->process_photo }}" alt="">
                                    <br>

                                </div>
                            </div>


                        </div

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
