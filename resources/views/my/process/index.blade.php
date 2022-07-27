@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    Process
@endsection

{{-- Active Menu --}}
@section('processList')
    active
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
            <li class="breadcrumb-item active">
                Process
            </li>
        </ol>
    </div>
@endsection


{{-- Main Content --}}
@section('content')
    <div class="row" id="basic-table">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="col-6">
                        <h4 class="card-title">Process List</h4>
                    </div>
                    <div class="col-6 text-right">
                        <a class="btn btn-info" href="{{ route('process.create') }}">Create Process</a>
                        <a class="btn btn-info" href="{{ route('button.index') }}">Update Button</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="data_table">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Photo</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($processes as $process)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $process->title }}</td>
                                        <td>{{ \Str::limit($process->description, 80) }}</td>
                                        <td>
                                            <img src="{{ asset('uploads/process_photo') }}/{{ $process->process_photo }}"
                                                alt="No Photo" width="100">
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow"
                                                    data-toggle="dropdown">
                                                    <i data-feather="more-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item"
                                                        href="{{ route('process.show', $process->id) }}"><i
                                                            data-feather="edit" class="mr-50"></i>Show</a>
                                                    <a class="dropdown-item"
                                                        href="{{ route('process.edit', $process->id) }}"><i
                                                            data-feather="edit" class="mr-50"></i>Edit</a>
                                                        <a class="dropdown-item"data-toggle="modal" data-target="#exampleModal{{$process->id}}">
                                                            <i data-feather="trash" class="mr-50"></i>
                                                            <span>Delete</span>
                                                        </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- modal -->
                                    <div class="modal fade" id="exampleModal{{$process->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h3 class="modal-title" id="exampleModalLabel">{{ $process->title }} Delete </h3>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                                            <div class="modal-body">
                                            Are You Sure?
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                            <form action="{{ route('process.destroy', $process->id) }}" method="POST">
                                                @csrf
                                                @method("delete")
                                                <button type="submit" class="btn btn-danger">Yes Delete</button>
                                            </form>
                                            </div>
                                        </div>
                                        </div>
                                        </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
