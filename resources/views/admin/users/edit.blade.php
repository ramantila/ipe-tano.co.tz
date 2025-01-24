@extends('layouts.master')
@section('title')
    Add User
@endsection
@section('content')
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    {{-- <i class="ik ik-shopping-cart bg-blue"></i> --}}
                    <div class="d-inline">
                        <h5>User</h5>
                        <span>Add User</span>
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
                            <a href="#">User</a>
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
                    <h3>Add User</h3>
                    <div class="card-header-right">
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        {{-- <div class="col-md-1"></div> --}}
                        <div class="col-md-12">
                            <form action="{{ url('users/'.$user->id.'/update') }}" method="POST">
                                @csrf

                                <div class="form-group">
                                    <input id="title" type="hidden" class="form-control" name="previous"
                                        value="{{ $selected }}" placeholder="previous" required="" >
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mr-">
                                        <div class="form-group">
                                            <label for="title">First Name<span class="text-red">*</span></label>
                                            <input id="title" type="text" class="form-control" name="firstname"
                                            value="{{ $user->first_name }}"
                                                placeholder="First Name" required="">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="title">Last Name </label>
                                            <input id="title" type="text" class="form-control" name="lastname"
                                            value="{{ $user->last_name }}"
                                                placeholder="Last Name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-6 mr-">
                                        <div class="form-group">
                                            <label for="title">Email<span class="text-red">*</span></label>
                                            <input id="title" type="email" class="form-control" name="email"
                                            value="{{ $user->email }}"
                                                placeholder="Email" required="">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="title">Phone </label>
                                            <input id="title" type="number" class="form-control" name="phone"
                                            value="{{ $user->phone }}"
                                                placeholder="Phone">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                </div>


                                <div class="form-group">
                                    <label for="title">Country <span class="text-red">*</span></label>
                                    <select class="form-control select2" name="role" required="">
                                        <option value="">Select Role</option>
                                        @foreach ($roles as $key)
                                        <option  {{ $key->name === $selected ? 'selected' : '' }}  value="{{ $key->name }}">{{ $key->name }}</option>
                                        @endforeach
                                    </select>
                                </div>


                                <div class="row">
                                    <div class="col-md-6 mr-">

                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group text-right">
                                            <button type="submit" class="btn " style="background: #B28910; color: #fff;">Save</button>
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
@endsection
