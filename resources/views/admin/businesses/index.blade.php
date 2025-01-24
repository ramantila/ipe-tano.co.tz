@extends('layouts.master')
@section('title')
    Businesses
@endsection
@section('content')
    <div class="page-header">
        {{-- <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-shopping-cart bg-blue"></i>
                    <div class="d-inline">
                        <h5>Businesses</h5>
                        <span>List of businesses</span>
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
                            <a href="#">Businesses</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div> --}}
    </div>

    <div class="row">
        <!-- page statustic chart start -->
        <div class="col-xl-4 col-md-6">
            <div class="card text-white">
                <div class="card-block">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h4 class="mb-0" style="color: #000">
                                {{-- @if ($commission != null)
                                {{ number_format($commission->mpesa + $commission->tigopesa + $commission->airtelmoney 
                                    + $commission->halopesa + $commission->nmb + $commission->crdb + $commission->nbc, 2) }}
                            @else
                                0
                            @endif --}}
                                {{ $businesses->count() }}
                            </h4>
                            <p class="mb-0"><a href="#" style="color: #000">Businesses</a></p>
                        </div>
                        <div class="col-4 text-right">
                            <i style="color: #B28910;" class="fas fa-cube f-30"></i>
                        </div>
                    </div>
                    <div id="Widget-line-chart1" class="chart-line chart-shadow"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card  text-white">
                <div class="card-block">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h4 class="mb-0" style="color: #000">
                                {{-- {{ number_format($totalDebts->sum('amount') - $totalDebts->sum('repayment')) }}</h4> --}}
                                {{ $businesses->count() }}
                                <p class="mb-0"><a href="#" style="color: #000">Free Account</a></p>
                        </div>
                        <div class="col-4 text-right">
                            <i style="color: #B28910;" class="ik ik-shopping-cart f-30"></i>
                        </div>
                    </div>
                    <div id="Widget-line-chart2" class="chart-line chart-shadow"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card  text-white">
                <div class="card-block">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h4 class="mb-0" style="color: #000">0</h4>
                            {{-- <h4 class="mb-0">{{ $totalUser }}</h4> --}}
                            <p class="mb-0"><a href="#" style="color: #000">Subscription Account</a></p>
                        </div>
                        <div class="col-4 text-right">
                            <i style="color: #B28910;" class="ik ik-user f-30"></i>
                        </div>
                    </div>
                    <div id="Widget-line-chart3" class="chart-line chart-shadow"></div>
                </div>
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
                                    <th>OWNER</th>
                                    <th>CREATED</th>
                                    <th>ACC PLAN</th>
                                    <th>STATUS</th>
                                    <th>FORM STATUS</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($businesses as $index => $key)
                                    <tr>
                                        <td>{{ 1 + $index }}</td>
                                        <td>{{ $key->business_name }}</td>
                                        <td>{{ $key->category ? $key->category->category_name : 'No Category' }}</td>
                                        <td>
                                            @if ($key->user_id == null)
                                            @else
                                                {{ $key->user->first_name }} {{ $key->user->last_name }}
                                            @endif

                                        </td>
                                        <td>{{ $key->created_at }}</td>
                                        <td>
                                            @if ($key->account == 0)
                                                <label for="">Free account</label>
                                            @endif
                                            @if ($key->account == 1)
                                                <label for="">Paid Account</label>
                                            @endif
                                        </td>

                                        <td>
                                            @if ($key->status == 1 && $key->claim == 0 && $key->verify == 0 && $key->transfer == 0)
                                                <label class="badge badge-warning mb-1">New</label>
                                            @endif
                                            @if ($key->status == 1 && $key->claim == 0 && $key->verify == 1 && $key->transfer == 0)
                                                <label class="badge badge-primary mb-1">Verified</label>
                                            @endif
                                            @if ($key->status == 1 && $key->claim == 0 && $key->verify == 1 && $key->transfer == 1)
                                                <label class="badge badge-success mb-1">Active</label>
                                            @endif
                                            @if ($key->status == 3 && $key->claim == 0 && $key->verify == 1 && $key->transfer == 1)
                                                <label class="badge badge-danger mb-1">Suspended</label>
                                            @endif
                                        </td>

                                        <td>
                                            @if ($key->letter == '' && $key->business_licence == '' && $key->company_reg == '')
                                                <label class="badge badge-danger mb-1">Incomplete</label>
                                            @else
                                                <label class="badge badge-success mb-1">complete</label>
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
                                                        href="{{ url('businesses/' . $key->id . '/edit') }}"><i
                                                            class="ik ik-edit"></i> Edit </a>

                                                    <a class="dropdown-item"
                                                        href="{{ url('businesses/' . $key->id . '/product/view') }}"><i
                                                            class="ik ik-eye"></i> View Products </a>

                                                    <a class="dropdown-item"
                                                        href="{{ url('businesses/' . $key->id . '/service/view') }}"><i
                                                            class="ik ik-eye"></i> View Services </a>

                                                    <a class="dropdown-item"
                                                        href="{{ url('businesses/' . $key->id . '/show') }}"><i
                                                            class="ik ik-eye"></i> View Business </a>

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

    @foreach ($businesses as $index => $key)
        <div class="modal fade" id="delete{{ $key->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterLabel">Delete</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <form action="{{ url('businesses/' . $key->id . '/delete') }}" method="POST">
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
