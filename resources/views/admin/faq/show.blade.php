@extends('layouts.dashboard')

{{-- title --}}
@section('title')
 Faq
@endsection

@section('faqSpinner')
    <div class="spinner-grow spinner-main-grow-style text-primary mr-1 " role="status">
    </div>
@endsection


{{-- content --}}
@section('content')
<section class="banner-main-section all-pages-input" id="main">
    <div class="row">
        <div class="col-12">
            <h2 class="dash-ad-title m-0 mb-3">Admin Dashboard | <span class="dash-span-title">Show Faq</span></h2>
        </div>
    </div>
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"> Show </h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="table-responsive">
                                            <table  class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                             Question
                                                        </th>
                                                        <td>
                                                            {{ $faq->faq_question }}
                                                        </td>
                                                    </tr>                                
                                                    <tr>
                                                        <th>
                                                             Answer
                                                        </th>
                                                        <td>
                                                            {!! $faq->faq_answer !!}
                                                        </td>
                                                    </tr>                                                                              
                                                </tbody>
                                            </table>
                                            <a class="btn mt-1 btn-success" href="{{ route('faq.index') }}">Return Back</a>
                                            <a class="btn edit-btn mt-1 btn-primary" href="{{ route('faq.edit', $faq->id) }}">Edit</a>

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