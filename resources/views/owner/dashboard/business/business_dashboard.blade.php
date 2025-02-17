@extends('layouts.master')
@section('title')
    Manage Businesses
@endsection
@section('content')
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
{{--                <div class="page-header-title">--}}
{{--                    <i class="ik ik-shopping-cart bg-blue"></i>--}}
{{--                    <div class="d-inline">--}}
{{--                        <h5>Businesses</h5>--}}
{{--                        <span>List of businesses</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
            <div class="col-lg-4">
                <nav class="breadcrumb-container" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="https://radmin.themicly.com/dashboard"><i class="ik ik-home"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Manage Businesses</a>
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
{{--                        <a href="{{ url('business/terms-and-condition') }}" class="btn btn-sm  btn-rounded"--}}
{{--                           style="background: #B28910; color: #fff;">Add Business </a>--}}
                        {{-- @endif --}}
                    </div>
                    <div class="col col-sm-1">
                        <div class="card-options d-inline-block">

                            {{-- <div class="dropdown d-inline-block">
                            <a class="nav-link dropdown-toggle" href="#" id="moreDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                    class="ik ik-more-horizontal"></i></a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="moreDropdown">
                                <a class="dropdown-item" href="#">Delete</a>
                                <a class="dropdown-item" href="#">More Action</a>
                            </div>
                        </div> --}}
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
                                <th>BUSINESS NAME</th>
                                <th>CATEGORY</th>
{{--                                <th>OWNER</th>--}}
                                <th>CREATED</th>
                                <th>TYPE</th>
                                <th>STATUS</th>
                                <th>FORM STATUS</th>
                                <th>ACTION</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach ($data as $index => $key)
                                <tr>
                                    <td>{{ 1 + $index }}</td>
                                    <td>{{ $key->business_name }}</td>
                                    <td>{{ $key->category->category_name }}</td>
{{--                                    <td>--}}
{{--                                        @if ($key->user_id == null)--}}
{{--                                        @else--}}
{{--                                            {{ $key->user->first_name }} {{ $key->user->last_name }}--}}
{{--                                        @endif--}}

{{--                                    </td>--}}
                                    <td>{{ $key->created_at }}</td>
                                    <td>
                                        @if ($key->account == '')
                                            <label for="">Free account</label>
                                        @else
                                            <label for="">Paid Account</label>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($key->status == 1 && $key->claim == 0 && $key->verify == 0)
                                            <label class="badge badge-primary mb-1">Processing</label>
                                        @endif
                                        @if ($key->status == 1 && $key->claim == 0 && $key->verify == 1)
                                            <label class="badge badge-success mb-1">Verified</label>
                                        @endif
                                        @if ($key->status == 3 && $key->claim == 0 && $key->verify == 1)
                                            <label class="badge badge-danger mb-1">Suspended</label>
                                        @endif


                                    </td>
                                    <td>
                                        @if (empty($key->letter) || empty($key->business_licence) || empty($key->company_reg))
                                            <label class="badge badge-danger mb-1">Incomplete</label>
                                        @else
                                            <label class="badge badge-success mb-1">Complete</label>
                                        @endif
                                    </td>

                                    <td>
                                        <div class="dropdown d-inline-block">

                                            <a class="nav-link dropdown-toggle" href="#" id="moreDropdown"
                                               role="button" data-toggle="dropdown" aria-haspopup="true"
                                               aria-expanded="false">
                                                <i class="ik ik-more-vertical"></i>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item"
                                                   href="{{ url( 'dashbard/all-business/'. $key->id .'/analytics') }}"><i
                                                        class="ik ik-eye"></i> View Analytics </a>
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
@endsection
