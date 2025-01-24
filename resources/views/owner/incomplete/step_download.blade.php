@extends('layouts.master')
@section('title')
Incomplete Business
@endsection
@section('content')
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-shopping-cart bg-blue"></i>
                    <div class="d-inline">
                        <h5>Businesses</h5>
                        <span>Add Business</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <nav class="breadcrumb-container" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="https://radmin.themicly.com/dashboard"><i class="ik ik-home"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Business</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- start message area-->
        <div class="col-md-12">
        </div> <!-- end message area-->
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Download verifaction</h3>
                    <div class="card-header-right">
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-9 col-xs-12">
                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero.
                                Sed cursus ante dapibus diam. </p> <a
                                href="/images/download/flyer_connex_compressed.pdf" target="_blank"
                                id="next_link" class="btn btn-outline-info">Download verification letter</a> 
                                
                                <a
                                href="{{ url('business/'.$business_id.'/incomplete_from/step_upload') }}" 
                                id="next_link" class="btn btn-outline-info"> Next </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
