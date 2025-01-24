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
                    <h3>Enter Businesses Details Bellow</h3>
                    <div class="card-header-right">
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        {{-- <div class="col-md-1"></div> --}}
                        <div class="col-md-12">
                            <form action="{{ url('claims/search') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Business Name</label>
                                            <input type="file" name="img[]" class="file-upload-default">
                                            <div class="input-group col-xs-12">
                                                <input id="title" type="text" class="form-control"
                                                    placeholder="Business Name" name="businessname"
                                                    placeholder="Registration">
                                                <span class="input-group-append">
                                                    <button class=" btn btn-primary" type="submit">search</button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">

                                    </div>

                                </div>
                            </form>
                            @if (empty($businessname))
                            @else
                                @if ($claims->count() > 0)
                                    <div style="margin:20px;">
                                        <table id="simpletable" class="table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>BUSINESS NAME</th>
                                                    <th>STATUS</th>
                                                    <th class="text-center">ACTION</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($claims as $index => $claim)
                                                    <tr>
                                                        <td>{{ 1 + $index }}</td>
                                                        <td>{{ $claim->business_name }}</td>
                                                        @if ($claim->claim == 1)
                                                            <td>Not Available to claim</td>
                                                            <td class="text-center">
                                                                <a href="{{ url('business/terms-and-condition') }}"
                                                                    class="btn btn-sm  btn-rounded"
                                                                    style="background: #B28910; color: #fff;">Register Now
                                                                </a>
                                                            </td>
                                                        @else
                                                            <td>Available to claim</td>
                                                            <td class="text-center">
                                                                <a href="{{ url('claims/' . $claim->id . '/claim-details') }}"
                                                                    class="btn btn-sm  btn-rounded"
                                                                    style="background: #B28910; color: #fff;">Claim Now </a>
                                                            </td>
                                                        @endif

                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                @else
                                    <div style="margin:20px;">
                                        <table id="simpletable" class="table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>BUSINESS NAME</th>
                                                    <th>STATUS</th>
                                                    <th class="text-center">ACTION</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {{-- @foreach ($claims as $index => $claim) --}}
                                                    <tr>
                                                        <td>1</td>
                                                        <td>{{ $businessname }}</td>
                                                        <td>Available to register </td>
                                                        <td class="text-center">
                                                            <a href="{{ url('business/step-business-info') }}"
                                                                class="btn btn-sm  btn-rounded"
                                                                style="background: #B28910; color: #fff;">Register Now </a>
                                                        </td>
                                                    </tr>
                                                {{-- @endforeach --}}
                                            </tbody>
                                        </table>
                                    </div>
                                @endif
                            @endif
                        </div>
                        {{-- <div class="col-md-1"></div> --}}
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
