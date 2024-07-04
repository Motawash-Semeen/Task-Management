@extends('WebModule::master')
@section('content')
<div class="content-page">
    <div class="container-fluid">
       <div class="row">
           <div class="col-lg-12">
               <div class="card">
                   <div class="card-body">
                       <div class="d-flex flex-wrap align-items-center justify-content-between breadcrumb-content">
                           <h5>Your Projects</h5>
                           <div class="d-flex align-items-center">                                
                               <div class="list-grid-toggle d-flex align-items-center mr-3">
                                   <div data-toggle-extra="tab" data-target-extra="#grid" class="active">
                                       <div class="grid-icon mr-3">
                                           <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                               <rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect>
                                           </svg>
                                       </div>
                                   </div>
                                   <div data-toggle-extra="tab" data-target-extra="#list">
                                       <div class="grid-icon">
                                           <svg  width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                               <line x1="21" y1="10" x2="3" y2="10"></line><line x1="21" y1="6" x2="3" y2="6"></line><line x1="21" y1="14" x2="3" y2="14"></line><line x1="21" y1="18" x2="3" y2="18"></line>
                                           </svg>
                                       </div>
                                   </div>
                               </div>
                               <div class="pl-3 border-left btn-new">
                                   <a href="#" class="btn btn-primary" data-target="#new-user-modal" data-toggle="modal">New Contact</a>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <div id="grid" class="item-content animate__animated animate__fadeIn active" data-toggle-extra="tab-content">
           <div class="row">
            @foreach ($users as $user)
            <div class="col-lg-4 col-md-6">
                <div class="card-transparent card-block card-stretch card-height">
                    <div class="card-body text-center p-0">                            
                        <div class="item">
                            <div class="odr-img">
                                <img src="{{ asset('images/'.$user->pro_pic) }}" class="img-fluid rounded-circle avatar-90 m-auto" alt="image" onerror="this.src=`{{ asset('/assets/images/user/user-1.jpg') }}`">
                            </div>                        
                            <div class="odr-content rounded">                                          
                                <h4 class="mb-2">{{ $user->name }}</h4>
                                <p class="mb-3">{{ $user->email }}</p>
                                <ul class="list-unstyled mb-3">
                                    <li class="bg-secondary-light rounded-circle iq-card-icon-small mr-4"><i class="ri-mail-open-line m-0"></i></li>
                                    <li class="bg-primary-light rounded-circle iq-card-icon-small mr-4"><i class="ri-chat-3-line m-0"></i></li>
                                    <li class="bg-success-light rounded-circle iq-card-icon-small"><i class="ri-phone-line m-0"></i></li>
                                </ul>                                    
                                <div class="pt-3 border-top">
                                    <a href="#" class="btn btn-primary">Message</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
               
              
           </div>
       </div>
       <div id="list" class="item-content animate__animated animate__fadeIn" data-toggle-extra="tab-content">
           <div class="table-responsive rounded bg-white mb-4">
               <table class="table mb-0 table-borderless tbl-server-info">
                   <tbody>
                    @foreach ($users as $user)
                       <tr>
                           <td>
                               <div class="media align-items-center">
                                   <img src="{{ asset('images/'.$user->pro_pic) }}" class="img-fluid rounded-circle avatar-40" alt="image" onerror="this.src=`{{ asset('/assets/images/user/user-1.jpg') }}`">
                                   <h5 class="ml-3">{{ $user->name }}</h5>
                               </div>
                           </td>
                           <td>{{ $user->email }}</td>
                           <td>
                               <div class="media align-items-center">
                                   <div class="bg-secondary-light rounded-circle iq-card-icon-small mr-3"><i class="ri-mail-open-line m-0"></i></div>
                                   <div class="bg-primary-light rounded-circle iq-card-icon-small mr-3"><i class="ri-chat-3-line m-0"></i></div>
                                   <div class="bg-success-light rounded-circle iq-card-icon-small"><i class="ri-phone-line m-0"></i></div>
                               </div>
                           </td>
                           <td>
                               <a href="#" class="btn btn-primary">Message</a>
                           </td>
                           <td>
                               <div class="d-flex align-items-center">
                                   <a href="#" class="text-body"><i class="las la-pen mr-3"></i></a>
                                   <a href="#" class="text-body"><i class="las la-trash-alt mr-0"></i></a>
                               </div>
                           </td>
                       </tr>
                    @endforeach
                   </tbody>
               </table>
           </div>
       </div>
       <!-- Page end  -->
   </div>
     </div>
@endsection