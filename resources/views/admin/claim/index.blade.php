@extends('layouts.master')
@section('title')
    Businesses Claims
@endsection
@section('content')
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    {{-- <i class="ik ik-shopping-cart bg-blue"></i> --}}
                    <div class="d-inline">
                        <h5>Businesses Claims</h5>
                        <span>List of businesses Claims</span>
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
                            <a href="{{ url('businesses-claims/view') }}">Businesses Claims</a>
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
                        <a href="{{ url('businesses/create') }}" class="btn btn-sm  btn-rounded"
                            style="background: #B28910; color: #fff;">Add Business </a>
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
                                    <th>CLAIM OWNER</th>
                                    <th>CREATED</th>
                                    <th>STATUS</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($businesses as $index => $key)
                                    <tr>
                                        <td>{{ 1 + $index }}</td>
                                        <td>{{ $key->business_name }}</td>
                                        <td>{{ $key->category->category_name }}</td>
                                        <td>
                                            @if ($key->user_id == null)
                                            @else
                                                {{ $key->user->first_name }} {{ $key->user->last_name }}
                                            @endif

                                        </td>
                                        <td>{{ $key->created_at }}</td>
                                        <td>
                                            @if ($key->status == 1 && $key->claim == 1 && $key->transfer == 0)
                                                <label class="badge badge-warning mb-1">New Claim</label>
                                            @endif
                                            @if ($key->status == 1 && $key->claim == 1 && $key->transfer == 1)
                                                <label class="badge badge-success mb-1">Transferred</label>
                                            @endif
                                            @if ($key->status == 3 && $key->claim == 1 && $key->transfer == 1)
                                                <label class="badge badge-danger mb-1">Suspended</label>
                                            @endif


                                            {{-- @if ($key->status == 1 && $key->transfer == 0)
                                        <label class="badge badge-primary mb-1">Verified</label>
                                    @endif --}}

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
                                                        href="{{ url('businesses/' . $key->id . '/product/view') }}"><i
                                                            class="ik ik-eye"></i> View Products </a>

                                                    <a class="dropdown-item"
                                                        href="{{ url('businesses/' . $key->id . '/service/view') }}"><i
                                                            class="ik ik-eye"></i> View Services </a>

                                                    <a class="dropdown-item"
                                                        href="{{ url('businesses-claims/' . $key->id . '/show') }}"><i
                                                            class="ik ik-eye"></i> View Claim </a>

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

    {{-- @foreach ($sales as $index => $key)
<div class="modal fade" id="delete{{ $key->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterLabel">Delete</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <form action="{{ url('sales/' . $key->id . '/delete') }}" method="POST">
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
@endforeach --}}
@endsection
