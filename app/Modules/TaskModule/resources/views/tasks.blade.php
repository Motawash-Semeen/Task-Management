@extends('WebModule::master')
@section('content')
<div class="content-page">
    <div class="container-fluid">
       <div class="row">
           <div class="col-lg-12">
               <div class="card">
                   <div class="card-body">
                       <div class="d-flex flex-wrap align-items-center justify-content-between breadcrumb-content">
                           <h5>Your Task</h5>
                           <div class="d-flex flex-wrap align-items-center">
                               <div class="dropdown dropdown-project mr-3">
                                   <div class="dropdown-toggle" id="dropdownMenuButton03" data-toggle="dropdown">
                                   <div class="btn bg-body"><span class="h6">Project :</span> webkit Project<i class="ri-arrow-down-s-line ml-2 mr-0"></i></div>
                                   </div>
                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton03">
                                       <a class="dropdown-item" href="#"><i class="ri-mic-line mr-2"></i>In Progress</a>
                                       <a class="dropdown-item" href="#"><i class="ri-attachment-line mr-2"></i>Priority</a>
                                       <a class="dropdown-item" href="#"><i class="ri-file-copy-line mr-2"></i>Category</a> 
                                   </div>
                               </div>
                               <a href="#" class="btn btn-primary" data-target="#new-task-modal" data-toggle="modal">New Task</a>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <div class="col-lg-12">
               <div class="card">
                   <div class="card-body">
                       <div class="row">
                           <div class="col-lg-12">
                               <div class="card card-widget task-card">
                                   <div class="card-body">
                                       <div class="d-flex flex-wrap align-items-center justify-content-between">
                                           <div class="d-flex align-items-center">
                                               <div class="custom-control custom-task custom-checkbox custom-control-inline">
                                                   <input type="checkbox" class="custom-control-input" id="customCheck01">
                                                   <label class="custom-control-label" for="customCheck01"></label>
                                               </div>
                                               <div>
                                                   <h5 class="mb-2">Design landing page of webkit</h5>
                                                   <div class="media align-items-center">
                                                       <div class="btn bg-body mr-3"><i class="ri-align-justify mr-2"></i>5/10</div>
                                                       <div class="btn bg-body"><i class="ri-survey-line mr-2"></i>3</div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="media align-items-center mt-md-0 mt-3">
                                               <a href="#" class="btn bg-secondary-light mr-3">Design</a>
                                               <a class="btn bg-secondary-light" data-toggle="collapse" href="#collapseEdit1" role="button" aria-expanded="false" aria-controls="collapseEdit1"><i class="ri-edit-box-line m-0"></i></a>
                                           </div>
                                       </div>  
                                   </div>
                               </div>                                                                                                        
                               <div class="collapse" id="collapseEdit1">                                            
                                   <div class="card card-list task-card">
                                       <div class="card-header d-flex align-items-center justify-content-between px-0 mx-3">
                                           <div class="header-title">
                                               <div class="custom-control custom-checkbox custom-control-inline">
                                                   <input type="checkbox" class="custom-control-input" id="customCheck05">
                                                   <label class="custom-control-label h5" for="customCheck05">Mark as done</label>
                                               </div>
                                           </div>
                                           <div><a href="#" class="btn bg-secondary-light">Design</a></div>
                                       </div>
                                       <div class="card-body">
                                           <div class="form-group mb-3 position-relative">
                                               <input type="text" class="form-control bg-white" placeholder="Design landing page of webkit">
                                               <a href="#" class="task-edit task-simple-edit text-body"><i class="ri-edit-box-line"></i></a>
                                           </div>
                                           <div class="card mb-3">
                                               <div class="card-body">
                                                   <div class="row">
                                                       <div class="col-lg-6">
                                                           <div class="form-group mb-0">
                                                               <label for="exampleInputText2" class="h5">Memebers</label>
                                                               <select name="type" class="selectpicker form-control" data-style="py-0">
                                                                   <option>Memebers</option>
                                                                   <option>Kianna Septimus</option>
                                                                   <option>Jaxson Herwitz</option>
                                                                   <option>Ryan Schleifer</option>
                                                               </select>
                                                           </div>
                                                       </div>
                                                       <div class="col-lg-6">
                                                           <div class="form-group mb-0">
                                                               <label for="exampleInputText3" class="h5">Due Dates*</label>
                                                               <input type="date" class="form-control" id="exampleInputText3" value="">
                                                           </div>                        
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="card mb-3">
                                               <div class="card-body">
                                                   <div class="row">
                                                       <div class="col-lg-6">                                                        
                                                           <h5 class="mb-2">Description</h5>
                                                           <p class="mb-0">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                                                       </div>
                                                       <div class="col-lg-6">                                      
                                                           <h5 class="mb-2">Checklist</h5>
                                                           <div class="row">
                                                               <div class="col-lg-6">
                                                                   <div class="custom-control custom-checkbox custom-control-inline mr-0">
                                                                       <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                                       <label class="custom-control-label mb-1" for="customCheck1">Design mobile version</label>
                                                                   </div>
                                                                   <div class="custom-control custom-checkbox custom-control-inline mr-0">
                                                                       <input type="checkbox" class="custom-control-input" id="customCheck02">
                                                                       <label class="custom-control-label mb-1" for="customCheck02">Use images of unsplash.com</label>
                                                                   </div>
                                                                   <div class="custom-control custom-checkbox custom-control-inline mr-0">
                                                                       <input type="checkbox" class="custom-control-input" id="customCheck3">
                                                                       <label class="custom-control-label" for="customCheck3">Vector images of small size.</label>
                                                                   </div>
                                                               </div>
                                                               <div class="col-lg-6">
                                                                   <div class="custom-control custom-checkbox custom-control-inline mr-0">
                                                                       <input type="checkbox" class="custom-control-input" id="customCheck04">
                                                                       <label class="custom-control-label mb-1" for="customCheck04">Design mobile version of landing page</label>
                                                                   </div>
                                                                   <div class="custom-control custom-checkbox custom-control-inline mr-0">
                                                                       <input type="checkbox" class="custom-control-input" id="customCheck5">
                                                                       <label class="custom-control-label mb-1" for="customCheck5">Use images of unsplash.com</label>
                                                                   </div>
                                                                   <div class="custom-control custom-checkbox custom-control-inline mr-0">
                                                                       <input type="checkbox" class="custom-control-input" id="customCheck06">
                                                                       <label class="custom-control-label" for="customCheck06">Vector images of small size..</label>
                                                                   </div>
                                                               </div>
                                                           </div>                       
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="form-group mb-0">
                                               <label for="exampleInputText01" class="h5">Attachments</label>
                                               <div class="custom-file">
                                                   <input type="file" class="custom-file-input" id="inputGroupFile001">
                                                   <label class="custom-file-label" for="inputGroupFile001">Upload media</label>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>      
                           </div>
                           <div class="col-lg-12">
                               <div class="card card-widget task-card">
                                   <div class="card-body">
                                       <div class="d-flex flex-wrap align-items-center justify-content-between">
                                           <div class="d-flex align-items-center">
                                               <div class="custom-control custom-task custom-checkbox custom-control-inline">
                                                   <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                   <label class="custom-control-label" for="customCheck2"></label>
                                               </div>
                                               <div>
                                                   <h5 class="mb-2">Create unique style of inner pages</h5>
                                                   <div class="media align-items-center">
                                                       <div class="btn bg-body mr-3"><i class="ri-align-justify mr-2"></i>5/10</div>
                                                       <div class="btn bg-body"><i class="ri-survey-line mr-2"></i>3</div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="media align-items-center mt-md-0 mt-3">
                                               <a href="#" class="btn bg-success-light mr-3">Design</a>
                                               <a class="btn bg-success-light" data-toggle="collapse" href="#collapseEdit2" role="button" aria-expanded="false" aria-controls="collapseEdit2"><i class="ri-edit-box-line m-0"></i></a>
                                           </div>
                                       </div>
                                   </div>
                               </div>                                                                                                       
                               <div class="collapse" id="collapseEdit2">                                            
                                   <div class="card card-list task-card">
                                       <div class="card-header d-flex align-items-center justify-content-between px-0 mx-3">
                                           <div class="header-title">
                                               <div class="custom-control custom-checkbox custom-control-inline">
                                                   <input type="checkbox" class="custom-control-input" id="customCheck006">
                                                   <label class="custom-control-label h5" for="customCheck006">Mark as done</label>
                                               </div>
                                           </div>
                                           <div><a href="#" class="btn bg-secondary-light">Design</a></div>
                                       </div>
                                       <div class="card-body">
                                           <div class="form-group mb-3 position-relative">
                                               <input type="text" class="form-control bg-white" placeholder="Design landing page of webkit">
                                               <a href="#" class="task-edit task-simple-edit text-body"><i class="ri-edit-box-line"></i></a>
                                           </div>
                                           <div class="card mb-3">
                                               <div class="card-body">
                                                   <div class="row">
                                                       <div class="col-lg-6">
                                                           <div class="form-group mb-0">
                                                               <label for="exampleInputText2" class="h5">Memebers</label>
                                                               <select name="type" class="selectpicker form-control" data-style="py-0">
                                                                   <option>Memebers</option>
                                                                   <option>Kianna Septimus</option>
                                                                   <option>Jaxson Herwitz</option>
                                                                   <option>Ryan Schleifer</option>
                                                               </select>
                                                           </div>
                                                       </div>
                                                       <div class="col-lg-6">
                                                           <div class="form-group mb-0">
                                                               <label for="exampleInputText4" class="h5">Due Dates*</label>
                                                               <input type="date" class="form-control" id="exampleInputText4" value="">
                                                           </div>                        
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="card mb-3">
                                               <div class="card-body">
                                                   <div class="row">
                                                       <div class="col-lg-6">                                                        
                                                           <h5 class="mb-2">Description</h5>
                                                           <p class="mb-0">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                                                       </div>
                                                       <div class="col-lg-6">                                      
                                                           <h5 class="mb-2">Checklist</h5>
                                                           <div class="row">
                                                               <div class="col-lg-6">
                                                                   <div class="custom-control custom-checkbox custom-control-inline mr-0">
                                                                       <input type="checkbox" class="custom-control-input" id="customCheck4">
                                                                       <label class="custom-control-label mb-1" for="customCheck4">Design mobile version</label>
                                                                   </div>
                                                                   <div class="custom-control custom-checkbox custom-control-inline mr-0">
                                                                       <input type="checkbox" class="custom-control-input" id="customCheck07">
                                                                       <label class="custom-control-label mb-1" for="customCheck07">Use images of unsplash.com</label>
                                                                   </div>
                                                                   <div class="custom-control custom-checkbox custom-control-inline mr-0">
                                                                       <input type="checkbox" class="custom-control-input" id="customCheck6">
                                                                       <label class="custom-control-label" for="customCheck6">Vector images of small size.</label>
                                                                   </div>
                                                               </div>
                                                               <div class="col-lg-6">
                                                                   <div class="custom-control custom-checkbox custom-control-inline mr-0">
                                                                       <input type="checkbox" class="custom-control-input" id="customCheck7">
                                                                       <label class="custom-control-label mb-1" for="customCheck7">Design mobile version of landing page</label>
                                                                   </div>
                                                                   <div class="custom-control custom-checkbox custom-control-inline mr-0">
                                                                       <input type="checkbox" class="custom-control-input" id="customCheck8">
                                                                       <label class="custom-control-label mb-1" for="customCheck8">Use images of unsplash.com</label>
                                                                   </div>
                                                                   <div class="custom-control custom-checkbox custom-control-inline mr-0">
                                                                       <input type="checkbox" class="custom-control-input" id="customCheck9">
                                                                       <label class="custom-control-label" for="customCheck9">Vector images of small size..</label>
                                                                   </div>
                                                               </div>
                                                           </div>                       
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="form-group mb-0">
                                               <label for="exampleInputText01" class="h5">Attachments</label>
                                               <div class="custom-file">
                                                   <input type="file" class="custom-file-input" id="inputGroupFile002">
                                                   <label class="custom-file-label" for="inputGroupFile002">Upload media</label>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div> 
                           </div>
                           <div class="col-lg-12">
                               <div class="card card-widget task-card">
                                   <div class="card-body">
                                       <div class="d-flex flex-wrap align-items-center justify-content-between">
                                           <div class="d-flex align-items-center">
                                               <div class="custom-control custom-task custom-checkbox custom-control-inline">
                                                   <input type="checkbox" class="custom-control-input" id="customCheck10">
                                                   <label class="custom-control-label" for="customCheck10"></label>
                                               </div>
                                               <div>
                                                   <h5 class="mb-2">Activate from WordPress Dashboard</h5>
                                                   <div class="media align-items-center">
                                                       <div class="btn bg-body mr-3"><i class="ri-align-justify mr-2"></i>5/10</div>
                                                       <div class="btn bg-body"><i class="ri-survey-line mr-2"></i>3</div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="media align-items-center mt-md-0 mt-3">
                                               <a href="#" class="btn bg-primary-light mr-3">Design</a>
                                               <a class="btn bg-primary-light" data-toggle="collapse" href="#collapseEdit3" role="button" aria-expanded="false" aria-controls="collapseEdit3"><i class="ri-edit-box-line m-0"></i></a>
                                           </div>
                                       </div>
                                   </div>
                               </div>                                                                                                       
                               <div class="collapse" id="collapseEdit3">                                            
                                   <div class="card card-list task-card">
                                       <div class="card-header d-flex align-items-center justify-content-between px-0 mx-3">
                                           <div class="header-title">
                                               <div class="custom-control custom-checkbox custom-control-inline">
                                                   <input type="checkbox" class="custom-control-input" id="customCheck11">
                                                   <label class="custom-control-label h5" for="customCheck11">Mark as done</label>
                                               </div>
                                           </div>
                                           <div><a href="#" class="btn bg-secondary-light">Design</a></div>
                                       </div>
                                       <div class="card-body">
                                           <div class="form-group mb-3 position-relative">
                                               <input type="text" class="form-control bg-white" placeholder="Design landing page of webkit">
                                               <a href="#" class="task-edit task-simple-edit text-body"><i class="ri-edit-box-line"></i></a>
                                           </div>
                                           <div class="card mb-3">
                                               <div class="card-body">
                                                   <div class="row">
                                                       <div class="col-lg-6">
                                                           <div class="form-group mb-0">
                                                               <label for="exampleInputText2" class="h5">Memebers</label>
                                                               <select name="type" class="selectpicker form-control" data-style="py-0">
                                                                   <option>Memebers</option>
                                                                   <option>Kianna Septimus</option>
                                                                   <option>Jaxson Herwitz</option>
                                                                   <option>Ryan Schleifer</option>
                                                               </select>
                                                           </div>
                                                       </div>
                                                       <div class="col-lg-6">
                                                           <div class="form-group mb-0">
                                                               <label for="exampleInputText5" class="h5">Due Dates*</label>
                                                               <input type="date" class="form-control" id="exampleInputText5" value="">
                                                           </div>                        
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="card mb-3">
                                               <div class="card-body">
                                                   <div class="row">
                                                       <div class="col-lg-6">                                                        
                                                           <h5 class="mb-2">Description</h5>
                                                           <p class="mb-0">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                                                       </div>
                                                       <div class="col-lg-6">                                      
                                                           <h5 class="mb-2">Checklist</h5>
                                                           <div class="row">
                                                               <div class="col-lg-6">
                                                                   <div class="custom-control custom-checkbox custom-control-inline mr-0">
                                                                       <input type="checkbox" class="custom-control-input" id="customCheck12">
                                                                       <label class="custom-control-label mb-1" for="customCheck12">Design mobile version</label>
                                                                   </div>
                                                                   <div class="custom-control custom-checkbox custom-control-inline mr-0">
                                                                       <input type="checkbox" class="custom-control-input" id="customCheck13">
                                                                       <label class="custom-control-label mb-1" for="customCheck13">Use images of unsplash.com</label>
                                                                   </div>
                                                                   <div class="custom-control custom-checkbox custom-control-inline mr-0">
                                                                       <input type="checkbox" class="custom-control-input" id="customCheck14">
                                                                       <label class="custom-control-label" for="customCheck14">Vector images of small size.</label>
                                                                   </div>
                                                               </div>
                                                               <div class="col-lg-6">
                                                                   <div class="custom-control custom-checkbox custom-control-inline mr-0">
                                                                       <input type="checkbox" class="custom-control-input" id="customCheck15">
                                                                       <label class="custom-control-label mb-1" for="customCheck15">Design mobile version of landing page</label>
                                                                   </div>
                                                                   <div class="custom-control custom-checkbox custom-control-inline mr-0">
                                                                       <input type="checkbox" class="custom-control-input" id="customCheck16">
                                                                       <label class="custom-control-label mb-1" for="customCheck16">Use images of unsplash.com</label>
                                                                   </div>
                                                                   <div class="custom-control custom-checkbox custom-control-inline mr-0">
                                                                       <input type="checkbox" class="custom-control-input" id="customCheck17">
                                                                       <label class="custom-control-label" for="customCheck17">Vector images of small size..</label>
                                                                   </div>
                                                               </div>
                                                           </div>                       
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="form-group mb-0">
                                               <label for="exampleInputText01" class="h5">Attachments</label>
                                               <div class="custom-file">
                                                   <input type="file" class="custom-file-input" id="inputGroupFile03">
                                                   <label class="custom-file-label" for="inputGroupFile03">Upload media</label>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div> 
                           </div>
                           <div class="col-lg-12">
                               <div class="card card-widget task-card">
                                   <div class="card-body">
                                       <div class="d-flex flex-wrap align-items-center justify-content-between">
                                           <div class="d-flex align-items-center">
                                               <div class="custom-control custom-task custom-checkbox custom-control-inline">
                                                   <input type="checkbox" class="custom-control-input" id="customCheck18">
                                                   <label class="custom-control-label" for="customCheck18"></label>
                                               </div>
                                               <div>
                                                   <h5 class="mb-2">Add code to output Post Title & Text</h5>
                                                   <div class="media align-items-center">
                                                       <div class="btn bg-body mr-3"><i class="ri-align-justify mr-2"></i>5/10</div>
                                                       <div class="btn bg-body"><i class="ri-survey-line mr-2"></i>3</div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="media align-items-center mt-md-0 mt-3">
                                               <a href="#" class="btn bg-info-light mr-3">Design</a>
                                               <a class="btn bg-info-light" data-toggle="collapse" href="#collapseEdit4" role="button" aria-expanded="false" aria-controls="collapseEdit4"><i class="ri-edit-box-line m-0"></i></a>
                                           </div>
                                       </div>
                                   </div>
                               </div>                                                                                                       
                               <div class="collapse" id="collapseEdit4">                                            
                                   <div class="card card-list task-card">
                                       <div class="card-header d-flex align-items-center justify-content-between px-0 mx-3">
                                           <div class="header-title">
                                               <div class="custom-control custom-checkbox custom-control-inline">
                                                   <input type="checkbox" class="custom-control-input" id="customCheck19">
                                                   <label class="custom-control-label h5" for="customCheck19">Mark as done</label>
                                               </div>
                                           </div>
                                           <div><a href="#" class="btn bg-secondary-light">Design</a></div>
                                       </div>
                                       <div class="card-body">
                                           <div class="form-group mb-3 position-relative">
                                               <input type="text" class="form-control bg-white" placeholder="Design landing page of webkit">
                                               <a href="#" class="task-edit task-simple-edit text-body"><i class="ri-edit-box-line"></i></a>
                                           </div>
                                           <div class="card mb-3">
                                               <div class="card-body">
                                                   <div class="row">
                                                       <div class="col-lg-6">
                                                           <div class="form-group mb-0">
                                                               <label for="exampleInputText2" class="h5">Memebers</label>
                                                               <select name="type" class="selectpicker form-control" data-style="py-0">
                                                                   <option>Memebers</option>
                                                                   <option>Kianna Septimus</option>
                                                                   <option>Jaxson Herwitz</option>
                                                                   <option>Ryan Schleifer</option>
                                                               </select>
                                                           </div>
                                                       </div>
                                                       <div class="col-lg-6">
                                                           <div class="form-group mb-0">
                                                               <label for="exampleInputText6" class="h5">Due Dates*</label>
                                                               <input type="date" class="form-control" id="exampleInputText6" value="">
                                                           </div>                        
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="card mb-3">
                                               <div class="card-body">
                                                   <div class="row">
                                                       <div class="col-lg-6">                                                        
                                                           <h5 class="mb-2">Description</h5>
                                                           <p class="mb-0">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                                                       </div>
                                                       <div class="col-lg-6">                                      
                                                           <h5 class="mb-2">Checklist</h5>
                                                           <div class="row">
                                                               <div class="col-lg-6">
                                                                   <div class="custom-control custom-checkbox custom-control-inline mr-0">
                                                                       <input type="checkbox" class="custom-control-input" id="customCheck20">
                                                                       <label class="custom-control-label mb-1" for="customCheck20">Design mobile version</label>
                                                                   </div>
                                                                   <div class="custom-control custom-checkbox custom-control-inline mr-0">
                                                                       <input type="checkbox" class="custom-control-input" id="customCheck21">
                                                                       <label class="custom-control-label mb-1" for="customCheck21">Use images of unsplash.com</label>
                                                                   </div>
                                                                   <div class="custom-control custom-checkbox custom-control-inline mr-0">
                                                                       <input type="checkbox" class="custom-control-input" id="customCheck22">
                                                                       <label class="custom-control-label" for="customCheck22">Vector images of small size.</label>
                                                                   </div>
                                                               </div>
                                                               <div class="col-lg-6">
                                                                   <div class="custom-control custom-checkbox custom-control-inline mr-0">
                                                                       <input type="checkbox" class="custom-control-input" id="customCheck23">
                                                                       <label class="custom-control-label mb-1" for="customCheck23">Design mobile version of landing page</label>
                                                                   </div>
                                                                   <div class="custom-control custom-checkbox custom-control-inline mr-0">
                                                                       <input type="checkbox" class="custom-control-input" id="customCheck24">
                                                                       <label class="custom-control-label mb-1" for="customCheck24">Use images of unsplash.com</label>
                                                                   </div>
                                                                   <div class="custom-control custom-checkbox custom-control-inline mr-0">
                                                                       <input type="checkbox" class="custom-control-input" id="customCheck25">
                                                                       <label class="custom-control-label" for="customCheck25">Vector images of small size..</label>
                                                                   </div>
                                                               </div>
                                                           </div>                       
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="form-group mb-0">
                                               <label for="exampleInputText01" class="h5">Attachments</label>
                                               <div class="custom-file">
                                                   <input type="file" class="custom-file-input" id="inputGroupFile04">
                                                   <label class="custom-file-label" for="inputGroupFile04">Upload media</label>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div> 
                           </div>
                           <div class="col-lg-12">
                               <div class="card card-widget task-card mb-0">
                                   <div class="card-body">
                                       <div class="d-flex flex-wrap align-items-center justify-content-between">
                                           <div class="d-flex align-items-center">
                                               <div class="custom-control custom-task custom-checkbox custom-control-inline">
                                                   <input type="checkbox" class="custom-control-input" id="customCheck26">
                                                   <label class="custom-control-label" for="customCheck26"></label>
                                               </div>
                                               <div>
                                                   <h5 class="mb-2">Add Header and Footer To Template</h5>
                                                   <div class="media align-items-center">
                                                       <div class="btn bg-body mr-3"><i class="ri-align-justify mr-2"></i>5/10</div>
                                                       <div class="btn bg-body"><i class="ri-survey-line mr-2"></i>3</div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="media align-items-center mt-md-0 mt-3">
                                               <a href="#" class="btn bg-secondary-light mr-3">Design</a>
                                               <a class="btn bg-secondary-light" data-toggle="collapse" href="#collapseEdit5" role="button" aria-expanded="false" aria-controls="collapseEdit5"><i class="ri-edit-box-line m-0"></i></a>
                                           </div>
                                       </div>
                                   </div>
                               </div>                                                                                                                                       
                               <div class="collapse" id="collapseEdit5">                                            
                                   <div class="card card-list task-card">
                                       <div class="card-header d-flex align-items-center justify-content-between px-0 mx-3">
                                           <div class="header-title">
                                               <div class="custom-control custom-checkbox custom-control-inline">
                                                   <input type="checkbox" class="custom-control-input" id="customCheck27">
                                                   <label class="custom-control-label h5" for="customCheck27">Mark as done</label>
                                               </div>
                                           </div>
                                           <div><a href="#" class="btn bg-secondary-light">Design</a></div>
                                       </div>
                                       <div class="card-body">
                                           <div class="form-group mb-3 position-relative">
                                               <input type="text" class="form-control bg-white" placeholder="Design landing page of webkit">
                                               <a href="#" class="task-edit task-simple-edit text-body"><i class="ri-edit-box-line"></i></a>
                                           </div>
                                           <div class="card mb-3">
                                               <div class="card-body">
                                                   <div class="row">
                                                       <div class="col-lg-6">
                                                           <div class="form-group mb-0">
                                                               <label for="exampleInputText2" class="h5">Memebers</label>
                                                               <select name="type" class="selectpicker form-control" data-style="py-0">
                                                                   <option>Memebers</option>
                                                                   <option>Kianna Septimus</option>
                                                                   <option>Jaxson Herwitz</option>
                                                                   <option>Ryan Schleifer</option>
                                                               </select>
                                                           </div>
                                                       </div>
                                                       <div class="col-lg-6">
                                                           <div class="form-group mb-0">
                                                               <label for="exampleInputText7" class="h5">Due Dates*</label>
                                                               <input type="date" class="form-control" id="exampleInputText7" value="">
                                                           </div>                        
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="card mb-3">
                                               <div class="card-body">
                                                   <div class="row">
                                                       <div class="col-lg-6">                                                        
                                                           <h5 class="mb-2">Description</h5>
                                                           <p class="mb-0">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                                                       </div>
                                                       <div class="col-lg-6">                                      
                                                           <h5 class="mb-2">Checklist</h5>
                                                           <div class="row">
                                                               <div class="col-lg-6">
                                                                   <div class="custom-control custom-checkbox custom-control-inline mr-0">
                                                                       <input type="checkbox" class="custom-control-input" id="customCheck28">
                                                                       <label class="custom-control-label mb-1" for="customCheck28">Design mobile version</label>
                                                                   </div>
                                                                   <div class="custom-control custom-checkbox custom-control-inline mr-0">
                                                                       <input type="checkbox" class="custom-control-input" id="customCheck29">
                                                                       <label class="custom-control-label mb-1" for="customCheck29">Use images of unsplash.com</label>
                                                                   </div>
                                                                   <div class="custom-control custom-checkbox custom-control-inline mr-0">
                                                                       <input type="checkbox" class="custom-control-input" id="customCheck30">
                                                                       <label class="custom-control-label" for="customCheck30">Vector images of small size.</label>
                                                                   </div>
                                                               </div>
                                                               <div class="col-lg-6">
                                                                   <div class="custom-control custom-checkbox custom-control-inline mr-0">
                                                                       <input type="checkbox" class="custom-control-input" id="customCheck31">
                                                                       <label class="custom-control-label mb-1" for="customCheck31">Design mobile version of landing page</label>
                                                                   </div>
                                                                   <div class="custom-control custom-checkbox custom-control-inline mr-0">
                                                                       <input type="checkbox" class="custom-control-input" id="customCheck32">
                                                                       <label class="custom-control-label mb-1" for="customCheck32">Use images of unsplash.com</label>
                                                                   </div>
                                                                   <div class="custom-control custom-checkbox custom-control-inline mr-0">
                                                                       <input type="checkbox" class="custom-control-input" id="customCheck33">
                                                                       <label class="custom-control-label" for="customCheck33">Vector images of small size..</label>
                                                                   </div>
                                                               </div>
                                                           </div>                       
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="form-group mb-0">
                                               <label for="exampleInputText01" class="h5">Attachments</label>
                                               <div class="custom-file">
                                                   <input type="file" class="custom-file-input" id="inputGroupFile05">
                                                   <label class="custom-file-label" for="inputGroupFile05">Upload media</label>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div> 
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- Page end  -->
   </div>
     </div>
@endsection