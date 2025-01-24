@extends('layouts.master')
@section('title')
Categories
@endsection
@section('content')
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    {{-- <i class="ik ik-shopping-cart bg-blue"></i> --}}
                    <div class="d-inline">
                        <h5>Categories</h5>
                        <span>List of Categories</span>
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
                            <a href="#">Categories</a>
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
                <div class="card-header row">
                    <div class="col col-sm-2">
                        {{-- @if (Sentinel::hasAccess('sales.create')) --}}
                        {{-- <a href="#" class="btn btn-sm  btn-rounded" style="background: #B28910; color: #fff;">Add
                            Category </a> --}}

                            <button type="button" class="btn btn-sm  btn-rounded" style="background: #B28910; color: #fff;" data-toggle="modal"
                                data-target="#exampleModalCenter">Add Category</button>
                        {{-- @endif --}}
                    </div>
                    <div class="col col-sm-1">
                        <div class="card-options d-inline-block">
                        </div>
                    </div>
                    <div class="col col-sm-6">

                    </div>
                    <div class="col col-sm-3">
                    </div>
                </div>
                <div class="card-body">
                    <div class="dt-responsive">
                        {{-- @if (Sentinel::hasAccess('sales.view')) --}}
                        <table id="data_table" class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>CATEGORY</th>
                                    <th class="text-center">ICON</th>
                                    <th class="text-center">ACTION</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($categories as $index => $key)
                                    <tr>
                                        <td>{{ 1 + $index }}</td>
                                        <td>{{ $key->category_name }}</td>
                                        <td class="text-center">
                                            <img src="{{ url('images/category/' . $key->category_icon) }}" alt=""
                                                width="30" height="30">
                                        </td>
                                        <td class="text-center">
                                            <div class="dropdown d-inline-block">

                                                <a class="nav-link dropdown-toggle" href="#" id="moreDropdown"
                                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="ik ik-more-vertical"></i>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-right">

                                                    <a class="dropdown-item" href="#accountEdit" data-toggle="modal"
                                                    data-target="#setedit{{ $key->id }}">
                                                    <i class="ik ik-edit"></i> Edit </a>

                                                    <a class="dropdown-item" href="#accountEdit" data-toggle="modal"
                                                        data-target="#delete{{ $key->id }}">
                                                        <i class="ik ik-trash"></i> Delete </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        {{-- @endif --}}
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterLabel">Add Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <form action="{{ url('categories/store') }}"  method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">

                    <div class="form-group">
                        <label for="title">Category<span class="text-red">*</span></label>
                        <input id="title" type="text" class="form-control" name="category_name" value=""
                            placeholder="Category" required="">
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
                        <div class="form-group">
                            <label>File upload</label>
                            <input type="file" name="cat_icon" class="file-upload-default">
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" disabled
                                    placeholder="Upload Image" name="logo_upload">
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn" btn-rounded" style="background: #B28910; color: #fff;"
                                        type="button">Upload</button>
                                </span>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn" btn-rounded" style="background: #B28910; color: #fff;">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

@foreach ($categories as $index => $key)
<div class="modal fade" id="setedit{{ $key->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterLabel">Edit Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <form action="{{ url('categories/'.$key->id.'/update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">

                    <div class="form-group">
                        <label for="title">Category<span class="text-red">*</span></label>
                        <input id="title" type="text" class="form-control" name="category_name" value="{{ $key->category_name }}"
                            placeholder="Category" required="">
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
                        <div class="form-group">
                            <label>File upload</label>
                            <input type="file" name="cat_icon" class="file-upload-default">
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" disabled
                                    placeholder="Upload Image" name="logo_upload">
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn" btn-rounded" style="background: #B28910; color: #fff;"
                                        type="button">Upload</button>
                                </span>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn" btn-rounded" style="background: #B28910; color: #fff;">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach

    @foreach ($categories as $index => $key)
<div class="modal fade" id="delete{{ $key->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterLabel">Delete</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <form action="{{ url('categories/' . $key->id . '/delete') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <span>Are you sure, You want to Delete this ?</span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-danger">Yes</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
@endsection
