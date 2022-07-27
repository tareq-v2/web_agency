@extends('layouts.dashboard')

{{-- title --}}
@section('title')
 Service
@endsection


{{-- content --}}
@section('content')
<section class="banner-main-section py-5 all-pages-input" id="main">
    <div class="row">
        <div class="col-12">
            <h2 class="dash-ad-title m-0 mb-3">Admin Dashboard | <span class="dash-span-title">View Service</span></h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"> Service </h4>
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
                                                            {{ $get_single_service_data->service_name }}
                                                        </td>
                                                    </tr>  

                                                    <tr>
                                                        <th>
                                                             Short Description
                                                        </th>
                                                        <td>
                                                            {{ $get_single_service_data->service_short_description }}
                                                        </td>
                                                    </tr>                                                                              
                                                    <tr>
                                                        <th>
                                                             Long Description
                                                        </th>
                                                        <td>
                                                            {!! $get_single_service_data->service_long_description !!}
                                                        </td>
                                                    </tr>                                                                       
                                                                                                                                
                                                    <tr>
                                                        <th>
                                                             icon
                                                        </th>
                                                        <td>
                                                            <img src="{{ asset('uploads/images/service') }}/{{ $get_single_service_data->service_icon }}" alt="not found" width="70" height="70">
                                                        </td>
                                                    </tr> 

                                                    <tr>
                                                        <th>
                                                             image
                                                        </th>
                                                        <td>
                                                            <img src="{{ asset('uploads/images/service') }}/{{ $get_single_service_data->service_image }}" alt="not found" width="70" height="70">
                                                        </td>
                                                    </tr> 
                                                    
                                                    <tr>
                                                        <th>
                                                             Created At
                                                        </th>
                                                        <td>
                                                            {!! $get_single_service_data->created_at->format('d-m-Y') !!}
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                            <a class="btn mt-1 btn-success" href="{{ route('service.index') }}">Return Back</a>
                                            <a class="btn edit-btn mt-1 btn-primary" href="{{ route('service.edit', $get_single_service_data->id) }}">Edit</a>

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