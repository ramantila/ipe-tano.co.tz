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
                    <h3>Business Info</h3>
                    <div class="card-header-right">
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        {{-- <div class="col-md-1"></div> --}}
                        <div class="col-md-12">
                            <form action="{{ url('business/'.$business_id.'/incomplete_from/store_step_business') }}"
                                method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mr-">
                                        <div class="form-group">
                                            <label for="title">Business Name<span class="text-red">*</span></label>
                                            <input id="title" type="text" class="form-control"
                                                value="{{ $business->business_name }}" name="businessname"
                                                placeholder="Business Name" required="">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="title">Registration </label>
                                            <input id="title" type="text" class="form-control"
                                                value="{{ $business->business_registration }}" name="registration"
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
                                                    <option value="{{ $key->id }}"
                                                        {{ $business->category_id == $key->id ? 'selected' : '' }}>
                                                        {{ $key->category_name }}</option>
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
                                                    <option value="{{ $key->id }}"
                                                        {{ $business->country_id == $key->id ? 'selected' : '' }}>
                                                        {{ $key->country_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-6 mr-">
                                        <div class="form-group">
                                            <label for="title">Business Email</label>
                                            <input id="title" type="email" class="form-control" name="email"
                                                value="{{ $business->business_email }}" placeholder="Business Email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="title">Business Phone</label>
                                            <input id="title" type="number" class="form-control"
                                                value="{{ $business->business_phone }}" name="phone"
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
                                                value="{{ $business->headquarters }}" name="headquarter"
                                                placeholder="Headquarters">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="title">Website</label>
                                                    <input id="title" type="text" class="form-control"
                                                        value="{{ $business->website }}" name="website"
                                                        placeholder="Website">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="title">Job Title<span class="text-red">*</span></label>
                                                    <input id="title" type="text" class="form-control"
                                                        value="{{ $business->job }}" name="job"
                                                        placeholder="Website" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-6 mr-">
                                        <div class="form-group">
                                            <label for="title">Headline/Slogan</label>
                                            <input id="title" type="text" class="form-control"
                                                value="{{ $business->slogan }}" name="slogan"
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

                                <div class="form-group">
                                    <label>Description<span class="text-red">*</span></label>
                                    <textarea class="form-control html-editor h-205" rows="4" id="myTextarea" name="description">{{ $business->description }}</textarea>
                                    <div id="errorMessage" style="color: red;"></div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mr-">

                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group text-right">
                                            <button type="submit"  id="submit" class="btn btn-primary">Next</button>
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
    <script>
        const textarea = document.getElementById("myTextarea");
        const errorMessage = document.getElementById("errorMessage");
        const submitbtn = document.getElementById("submit");
        const maxLength = 500; // Change this to your desired maxlength

        textarea.addEventListener("input", function () {
            const text = textarea.value;
            const textLength = text.length;

            if (textLength < maxLength) {
                errorMessage.textContent = `Maximum words (${textLength}/${maxLength})`;
                submitbtn.disabled = true;
            } else {
                errorMessage.textContent = "";
                submitbtn.disabled = false;
            }
        });
    </script>
@endsection
