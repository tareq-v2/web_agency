@extends('layouts.dashboard')

{{-- title --}}
@section('title')
   Testimonials
@endsection

@section('testimonialSpinner')
    <div class="spinner-grow spinner-main-grow-style text-primary mr-1 " role="status">
    </div>
@endsection


{{-- content --}}
@section('content')
<section class="banner-main-section py-5 all-pages-input" id="main">
    <div class="row">
        <div class="col-12">
            <h2 class="dash-ad-title m-0 mb-3">Admin Dashboard | <span class="dash-span-title">Show Testimonial</span></h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Testimonial </h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="table-responsive">
                                            <table  class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                             User Name
                                                        </th>
                                                        <td>
                                                            {{ $testimonial->user_name }}
                                                        </td>
                                                    </tr>                                
                                                                                                            
                                                    <tr>
                                                        <th>
                                                             User Review 
                                                        </th>
                                                        <td>
                                                            {{ $testimonial->user_review }}
                                                        </td>
                                                    </tr>   
                                                    
                                                    <tr>
                                                        <th>
                                                             User  photo
                                                        </th>
                                                        <td>
                                                   
                                                            <img src="{{ asset('uploads/images/testimonial') }}/{{ $testimonial->user_photo }}" alt="not found" width="70" height="70">
                                                        </td>
                                                    </tr>
                                                                                                            
                                                </tbody>
                                            </table>
                                            <a class="btn mt-1 btn-success" href="{{ route('testimonial.index') }}">Return Back</a>
                                            <a class="btn edit-btn mt-1 btn-primary" href="{{ route('testimonial.edit', $testimonial->id) }}">Edit</a>

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