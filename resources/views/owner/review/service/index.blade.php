@extends('layouts.master')
@section('title')
    View Sales
@endsection
@section('content')
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-unlock bg-blue"></i>
                    <div class="d-inline">
                        <h5>Roles</h5>
                        <span>List of Roles</span>
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
                            <a href="#">Roles</a>
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
                        {{-- @if (Sentinel::hasAccess('roles.create')) --}}
                            {{-- <a href="{{ url('roles/create') }}" class="btn btn-sm btn-rounded "  style="background: #B28910; color: #fff;">Add Role </a> --}}
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
                </div>
                <div class="card-body">
                    <div class="dt-responsive">
                        {{-- @if (Sentinel::hasAccess('roles.view')) --}}
                        <table id="order-table" class="table table-striped table-bordered nowrap">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>USER NAME</th>
                                    <th>SERVICE NAME</th>
                                    <th>REVIEW</th>
                                    <th class="text-center">STATUS</th>
                                    <th class="text-center">ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reviews as $index => $key)
                                    <tr>
                                        <td>{{ 1 + $index }}</td>
                                        <td>
                                            @if ($key->user == null)
                                            @else
                                                {{ $key->user->first_name }} {{ $key->user->last_name }}
                                            @endif

                                        </td>
                                        <td>{{ $key->services->service_name }}</td>
                                        <td>{{ \Illuminate\Support\Str::limit($key->review, 80, '...')   }}</td>
                                        {{-- <td>{{ $key->type }} Review</td> --}}
                                        <td class="text-center">
                                            @if ($key->status == 1)
                                            <label class="badge badge-success mb-1">Approved</label>
                                            @endif
                                            @if ($key->status == 2)
                                            <label class="badge badge-warning mb-1">Reported</label>
                                            @endif
                                            @if ($key->status == 3)
                                            <label class="badge badge-danger mb-1">Terminated</label>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <div class="dropdown d-inline-block">
                                                <a class="nav-link dropdown-toggle" href="#" id="moreDropdown"
                                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="ik ik-more-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    {{-- @if (Sentinel::hasAccess('roles.edit')) --}}
                                                        <a class="dropdown-item"
                                                        href="{{ url('reviews/'. $key->id .'/show') }}"><i
                                                                class="ik ik-eye"></i> View </a>
                                                    {{-- @endif --}}
                                                    {{-- @if (Sentinel::hasAccess('roles.delete')) --}}
                                                        <a class="dropdown-item" href="#accountEdit" data-toggle="modal"
                                                            data-target="#delete{{ $key->id }}">
                                                            <i class="ik ik-trash"></i> Delete </a>
                                                    {{-- @endif --}}
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

    {{-- @foreach ($roles as $index => $key)
        <div class="modal fade" id="delete{{ $key->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterLabel">Delete</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <form action="{{ url('roles/' . $key->id . '/delete') }}" method="POST">
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
