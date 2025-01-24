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
                    <h3>Update Business</h3>
                    <div class="card-header-right">
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        {{-- <div class="col-md-1"></div> --}}
                        <div class="col-md-12">
                            <form action="{{ url('business/'.$business->id.'/update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mr-">
                                        <div class="form-group">
                                            <label for="title">Business Name<span class="text-red">*</span></label>
                                            <input id="title" type="text" class="form-control" 
                                            name="businessname"
                                            value="{{ $business->business_name }}"
                                            placeholder="Business Name" required="">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="title">Registration </label>
                                            <input id="title" type="text" class="form-control" 
                                            name="registration"
                                            value="{{ $business->business_registration }}"
                                            placeholder="Registration">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-6 mr-">
                                        <div class="form-group">
                                            <label for="title">Category<span class="text-red">*</span></label>
                                            <select class="form-control select2" name="category_id" required="">
                                                <option value="">Select Category</option>
                                                @foreach ($categories as $key)
                                                    <option value="{{ $key->id }}" {{ $business->category_id == $key->id ? 'selected' : '' }} >{{ $key->category_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="title">Country <span class="text-red">*</span></label>
                                            <select class="form-control select2" name="country_id" required="">
                                                <option value="">Select Country</option>
                                                @foreach ($countries as $key)
                                                    <option value="{{ $key->id }}" {{ $business->country_id == $key->id ? 'selected' : '' }}>{{ $key->country_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-6 mr-">
                                        <div class="form-group">
                                            <label for="title">Business Email</label>
                                            <input id="title" type="email" class="form-control" 
                                            name="email"
                                            value="{{ $business->business_email }}"
                                            placeholder="Business Email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="title">Business Phone</label>
                                            <input id="title" type="number" class="form-control" 
                                            name="phone"
                                            value="{{ $business->business_phone }}"
                                            placeholder="Business Phone">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-6 mr-">
                                        <div class="form-group">
                                            <label for="title">Headquarters</label>
                                            <input id="title" type="text" class="form-control" 
                                            name="headquarter"
                                            value="{{ $business->headquarters }}"
                                            placeholder="Headquarters">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="title">Website</label>
                                            <input id="title" type="text" class="form-control" 
                                            name="website"
                                            value="{{ $business->website }}"
                                            placeholder="Website">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-6 mr-">
                                        <div class="form-group">
                                            <label for="title">Headline/Slogan</label>
                                            <input id="title" type="text" class="form-control" 
                                            name="slogan"
                                            value="{{ $business->slogan }}"
                                            placeholder="Headline/Slogan">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>File upload</label>
                                            <input type="file" name="img[]" class="file-upload-default">
                                            <div class="input-group col-xs-12">
                                                <input type="text" class="form-control file-upload-info" disabled
                                                    placeholder="Upload Image" name="logo_upload">
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
                                    </div>

                                    <div class="col-md-6">
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
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-6 mr-">
                                        <div class="form-group">
                                            <label>Company registration</label>
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
                                    </div>

                                    <div class="col-md-6">
                                      
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control html-editor h-205" rows="10" name="details">{{ $business->description }}</textarea>

                                </div>

                                <div class="row">
                                    <div class="col-md-6 mr-">

                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group text-right">
                                            <button type="submit" class="btn btn-primary">Save</button>
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
