@extends('layouts.master')
@section('title')
    Add Product
@endsection
@section('content')
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    {{-- <i class="ik ik-shopping-cart bg-blue"></i> --}}
                    <div class="d-inline">
                        <h5>Product</h5>
                        <span>Add Product</span>
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
                            <a href="#">Product</a>
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
                    <h3>Create Product</h3>
                    <div class="card-header-right">
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        {{-- <div class="col-md-1"></div> --}}
                        <div class="col-md-12">
                            <form action="{{ url('businesses/'.$business_id.'/product/store') }}" method="POST"  enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="title">Product Name<span class="text-red">*</span></label>
                                    <input id="title" type="text" class="form-control" name="product_name"
                                        placeholder="Product Name" required="">
                                    <div class="help-block with-errors"></div>
                                </div>


                                <div class="form-group">
                                    <label>File upload</label>
                                    <input type="file" name="product_logo" class="file-upload-default">
                                    <div class="input-group col-xs-12">
                                        <input type="text" class="form-control file-upload-info" disabled
                                            placeholder="Upload Image" name="product">
                                        <span class="input-group-append">
                                            <button class="file-upload-browse btn btn-primary"
                                                type="button">Upload</button>
                                        </span>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label>Description<span class="text-red">*</span></label>
                                    <textarea class="form-control html-editor h-205" rows="4"  id="myTextarea" name="details" required></textarea>
                                    <div id="errorMessage" style="color: red;"></div>

                                </div>

                                <div class="row">
                                    <div class="col-md-6 mr-">

                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group text-right">
                                            <button type="submit"  id="submit" class="btn btn-primary">Save</button>
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
