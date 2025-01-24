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
                    <h3>Create Sale</h3>
                    <div class="card-header-right">
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        {{-- <div class="col-md-1"></div> --}}
                        <div class="col-md-12">
                            <form action="{{ url('business/'.$business_id.'/incomplete_from/step_upload') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                
                                <div class="row">
                                    <div class="col-md-6 mr-">
                                        <div class="form-group">
                                            <label>Verification letter</label>
                                            <input type="file" name="letter"
                                                class="file-upload-default">
                                            <div class="input-group col-xs-12">
                                                <input type="text"
                                                    class="form-control file-upload-info" disabled
                                                    placeholder="Upload Verification Letter" name="letter">
                                                <span class="input-group-append">
                                                    <button class="file-upload-browse btn btn-theme"
                                                        type="button">Upload</button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Business Licence</label>
                                            <input type="file" name="business_licence"
                                                class="file-upload-default">
                                            <div class="input-group col-xs-12">
                                                <input type="text"
                                                    class="form-control file-upload-info" disabled
                                                    placeholder="Upload Business Licence"
                                                    name="business_licence">
                                                <span class="input-group-append">
                                                    <button class="file-upload-browse btn btn-theme"
                                                        type="button">Upload</button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-6 mr-">
                                        <div class="form-group">
                                            <label>Company registration certificate</label>
                                            <input type="file" name="company_reg"
                                                class="file-upload-default">
                                            <div class="input-group col-xs-12">
                                                <input type="text"
                                                    class="form-control file-upload-info" disabled
                                                    placeholder="Upload Company Registration Certificate" name="company_reg">
                                                <span class="input-group-append">
                                                    <button class="file-upload-browse btn btn-theme"
                                                        type="button">Upload</button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                      
                                    </div>

                                </div>


                                <div class="row">
                                    <div class="col-md-6 mr-">

                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group text-right">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                        {{-- <div class="col-md-1"></div> --}}
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
