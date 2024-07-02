@extends('WebModule::master')
@section('content')
    <div class="content-page">
        <div class="container-fluid">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @elseif(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-wrap align-items-center justify-content-between breadcrumb-content">
                                <h5>Your Roles</h5>
                                <div class="d-flex flex-wrap align-items-center justify-content-between">
                                    <div class="dropdown status-dropdown mr-3">
                                        <div class="dropdown-toggle" id="dropdownMenuButton03" data-toggle="dropdown">
                                            <div class="btn bg-body"><span class="h6">Status :</span> Active<i class="ri-arrow-down-s-line ml-2 mr-0"></i></div>
                                        </div>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton03">
                                            <a class="dropdown-item" href="#"><i class="ri-mic-line mr-2"></i>Active</a>
                                            <a class="dropdown-item" href="#"><i class="ri-attachment-line mr-2"></i>Inactive</a>
                                        </div>
                                    </div>
                                    <div class="list-grid-toggle d-flex align-items-center mr-3">
                                        <div data-toggle-extra="tab" data-target-extra="#grid" class="active">
                                            <div class="grid-icon mr-3">
                                                <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <rect x="3" y="3" width="7" height="7"></rect>
                                                    <rect x="14" y="3" width="7" height="7"></rect>
                                                    <rect x="14" y="14" width="7" height="7"></rect>
                                                    <rect x="3" y="14" width="7" height="7"></rect>
                                                </svg>
                                            </div>
                                        </div>
                                        <div data-toggle-extra="tab" data-target-extra="#list">
                                            <div class="grid-icon">
                                                <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <line x1="21" y1="10" x2="3" y2="10"></line>
                                                    <line x1="21" y1="6" x2="3" y2="6"></line>
                                                    <line x1="21" y1="14" x2="3" y2="14"></line>
                                                    <line x1="21" y1="18" x2="3" y2="18"></line>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pl-3 border-left btn-new">
                                        <a href="#" class="btn btn-primary" data-target="#new-role-modal" data-toggle="modal">New Role</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="grid" class="item-content animate__animated animate__fadeIn active" data-toggle-extra="tab-content">
                <div class="row">
                    @if ($roles->isEmpty())
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="text-center">No Roles Found</h5>
                                </div>
                            </div>
                        </div>
                    @else
                        @foreach ($roles as $role)
                            <div class="col-lg-4 col-md-6">
                                <div class="card card-block card-stretch card-height">
                                    <div class="card-body">
                                        <h5 class="mb-1">{{ $role->name }}</h5>
                                        <div class="d-flex align-items-center justify-content-between pt-3 border-top">
                                            <a class="btn btn-white text-primary link-shadow">{{ ucfirst($role->status) }}</a>
                                            @foreach ($role->permissions as $item)
                                                <a class="btn btn-white text-primary link-shadow">{{ $item->name }}</a>
                                            @endforeach
                                            <a href="{{ url('/') }}" class="btn btn-primary">Edit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
            <div id="list" class="item-content animate__animated animate__fadeIn" data-toggle-extra="tab-content">
                <div class="row">
                    @if ($roles->isEmpty())
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="text-center">No Roles Found</h5>
                                </div>
                            </div>
                        </div>
                    @else
                        @foreach ($roles as $role)
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <h5 class="mb-1">{{ $role->name }}</h5>
                                            </div>
                                            <div class="col-sm-4 text-sm-right mt-3 mt-sm-0">
                                                <a class="btn btn-white text-primary link-shadow">{{ ucfirst($role->status) }}</a>
                                                <a href="{{ url('/') }}" class="btn btn-primary">Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>

            <div class="card">
                <div class="card-header d-flex justify-content-between">
                   <div class="header-title">
                      <h4 class="card-title">Tables</h4>
                   </div>
                </div>
                <div class="card-body">
                   <p>The <code>.table </code> class adds basic styling to a table.</p>
                   <div class="table-responsive rounded bg-white">                        
                      <table class="table mb-0 table-borderless tbl-server-info">
                         <thead>
                            <tr class="ligth">
                               <th scope="col">#</th>
                               <th scope="col">First</th>
                               <th scope="col">Last</th>
                               <th scope="col">Handle</th>
                            </tr>
                         </thead>
                         <tbody>
                            <tr>
                               <th scope="row">1</th>
                               <td>Mark</td>
                               <td>Otto</td>
                               <td>@mdo</td>
                            </tr>
                            <tr>
                               <th scope="row">2</th>
                               <td>Jacob</td>
                               <td>Thornton</td>
                               <td>@fat</td>
                            </tr>
                            <tr>
                               <th scope="row">3</th>
                               <td>Larry</td>
                               <td>the Bird</td>
                               <td>@twitter</td>
                            </tr>
                         </tbody>
                      </table>
                   </div>
                </div>
             </div>
            
            <!-- Page end  -->
        </div>
    </div>
@endsection
