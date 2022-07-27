@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    {{ config('app.name') }} | Gallery
@endsection

{{-- Active Menu --}}
@section('gallery')
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
                Gallery Update
            </li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-8">
            <form method="POST" action="{{ route('gallery.update', $gallery->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Service Name</label>
                    <select name="service_id" class="form-control">
                        @foreach ($services as $service)
                            <option value="{{ $service->id }}" {{ $service->id == $gallery->service_id ? 'selected' : '' }}>{{ $service->service_title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Photo</label>
                    <input type="file" id="strategy_photo" class="form-control" name="strategy_photo">
                </div>
                <div>
                    <label for="">Old Photo </label>
                    <img src="{{ asset('uploads/gallery_photos') }}/{{ $gallery->gallery_photo }}" alt="No Photo" width="100">
                </div>
                <button type="submit" class="btn btn-primary mt-4">Update</button>
            </form>
        </div>
    </div>
@endsection
