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
                                <h5>Your Projects</h5>
                                <div class="d-flex flex-wrap align-items-center justify-content-between">
                                    <div class="dropdown status-dropdown mr-3">
                                        <div class="dropdown-toggle" id="dropdownMenuButton03" data-toggle="dropdown">
                                            <div class="btn bg-body"><span class="h6">Status :</span> In
                                                Progress<i class="ri-arrow-down-s-line ml-2 mr-0"></i></div>
                                        </div>
                                        <div class="dropdown-menu dropdown-menu-right"
                                            aria-labelledby="dropdownMenuButton03">
                                            <a class="dropdown-item" href="#"><i class="ri-mic-line mr-2"></i>In
                                                Progress</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="ri-attachment-line mr-2"></i>Priority</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="ri-file-copy-line mr-2"></i>Category</a>
                                        </div>
                                    </div>
                                    <div class="list-grid-toggle d-flex align-items-center mr-3">
                                        <div data-toggle-extra="tab" data-target-extra="#grid" class="active">
                                            <div class="grid-icon mr-3">
                                                <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <rect x="3" y="3" width="7" height="7"></rect>
                                                    <rect x="14" y="3" width="7" height="7"></rect>
                                                    <rect x="14" y="14" width="7" height="7"></rect>
                                                    <rect x="3" y="14" width="7" height="7"></rect>
                                                </svg>
                                            </div>
                                        </div>
                                        <div data-toggle-extra="tab" data-target-extra="#list">
                                            <div class="grid-icon">
                                                <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <line x1="21" y1="10" x2="3" y2="10">
                                                    </line>
                                                    <line x1="21" y1="6" x2="3" y2="6">
                                                    </line>
                                                    <line x1="21" y1="14" x2="3" y2="14">
                                                    </line>
                                                    <line x1="21" y1="18" x2="3" y2="18">
                                                    </line>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pl-3 border-left btn-new">
                                        <a href="#" class="btn btn-primary" data-target="#new-project-modal"
                                            data-toggle="modal">New Project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="grid" class="item-content animate__animated animate__fadeIn active"
                data-toggle-extra="tab-content">
                <div class="row">
                    @if ($projects->isEmpty())
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="text-center">No Projects Found</h5>
                                </div>
                            </div>
                        </div>
                    @else
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($projects as $project)
                            <div class="col-lg-4 col-md-6">
                                <div class="card card-block card-stretch card-height">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between mb-4">
                                            <div id="circle-progress-{{ $i }}"
                                                class="circle-progress-{{ $i++ }} circle-progress circle-progress-primary"
                                                data-min-value="0" data-max-value="100" data-value="25"
                                                data-type="percent"></div>
                                            <i class="ri-star-fill m-0 text-warning"></i>
                                        </div>
                                        <h5 class="mb-1">{{ $project->name }}</h5>
                                        <p class="mb-3">{{ $project->description }}</p>
                                        <div class="d-flex align-items-center justify-content-between pt-3 border-top">
                                            <div class="iq-media-group">
                                                <a href="#" class="iq-media">
                                                    <img class="img-fluid avatar-40 rounded-circle"
                                                        src="../assets/images/user/05.jpg" alt="">
                                                </a>
                                                <a href="#" class="iq-media">
                                                    <img class="img-fluid avatar-40 rounded-circle"
                                                        src="../assets/images/user/06.jpg" alt="">
                                                </a>
                                            </div>
                                            <a
                                                class="btn btn-white text-primary link-shadow">{{ ucfirst($project->status) }}</a>
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
                    @if ($projects->isEmpty())
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="text-center">No Projects Found</h5>
                            </div>
                        </div>
                    </div>
                @else
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($projects as $project)
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="d-flex align-items-center">
                                            <div id="circle-progress-0{{ $i }}"
                                                class="circle-progress-0{{ $i++ }} circle-progress circle-progress-primary"
                                                data-min-value="0" data-max-value="100" data-value="25"
                                                data-type="percent"></div>
                                            <div class="ml-3">
                                                <h5 class="mb-1">{{ $project->name }}</h5>
                                                <p class="mb-0">{{ $project->description }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 text-sm-right mt-3 mt-sm-0">
                                        <div class="iq-media-group">
                                            <a href="#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle"
                                                    src="../assets/images/user/05.jpg" alt="">
                                            </a>
                                            <a href="#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle"
                                                    src="../assets/images/user/06.jpg" alt="">
                                            </a>
                                        </div>
                                        <a class="btn btn-white text-primary link-shadow">{{ ucfirst($project->status) }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endif
                </div>
            </div>
            <!-- Page end  -->
        </div>
    </div>
@endsection
