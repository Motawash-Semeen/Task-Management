 <!-- Modal list start -->
 @if (request()->is('projects/*') || request()->is('projects'))
     <div class="modal fade" role="dialog" aria-modal="true" id="new-project-modal">
         <div class="modal-dialog  modal-dialog-centered" role="document">
             <div class="modal-content">
                 <div class="modal-header d-block text-center pb-3 border-bttom">
                     <h3 class="modal-title" id="exampleModalCenterTitle01">New Project</h3>
                 </div>
                 <form action="{{ url('project-store') }}" method="POST">
                     @csrf
                     <div class="modal-body">
                         <div class="row">
                             <div class="col-lg-12">
                                 <div class="form-group mb-3">
                                     <label for="exampleInputText01" class="h5">Project Name*</label>
                                     <input type="text" class="form-control" id="exampleInputText01"
                                         placeholder="Project Name" name="name">
                                 </div>
                             </div>
                             <div class="col-lg-6">
                                 <div class="form-group mb-3">
                                     <label for="exampleInputText2" class="h5">Categories *</label>
                                     <select name="category" class="selectpicker form-control" data-style="py-0">
                                         @foreach ($categories as $category)
                                             <option value="{{ $category->id }}">{{ $category->name }}</option>
                                         @endforeach
                                     </select>
                                 </div>
                             </div>
                             <div class="col-lg-6">
                                 <div class="form-group mb-3">
                                     <label for="exampleInputText004" class="h5">Due Dates*</label>
                                     <input type="date" class="form-control" id="exampleInputText004"
                                         name="due_date">
                                 </div>
                             </div>
                             <div class="col-lg-12">
                                 <div class="form-group mb-3">
                                     <label for="exampleInputText07" class="h5">Assign Members*</label>
                                     <input type="text" class="form-control" id="exampleInputText07" name="members">
                                 </div>
                             </div>
                             <div class="col-lg-6">
                                 <div class="form-group mb-3">
                                     <label for="exampleInputText2" class="h5">Priority *</label>
                                     <select name="status" class="selectpicker form-control" data-style="py-0">
                                         <option value="High">High</option>
                                         <option value="Medium">Medium</option>
                                         <option value="Low">Low</option>
                                     </select>
                                 </div>
                             </div>
                             <div class="col-lg-6">
                                 <div class="form-group mb-3">
                                     <label for="exampleInputText2" class="h5">Code *</label>
                                     <input type="text" class="form-control" id="exampleInputText07" name="code">
                                 </div>
                             </div>
                             <div class="col-lg-12">
                                 <div class="form-group mb-3">
                                     <label for="exampleFormControlTextarea1" class="h5">Description</label>
                                     <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                                 </div>
                             </div>
                             <div class="col-lg-12">
                                 <div class="d-flex flex-wrap align-items-center justify-content-center mt-2">
                                     <button type="submit" class="btn btn-primary mr-3">Save</button>
                                     <button type="reset" class="btn btn-secondary">Cancel</button>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 @endif

 @if (request()->is('tasks/*') || request()->is('tasks'))
     <div class="modal fade bd-example-modal-lg" role="dialog" aria-modal="true" id="new-task-modal">
         <div class="modal-dialog  modal-dialog-centered modal-lg" role="document">
             <div class="modal-content">
                 <div class="modal-header d-block text-center pb-3 border-bttom">
                     <h3 class="modal-title" id="exampleModalCenterTitle">New Task</h3>
                 </div>
                 <form action="{{ url('task-store') }}" method="POST" enctype="multipart/form-data">
                     @csrf
                     <div class="modal-body">
                         <div class="row">
                             <div class="col-lg-12">
                                 <div class="form-group mb-3">
                                     <label for="exampleInputText02" class="h5">Task Name</label>
                                     <input type="text" class="form-control" id="exampleInputText02"
                                         placeholder="Enter task Name" name="task_name">
                                     <a href="#" class="task-edit text-body"><i
                                             class="ri-edit-box-line"></i></a>
                                 </div>
                             </div>
                             <div class="col-lg-6">
                                 <div class="form-group mb-3">
                                     <label for="exampleInputText2" class="h5">Project Name</label>
                                     <select name="project" class="selectpicker form-control" data-style="py-0">
                                         <option value="">Select one</option>
                                         @foreach ($projects as $project)
                                             <option value="{{ $project->id }}">{{ $project->name }}</option>
                                         @endforeach
                                     </select>
                                 </div>
                             </div>
                             <div class="col-lg-6">
                                 <div class="form-group mb-3">
                                     <label for="exampleInputText2" class="h5">Assigned to</label>
                                     <select name="member" class="selectpicker form-control" data-style="py-0">
                                         <option value="">Memebers</option>
                                         @foreach ($members as $member)
                                             <option value="{{ $member->id }}">{{ $member->name }}</option>
                                         @endforeach
                                     </select>
                                 </div>
                             </div>
                             <div class="col-lg-6">
                                 <div class="form-group mb-3">
                                     <label for="exampleInputText05" class="h5">Due Dates*</label>
                                     <input type="date" class="form-control" id="exampleInputText05" name="due_date"
                                         value="">
                                 </div>
                             </div>
                             <div class="col-lg-6">
                                 <div class="form-group mb-3">
                                     <label for="exampleInputText2" class="h5">Category</label>
                                     <select name="category" class="selectpicker form-control" data-style="py-0">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                     </select>
                                 </div>
                             </div>
                             <div class="col-lg-12">
                                 <div class="form-group mb-3">
                                     <label for="exampleInputText040" class="h5">Description</label>
                                     <textarea class="form-control" id="exampleInputText040" rows="2" name="desc"></textarea>
                                 </div>
                             </div>
                             {{-- <div class="col-lg-12">
                                 <div class="form-group mb-3">
                                     <label for="exampleInputText005" class="h5">Checklist</label>
                                     <input type="text" class="form-control" id="exampleInputText005"
                                         placeholder="Add List">
                                 </div>
                             </div> --}}
                             <div class="col-lg-12">
                                 <div class="form-group mb-0">
                                     <label for="exampleInputText01" class="h5">Attachments</label>
                                     <div class="custom-file">
                                         <input type="file" class="custom-file-input" id="inputGroupFile003" name="attachment">
                                         <label class="custom-file-label" for="inputGroupFile003">Upload media</label>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-lg-12">
                                 <div class="d-flex flex-wrap align-items-ceter justify-content-center mt-4">
                                     <button type="submit" class="btn btn-primary mr-3">Save</button>
                                     <button type="reset" class="btn btn-secondary">Cancel</button>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 @endif

 @if (request()->is('users/*') || request()->is('users'))
     <div class="modal fade bd-example-modal-lg" role="dialog" aria-modal="true" id="new-user-modal">
         <div class="modal-dialog  modal-dialog-centered modal-lg" role="document">
             <div class="modal-content">
                 <div class="modal-header d-block text-center pb-3 border-bttom">
                     <h3 class="modal-title" id="exampleModalCenterTitle02">New User</h3>
                 </div>
                 <form action="{{ url('users/create') }}" method="POST" enctype="multipart/form-data">
                     @csrf
                     <div class="modal-body">
                         <div class="row">
                             <div class="col-lg-6">
                                 <div class="form-group mb-3 custom-file-small">
                                     <label for="exampleInputText01" class="h5">Upload Profile Picture</label>
                                     <div class="custom-file">
                                         <input type="file" class="custom-file-input" id="inputGroupFile02"
                                             name="pro_pic">
                                         <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-lg-6">
                                 <div class="form-group mb-3">
                                     <label for="exampleInputText2" class="h5">Full Name</label>
                                     <input type="text" class="form-control" id="exampleInputText2"
                                         placeholder="Enter your full name" name="name">
                                 </div>
                             </div>
                             <div class="col-lg-6">
                                 <div class="form-group mb-3">
                                     <label for="exampleInputText04" class="h5">Phone Number</label>
                                     <input type="text" class="form-control" id="exampleInputText04"
                                         placeholder="Enter phone number" name="number">
                                 </div>
                             </div>
                             <div class="col-lg-6">
                                 <div class="form-group mb-3">
                                     <label for="exampleInputText006" class="h5">Email</label>
                                     <input type="text" class="form-control" id="exampleInputText006"
                                         placeholder="Enter your Email" name="email">
                                 </div>
                             </div>
                             <div class="col-lg-6">
                                 <div class="form-group mb-3">
                                     <label for="exampleInputText2" class="h5">Type</label>
                                     <select name="type" class="selectpicker form-control" data-style="py-0">
                                         <option>Type</option>
                                         <option>Trainee</option>
                                         <option>Employee</option>
                                     </select>
                                 </div>
                             </div>
                             <div class="col-lg-6">
                                 <div class="form-group mb-3">
                                     <label for="exampleInputText2" class="h5">Role</label>
                                     <select name="role" class="selectpicker form-control" data-style="py-0">
                                         @foreach ($roles as $role)
                                             <option value="{{ $role->name }}">{{ $role->name }}</option>
                                         @endforeach
                                     </select>
                                 </div>
                             </div>
                             <div class="col-lg-6">
                                 <div class="form-group mb-3">
                                     <label for="exampleInputText2" class="h5">Password</label>
                                     <input type="password" class="form-control" id="exampleInputText006"
                                         placeholder="Enter your Password" name="password">
                                 </div>
                             </div>
                             <div class="col-lg-6">
                                 <div class="form-group mb-3">
                                     <label for="exampleInputText2" class="h5">Confirm Password</label>
                                     <input type="password" class="form-control" id="exampleInputText006"
                                         placeholder="Enter your Password" name="confirm_password">
                                 </div>
                             </div>
                             <div class="col-lg-12">
                                 <div class="d-flex flex-wrap align-items-ceter justify-content-center mt-2">
                                     <button type="submit" class="btn btn-primary mr-3">Save</button>
                                     <button type="reset" class="btn btn-secondary">Cancel</button>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 @endif

 <div class="modal fade bd-example-modal-lg" role="dialog" aria-modal="true" id="new-create-modal">
     <div class="modal-dialog  modal-dialog-centered modal-lg" role="document">
         <div class="modal-content">
             <div class="modal-header d-block text-center pb-3 border-bttom">
                 <h3 class="modal-title" id="exampleModalCenterTitle03">New Task</h3>
             </div>
             <div class="modal-body">
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="form-group mb-3">
                             <label for="exampleInputText03" class="h5">Task Name</label>
                             <input type="text" class="form-control" id="exampleInputText03"
                                 placeholder="Enter task Name">
                             <a href="#" class="task-edit text-body"><i class="ri-edit-box-line"></i></a>
                         </div>
                     </div>
                     <div class="col-lg-6">
                         <div class="form-group mb-3">
                             <label for="exampleInputText2" class="h5">Assigned to</label>
                             <select name="type" class="selectpicker form-control" data-style="py-0">
                                 <option>Memebers</option>
                                 <option>Kianna Septimus</option>
                                 <option>Jaxson Herwitz</option>
                                 <option>Ryan Schleifer</option>
                             </select>
                         </div>
                     </div>
                     <div class="col-lg-6">
                         <div class="form-group mb-3">
                             <label for="exampleInputText2" class="h5">Project Name</label>
                             <select name="type" class="selectpicker form-control" data-style="py-0">
                                 <option>Enter your project Name</option>
                                 <option>Ui/Ux Design</option>
                                 <option>Dashboard Templates</option>
                                 <option>Wordpress Themes</option>
                             </select>
                         </div>
                     </div>
                     <div class="col-lg-12">
                         <div class="form-group mb-3">
                             <label for="exampleInputText40" class="h5">Description</label>
                             <textarea class="form-control" id="exampleInputText40" rows="2" placeholder="Textarea"></textarea>
                         </div>
                     </div>
                     <div class="col-lg-12">
                         <div class="form-group mb-3">
                             <label for="exampleInputText8" class="h5">Checklist</label>
                             <input type="text" class="form-control" id="exampleInputText8"
                                 placeholder="Add List">
                         </div>
                     </div>
                     <div class="col-lg-12">
                         <div class="form-group mb-0">
                             <label for="exampleInputText01" class="h5">Attachments</label>
                             <div class="custom-file">
                                 <input type="file" class="custom-file-input" id="inputGroupFile01">
                                 <label class="custom-file-label" for="inputGroupFile01">Upload media</label>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-12">
                         <div class="d-flex flex-wrap align-items-ceter justify-content-center mt-4">
                             <div class="btn btn-primary mr-3" data-dismiss="modal">Save</div>
                             <div class="btn btn-primary" data-dismiss="modal">Cancel</div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>

 @if (request()->is('roles/*') || request()->is('roles'))
     <div class="modal fade bd-example-modal-lg" role="dialog" aria-modal="true" id="new-role-modal">
         <div class="modal-dialog  modal-dialog-centered modal-lg" role="document">
             <div class="modal-content">
                 <div class="modal-header d-block text-center pb-3 border-bttom">
                     <h3 class="modal-title" id="exampleModalCenterTitle">New Role</h3>
                 </div>
                 <div class="modal-body">
                     <form action="{{ url('roles/store') }}" method="POST">
                         @csrf
                         <div class="row">
                             <div class="col-lg-12">
                                 <div class="form-group mb-3">
                                     <label for="exampleInputText02" class="h5">Role Name</label>
                                     <input type="text" class="form-control" id="exampleInputText02"
                                         placeholder="Enter role Name" name="name">
                                     <a href="#" class="task-edit text-body"><i
                                             class="ri-edit-box-line"></i></a>
                                 </div>
                             </div>
                             <div class="col-lg-12">
                                 <div class="form-group mb-3">
                                     <label for="exampleInputText02 col-md-12" class="h5">Role Permissions</label>
                                     <div class="col-md-12">
                                         @foreach ($permissions as $permission)
                                             <div
                                                 class="custom-control custom-checkbox custom-checkbox-color-check custom-control-inline">
                                                 <input type="checkbox" class="custom-control-input bg-primary"
                                                     id="customCheck-{{ $permission->id }}" name="permissions[]"
                                                     value="{{ $permission->id }}">
                                                 <label class="custom-control-label"
                                                     for="customCheck-{{ $permission->id }}">
                                                     {{ $permission->name }}</label>
                                             </div>
                                         @endforeach
                                     </div>

                                 </div>
                             </div>
                             <div class="col-lg-12">
                                 <div class="d-flex flex-wrap align-items-center justify-content-center mt-2">
                                     <button type="submit" class="btn btn-primary mr-3">Save</button>
                                     <button type="reset" class="btn btn-secondary">Cancel</button>
                                 </div>
                             </div>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 @endif
