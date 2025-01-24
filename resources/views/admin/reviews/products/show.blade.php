@extends('layouts.master')
@section('title')
View Review
@endsection
@section('content')
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    {{-- <i class="ik ik-unlock bg-blue"></i> --}}
                    <div class="d-inline">
                        <h5>View Review</h5>
                        {{-- <span>List of Roles</span> --}}
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
                            <a href="#">View Review</a>
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
                            @if ($review->products->logo != '')
                                <img src="{{ url('images/' . $review->products->logo) }}" alt=""
                                    class="rounded-circle img-100 align-top mr-15">
                            @else
                                <img src="/themes/img/ipetano-logo-primary.png" alt=""
                                    class="rounded-circle img-100 align-top mr-15">
                            @endif
                        </div>
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-md-4 mt-15">
                                    <h4>{{ $review->products->product_name }}</h4>
                                    @php
                                        $stars = $review->products->total_rating; // Get the integer part of the rating
                                        $half_star = $review->products->total_rating - $stars >= 0.5; // Check if there is a half star
                                    @endphp
                                    @for ($i = 1; $i <= 5; $i++)
                                        @if ($i <= $stars)
                                            <img src="/themes/img/colored.svg" alt="" width="17"
                                                class="logo_sticky">
                                        @elseif($half_star && $i == $stars + 1)
                                            {{-- <i class="fas fa-star-half-alt"></i> --}}
                                        @else
                                            <img src="/themes/img/gray.svg" alt="" width="17"
                                                class="logo_sticky">
                                        @endif
                                    @endfor
                                </div>
                                <div class="col-md-8 text-right">
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
                    <h3>Review Details</h3>
                    <div class="card-header-right">
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th width="45%">Reason</th>
                                <td width="45%"> {{ $review->review_reason }} </td>
                            </tr>
                            <tr>
                                <th style="width: 5%">User Name</th>
                                <td>
                                    {{ $review->user->first_name }} {{ $review->user->last_name }}
                                </td>
                            </tr>
                            <tr>
                                <th width="45%">Review</th>
                                <td width="45%"> {{ $review->review }} </td>
                            </tr>
                            <tr>
                                <th width="45%">Created</th>
                                <td width="45%"> {{ $review->created_at }}</td>
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
                <div class="card-header">
                    <h3>Review Management</h3>
                    <div class="card-header-right">
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{ url('reviews/products/review/'.$review->id.'/update') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group" style="margin-left: 17px; margin-right: 17px;">
                                            <label for="title">Status<span class="text-red">*</span></label>
                                            <select class="form-control select2" name="status" required="">
                                                <option value="">Select Status</option>
                                                <option value="1">Approve</option>
                                                <option value="3">Terminate</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body template-demo">
                                    <button type="submit" class="btn btn-success">Change Status</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
