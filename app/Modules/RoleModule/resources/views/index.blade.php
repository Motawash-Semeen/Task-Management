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
                                            <div class="btn bg-body"><span class="h6">Status :</span> Active<i
                                                    class="ri-arrow-down-s-line ml-2 mr-0"></i></div>
                                        </div>
                                        <div class="dropdown-menu dropdown-menu-right"
                                            aria-labelledby="dropdownMenuButton03">
                                            <a class="dropdown-item" href="#"><i
                                                    class="ri-mic-line mr-2"></i>Active</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="ri-attachment-line mr-2"></i>Inactive</a>
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
                                        <a href="#" class="btn btn-primary" data-target="#new-role-modal"
                                            data-toggle="modal">New Role</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">

                <div class="card-body">
                    <div class="table-responsive rounded bg-white">
                        <table class="table mb-0 table-borderless tbl-server-info">
                            <thead>
                                <tr class="ligth">
                                    <th scope="col">#</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Permission</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($roles as $role)
                                    <tr>
                                        <th scope="row">{{ $i++ }}</th>
                                        <td>{{ $role->name }}</td>
                                        <td class="text-center">
                                            <button class="btn btn-link" id="hidePerIcon{{ $role->id }}" onclick="permissionShow({{ $role->id }})" type="button">
                                                <i class="ri-eye-line" id="icon{{ $role->id }}"></i>
                                            </button>
                                            <div id="permission{{ $role->id }}" class="hidden grid grid-cols-6 gap-1 text-center">
                                                @foreach ($role->permissions as $item)
                                                    <div class="badge badge-primary mr-2">
                                                        {{ $item->name }}
                                                    </div>
                                                @endforeach
                                            </div>
                                        </td>
                                        <td>
                                            <a href="{{ url('/') }}" class="btn btn-primary">Edit</a> <a
                                                href="{{ url('/') }}" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Page end  -->
        </div>
    </div>
    <script>
        function permissionShow(roleId) {
            const permissionDiv = document.getElementById(`permission${roleId}`);
            const icon = document.getElementById(`icon${roleId}`);
    
            if (permissionDiv.classList.contains('hidden')) {
                permissionDiv.classList.remove('hidden');
                icon.classList.remove('ri-eye-line');
                icon.classList.add('ri-eye-close-line');
            } else {
                permissionDiv.classList.add('hidden');
                icon.classList.remove('ri-eye-close-line');
                icon.classList.add('ri-eye-line');
            }
        }
    </script>
    
    <style>
        .table-fixed {
            table-layout: fixed;
            width: 100%;
        }
        .tbl-server-info th, .tbl-server-info td {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
        .tbl-server-info th:nth-child(1), .tbl-server-info td:nth-child(1) {
            width: 5%;
        }
        .tbl-server-info th:nth-child(2), .tbl-server-info td:nth-child(2) {
            width: 15%;
        }
        .tbl-server-info th:nth-child(3), .tbl-server-info td:nth-child(3) {
            width: 60%;
        }
        .tbl-server-info th:nth-child(4), .tbl-server-info td:nth-child(4) {
            width: 20%;
        }
        .hidden {
            display: none;
        }
        th{
            text-align: center;
        }
    </style>
    

@endsection
