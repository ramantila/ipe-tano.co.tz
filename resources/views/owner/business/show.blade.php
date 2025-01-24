@extends('layouts.master')
@section('title')
Show Business
@endsection
@section('content')
<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ik ik-shopping-cart bg-blue"></i>
                <div class="d-inline">
                    <h5>Businesses Details</h5>
                    {{-- <span>Add Business</span> --}}
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
                        <a href="{{ url('business/view') }}">Manage Business</a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2">
                        @if ($business->logo != '')
                        <img src="{{ url('images/business/' . $business->logo) }}"
                            class="rounded-circle img-100 align-top mr-15">
                        @else
                        <img class="rounded-circle img-100 align-top mr-15" src="{{ url('images/default.png') }}"
                            alt="No Image">
                        @endif
                    </div>
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-4 mt-15">
                                <h6>{{ $business->business_name }}</h6>
                                *****
                            </div>
                            <div class="col-md-8 text-right">
                                <a href="#" class="btn btn-sm  btn-rounded"
                                    style="background: #B28910; color: #fff;">Visit Public Profile </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Basic Details</h3>
                <div class="card-header-right">
                </div>
            </div>
            <div class="card-body">
                <table class="table">
                    <tbody>
                        <tr>
                            <th style="width: 5%">Email</th>
                            <td>{{ $business->business_email }}</td>
                        </tr>
                        <tr>
                            <th width="45%">Phone</th>
                            <td width="45%">{{ $business->business_phone }}</td>
                        </tr>
                        <tr>
                            <th width="45%">Website</th>
                            <td width="45%">{{ $business->website }}</td>
                        </tr>
                        <tr>
                            <th width="45%">Country</th>
                            <td width="45%">{{ $business->country->country_name }}</td>
                        </tr>
                        <tr>
                            <th width="45%">Category</th>
                            <td width="45%">{{ $business->category->category_name }}</td>
                        </tr>
                        <tr>
                            <th width="45%">Headquarters</th>
                            <td width="45%">{{ $business->headquarters }}</td>
                        </tr>
                        <tr>
                            <th width="45%">Registration</th>
                            <td width="45%">{{ $business->business_registration }}</td>
                        </tr>
                        <tr>
                            <th width="45%">Owner</th>
                            @if ($business->user_id == '')
                            <td width="45%"></td>
                            @else
                            <td width="45%">{{ $business->user->first_name }}
                                {{ $business->user->last_name }}</td>
                            @endif

                        </tr>
                        <tr>
                            <th width="45%">Slogan</th>
                            <td width="45%">{{ $business->slogan }}</td>
                        </tr>
                        <tr>
                            <th width="45%">Description</th>
                            <td width="45%">{{ $business->description }}</td>
                        </tr>
                        <tr>
                            <th width="45%">Created</th>
                            <td width="45%">{{ $business->created_at }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-pills custom-pills" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="product-tab" data-toggle="pill" href="#current-month"
                            role="tab" aria-controls="pills-timeline" aria-selected="true">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="services-tab" data-toggle="pill" href="#last-month" role="tab"
                            aria-controls="pills-profile" aria-selected="false">Services</a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="current-month" role="tabpanel"
                        aria-labelledby="product-tab">
                        <div class="card-body">
                            <?php $products = App\Models\Product::where('business_id', $business->id)->get(); ?>
                            <div class=" mt-0">
                                <div>
                                    <div class="row">
                                        @if ($products->count() > 0)
                                        @foreach ($products as $key)
                                        <div class="col-lg-3 col-md-6 mb-20">

                                            <img src="{{ url('images/' . $key->logo) }}" class="img-fluid rounded" style="height: 200px;">
                                            <br>
                                            <br>
                                            <a href="{{ url('businesses/' . $business->id . '/product/create') }}" class="mr-5"
                                                style="color: #B28910; margin-left: 35%">Add
                                                Product</a>

                                        </div>
                                        @endforeach
                                        @else
                                        <div class="col-md-12 text-center">
                                            <h4>No Products Found.</h4><br>
                                            <a style="text-align:center; margin-left: 42px; color: #B28910"
                                                href="{{ url('businesses/' . $business->id . '/product/create') }}"><span
                                                    class="remove-mobile">Add Product
                                                </span>
                                            </a>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="last-month" role="tabpanel" aria-labelledby="services-tab">
                        <div class="card-body">
                            <?php $services = App\Models\Service::where('business_id', $business->id)->get(); ?>
                            <div class=" mt-0">
                                <div>
                                    <div class="row">
                                        @if ($services->count() > 0)
                                        @foreach ($services as $key)
                                        <div class="col-lg-3 col-md-6 mb-20">

                                            <img src="{{ url('images/back.png') }}" class="img-fluid rounded" style="height: 200px;">
                                            <br>
                                            <br>
                                            <a href="{{ url('businesses/' . $business->id . '/product/create') }}" class="mr-5"
                                                style="color: #B28910; margin-left: 35%">Add
                                                Service</a>

                                        </div>
                                        @endforeach
                                        @else
                                        <div class="col-md-12 text-center">
                                            <h4>No Products Found.</h4><br>
                                            <a style="text-align:center; margin-left: 42px; color: #B28910"
                                                href="{{ url('businesses/' . $business->id . '/product/create') }}"><span
                                                    class="remove-mobile">Add Service
                                                </span>
                                            </a>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection