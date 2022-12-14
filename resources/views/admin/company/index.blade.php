@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    Home
@endsection

{{-- Active Menu --}}
@section('companyList')
    active
@endsection

@section('homeSpinner')
    <div class="spinner-grow spinner-main-grow-style text-primary mr-1 " role="status">
    </div>
@endsection
@section('homeSection2Spinner')
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
            <li class="breadcrumb-item ">Section 2</li>
            <li class="breadcrumb-item active">Update</li>
        </ol>
    </div>
@endsection

@section('content')
   <div class="row">
        <div class="col-md-12 col-12 m-auto">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Update This Section</h4>
                </div>
                <div class="card-body">
                    <form class="form form-vertical" action="{{ route('company.update', $data->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="title">Title<span class="text-danger"> *</span></label>
                                    <input type="text" id="title" class="form-control" name="title" value="{{ $data->title }}" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="description">Description<span class="text-danger">  *</span></label>
                                    <textarea type="text" id="description" class="form-control" name="description" cols="20" rows="3">{{ $data->description }}</textarea>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="button_text">Button Text <span class="text-danger"> *</span></label>
                                    <input type="text" name="button_text" class="form-control"  value="{{ $data->button_text }}">
                                    @error('button_text')
                                      <span style="color:red">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group col-12">
                                <label for="button_url">Button URL</label>
                                    <input type="text" name="button_url" class="form-control"  value="{{ $data->button_url }}">
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
