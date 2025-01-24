@extends('layouts.master')
@section('title')
    Add Business
@endsection
@section('content')
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-shopping-cart bg-blue"></i>
                    <div class="d-inline">
                        <h5>Businesses</h5>
                        <span>Claims Business</span>
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
                            <a href="#">Claims Business </a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Claims Business</h3>
                    <div class="card-header-right">
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="card-body">
                            <ul class="nav nav-pills custom-pills" id="pills-tab" role="tablist">

                                <li class="nav-item">
                                    <a class="nav-link active" id="product-tab" data-toggle="pill" href="#current-month"
                                        role="tab" aria-controls="pills-timeline" aria-selected="true">Download</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="claims-tab" data-toggle="pill" href="#current-new"
                                        role="tab" aria-controls="pills-profile" aria-selected="false">Claims Business
                                        Info</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="services-tab" data-toggle="pill" href="#last-month"
                                        role="tab" aria-controls="pills-profile" aria-selected="false">Claims Business
                                        Upload</a>
                                </li>
                            </ul>
                            <form action="{{ url('claims/' . $claim_id . '/store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="current-month" role="tabpanel"
                                        aria-labelledby="product-tab">

                                        <div class="card-body">
                                            <div class=" mt-0">
                                                <div>
                                                    <div class="row">
                                                        Download Verification letter &nbsp; <a  href="{{ url('images/download/flyer_connex_compressed.pdf') }}"  target="_blank" class="btn btn-sm"
                                                        style="background: #B28910; color: #fff;">Download </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="current-new" role="tabpanel"
                                        aria-labelledby="claims-tab">

                                        <div class="card-body">
                                            {{-- <?php $products = App\Models\Product::where('business_id', $business->id)->get(); ?> --}}
                                            <div class=" mt-0">
                                                <div>
                                                    <div class="row">
                                                        {{-- <div class="col-md-1"></div> --}}
                                                        <div class="col-md-12">
                                                            @csrf
                                                            <div class="row">
                                                                <div class="col-md-6 mr-">
                                                                    <div class="form-group">
                                                                        <label for="title">Business Name<span
                                                                                class="text-red">*</span></label>
                                                                        <input id="title" type="text"
                                                                            class="form-control" name="businesstitle"
                                                                            value="{{ $claimdetails->business_name }}"
                                                                            placeholder="Business Name" required="">
                                                                        <div class="help-block with-errors"></div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="title">Registration </label>
                                                                        <input id="title" type="text"
                                                                            class="form-control" name="registration"
                                                                            placeholder="Registration">
                                                                        <div class="help-block with-errors"></div>
                                                                    </div>
                                                                </div>

                                                            </div>


                                                            <div class="row">
                                                                <div class="col-md-6 mr-">
                                                                    <div class="form-group">
                                                                        <label for="title">Business Email</label>
                                                                        <input id="title" type="email"
                                                                            class="form-control" name="email"
                                                                            value="{{ $claimdetails->business_email }}"
                                                                            placeholder="Business Email">
                                                                        <div class="help-block with-errors"></div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="title">Business Phone</label>
                                                                        <input id="title" type="number"
                                                                            class="form-control" name="phone"
                                                                            value="{{ $claimdetails->business_phone }}"
                                                                            placeholder="Business Phone">
                                                                        <div class="help-block with-errors"></div>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-6 mr-">
                                                                    <div class="form-group">
                                                                        <label for="title">Job Title<span
                                                                            class="text-red">*</span></label>
                                                                        <input id="title" type="text"
                                                                            class="form-control" name="job"
                                                                            value="{{ $claimdetails->business_email }}"
                                                                            placeholder="Job Title" required>
                                                                        <div class="help-block with-errors"></div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    {{-- <div class="form-group">
                                                                        <label for="title">Business Phone</label>
                                                                        <input id="title" type="number"
                                                                            class="form-control" name="phone"
                                                                            value="{{ $claimdetails->business_phone }}"
                                                                            placeholder="Business Phone">
                                                                        <div class="help-block with-errors"></div>
                                                                    </div> --}}
                                                                </div>

                                                            </div>


                                                            <div class="row">
                                                                <div class="col-md-6 mr-">

                                                                </div>

                                                                <div class="col-md-6">
                                                                    {{-- <div class="form-group text-right">
                                                                    <button type="submit" class="btn btn-primary">Next</button>
                                                                </div> --}}
                                                                </div>

                                                            </div>
                                                        </div>
                                                        {{-- <div class="col-md-1"></div> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="last-month" role="tabpanel"
                                        aria-labelledby="services-tab">
                                        <div class="card-body">
                                            <div class=" mt-0">
                                                <div>
                                                    <div class="row">
                                                        {{-- <div class="col-md-1"></div> --}}
                                                        <div class="col-md-12">

                                                            @csrf

                                                            <div class="form-group">
                                                                <label>Verification letter</label>
                                                                <input type="file" name="letter"
                                                                    class="file-upload-default">
                                                                <div class="input-group col-xs-12">
                                                                    <input type="text"
                                                                        class="form-control file-upload-info" disabled
                                                                        placeholder="Upload Image" name="letter">
                                                                    <span class="input-group-append">
                                                                        <button class="file-upload-browse btn btn-theme"
                                                                            type="button">Upload</button>
                                                                    </span>
                                                                </div>
                                                            </div>


                                                            <div class="form-group">
                                                                <label>Business Licence</label>
                                                                <input type="file" name="business_licence"
                                                                    class="file-upload-default">
                                                                <div class="input-group col-xs-12">
                                                                    <input type="text"
                                                                        class="form-control file-upload-info" disabled
                                                                        placeholder="Upload Image"
                                                                        name="business_licence">
                                                                    <span class="input-group-append">
                                                                        <button class="file-upload-browse btn btn-theme"
                                                                            type="button">Upload</button>
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label>Company registration certificate</label>
                                                                <input type="file" name="company_reg"
                                                                    class="file-upload-default">
                                                                <div class="input-group col-xs-12">
                                                                    <input type="text"
                                                                        class="form-control file-upload-info" disabled
                                                                        placeholder="Upload Image" name="company_reg">
                                                                    <span class="input-group-append">
                                                                        <button class="file-upload-browse btn btn-theme"
                                                                            type="button">Upload</button>
                                                                    </span>
                                                                </div>
                                                            </div>


                                                            <div class="row">
                                                                <div class="col-md-6 mr-">

                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="form-group text-right">
                                                                        <button type="submit"
                                                                            class="btn btn-theme">Save</button>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        {{-- <div class="col-md-1"></div> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
