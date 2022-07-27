@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
     Faq
@endsection

{{-- Active Menu --}}
@section('FaqList')
    active
@endsection

@section('faqSpinner')
    <div class="spinner-grow spinner-main-grow-style text-primary mr-1 " role="status">
    </div>
@endsection

@section('faqSpinnerList')
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
            <li class="breadcrumb-item">Faq</li>
            <li class="breadcrumb-item active">Faq List</li>
        </ol>
    </div>
@endsection

{{-- Main Content --}}
@section('content')
<div class="row" id="basic-table">
    <div class="col-md-12 col-12 m-auto">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Faq List</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="data_table">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Question</th>
                                <th>Answer</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($all_faqs_data as $item)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                
                                
                                <td>
                                    <a href="{{ route('faq.show', $item->id) }}">{{ $item->faq_question }}</a>
                                </td>
                                <td>
                                    {{-- <div style="width:200px; height: 100px; overflow-y: scroll;">
                                        {{ $item->faq_answer }}
                                    </div> --}}
                                    {!! \Str::limit($item->faq_answer, 80) !!}
                                </td>

                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-sm dropdown-toggle hide-arrow" data-toggle="dropdown">
                                            <i data-feather="more-vertical"></i>
                                        </button>
                                        
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('faq.show', $item->id) }}">
                                                <i data-feather='eye'></i>
                                                <span>Show</span>
                                            </a>
                                            <a class="dropdown-item" href="{{ route('faq.edit', $item->id) }}">
                                                <i data-feather='edit'></i>
                                                <span>Edit</span>
                                            </a>
                                            <a class="dropdown-item" data-toggle="modal" data-target="#exampleModalCenter{{ $item->id }}" title="Delete">
                                                <i data-feather="trash" class="mr-50"></i>
                                                <span>Delete</span>
                                            </a>
                                           
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <!-- Delete Modal -->
                            <div class="modal fade" id="exampleModalCenter{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Testimonial</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        Are You Sure Delete Data?
                                      </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <form action="{{ route('faq.destroy', $item->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-primary">Delete</button>
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