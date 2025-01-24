@extends('layouts.master')
@section('title')
    Roles
@endsection
@section('content')
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    {{-- <i class="ik ik-unlock bg-blue"></i> --}}
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
                            <a href="{{ url('roles/create') }}" class="btn btn-sm btn-rounded "  style="background: #B28910; color: #fff;">Add Role </a>
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
                                        <th>Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($roles as $index => $key)
                                        <tr>
                                            <td>{{ 1 + $index }}</td>
                                            <td> <a href="#" class="badge badge-danger mb-1">{{ $key->name }}</a>
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
                                                                href="{{ url('roles/' . $key->id . '/edit') }}"><i
                                                                    class="ik ik-edit"></i> Edit </a>
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

    @foreach ($roles as $index => $key)
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
    @endforeach
@endsection
