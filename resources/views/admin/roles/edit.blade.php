@extends('layouts.master')
@section('title')
    Edit Role
@endsection
@section('content')
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    {{-- <i class="ik ik-unlock bg-blue"></i> --}}
                    <div class="d-inline">
                        <h5>Role</h5>
                        <span>Edit role</span>
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
                            <a href="#">Role</a>
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
                    <h3>Create Role</h3>
                    <div class="card-header-right">
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        {{-- <div class="col-md-1"></div> --}}
                        <div class="col-md-12">
                            <form action="{{ url('roles/'.$role->id.'/update') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12 mr-">
                                        <div class="form-group">
                                            <label for="title">Name<span class="text-red">*</span></label>
                                            <input id="title" type="text" class="form-control" name="name"
                                                value="{{ $role->name }}" placeholder="Name" required="">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                </div>

                                <table class="table table-stripped table-hover">
                                    @foreach($data as $permission)
                                    <tr>
                                        <td>
                                            @if($permission->parent_id==0)
                                            <strong>{{$permission->name}}</strong>
                                            @else
                                            __ {{$permission->name}}
                                            @endif
                                        </td>
                                        <td>
                                            @if(!empty($permission->description))
                                            <i class="fa fa-info" data-toggle="tooltip"
                                                data-original-title="{!!  $permission->description!!}"></i>
                                            @endif
                                        </td>
                                        <td>
                                            <input @if ($role->permissions && is_array($role->permissions) && array_key_exists($permission->slug, $role->permissions))
                                                       checked
                                                   @endif
                                                   type="checkbox"
                                                   data-parent="{{$permission->parent_id}}"
                                                   name="permission[]"
                                                   value="{{$permission->slug}}"
                                                   id="{{$permission->id}}"
                                                   class="styled pcheck">
                                        
                                            <label class="" for="{{$permission->id}}">
                                                <!-- Label content goes here -->
                                            </label>
                                        </td>
                                    </tr>
                                    @endforeach
                                </table>

                                <div class="row">
                                    <div class="col-md-6 mr-">

                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group text-right">
                                            <button type="submit" class="btn btn-primary">Save</button>
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
