
    <!-- mini-nav-bar -->

    <div class="page-navigation nav-teachers">
            <span><i class="fa fa-arrow-left" id="back"></i></span>
            <div class="navigation">
                <span class="dash"> <i class="fa fa-dashboard"></i> Dashboard</span>
                <span> <i class="fa fa-angle-right "></i>Teachers</span>  
            </div>
        </div>
 
 <div class="action-bar">
     <button class="button-add" id="teacher_subject_set">Set Subject teacher</button>
     <button class="button-add" id="teacher_add">Add teacher</button>
 </div>
 
 <div class="teachers_all bg-white">
 <!-- table for the teachers -->
    <div class=" teachers_view">
        <div class="add_title">
            <i class="fa fa-person"></i>
           <span class="text-white">System</span> <h4> Teachers</h4>
        </div>
        <div class="container bg-white pt-3">
            <div class="table-responsive">
                <table class="table table-sm teachers_table">
                    <thead>
                        <th>#</th>
                        <th>Img</th>
                        <th>Names</th>
                        <th>Subjects</th>
                        <th>classes</th>
                        <th>Contact</th>
                        <th>Status</th>
                        <th>Tool</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td> <img src="img/refs/koala.jpg" alt=""></td>
                            <td>dffdssaadssd</td>
                            <td>dffdssaadssd</td>
                            <td>dffdssaadssd</td>
                            <td>dffdssaadssd</td>
                            <td>dffdssaadssd</td>
                            <td>
                                <i class="fa fa-pencil text-primary edit" data-toggle="tooltip" data-placement="bottom" title="Edit"></i>
                                <i class="fa fa-pen-to-square text-success ms-1" data-toggle="tooltip" data-placement="bottom" title="View"></i>
                                <i class="fa fa-trash-can text-danger ms-1" data-toggle="tooltip" data-placement="bottom" title="Delete"></i>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    
    <!-- teachers add  section -->
    <div class="teacher_add_section">
        <div class="add_title">
            <i class="fa fa-user-plus"></i>
            <h4>Add new teacher</h4>
        </div>
        <div class="container bg-white">
            <!-- form starts here -->
            <form action="" method="POST" id="teacher_add_form">
                <div class="container tr_form p-0"> 
                    <div>
                        <div class="set">
                            <label for="">Registration Date:</label>
                            <input class="effect" type="text" placeholder="regdate">
                            <span class="focus-border"></span>
                        </div>
                        <div class="set">
                            <label for="">Fullname</label>
                            <input class="effect" type="text" placeholder="Enter your names">
                            <span class="focus-border"></span>
                        </div>
                        <div class="set">
                            <label for="">Contact</label>
                            <input class="effect" type="text" placeholder="Enter contact">
                            <span class="focus-border"></span>
                        </div>
                        <div class="set">
                            <label for="">Email</label>
                            <input class="effect" type="text" placeholder="Enter Valid Email">
                            <span class="focus-border"></span>
                        </div>
                        <div class="set">
                        <label for="">Photo</label>
                        <input class="effect form-control" type="file" placeholder="Enter Username">
                    </div>
                    </div>
                   <div class="teacher_sidefor">
                         <div class="set">
                            <label for="">Initials</label>
                            <input class="effect" type="text" placeholder="Enter initials">
                            <span class="focus-border"></span>
                        </div>
                        <div class="set">
                            <label for="">Username</label>
                            <input class="effect" type="text" placeholder="Enter Username">
                            <span class="focus-border"></span>
                        </div>
                        <div class="set">
                            <label for="">Password</label>
                            <input class="effect password" type="password" placeholder="Enter Password">
                            <span class="focus-border"></span>
                        </div>
                        <div class="set">
                            <label for="">Confirm Password</label>
                            <input class="effect confirm_password" type="password" placeholder="Re-Enter password">
                            <span class="focus-border"></span>
                        </div>
                        <div class="form_footer"> 
                            <button type="reset" value="reset" class="reset">Reset</button>
                            <button type="submit" value="submit" class="submit new_teacher"><i class="fa fa-check"></i> Submit</button>
                        </div>
                    </div>
                 </div> 
            </form>
        
        </div>
     </div>

     <div class="teacher_edit">
     <div class="add_title">
            <i class="fa fa-pencil-square-o"></i>
           <span class="text-white">Edit</span> <h4> Teacher</h4>
        </div>
        <form action="">
        <div class="container teacher_profile bg-white p-4">
            <div class="left">
                <div class="teacher_profile_left pb-3 text-center pt-4">
                    <p class="lead">Profile</p>
                    <img src="img/refs/koala.jpg" alt="">
                    <p>Beris martin</p>
                    <input type="file" class="form-control">
                </div>
            </div>
            <div class="right">
                <div class="teacher_profile_right pt-4 ps-3">
                    <p class="lead ">Edit Details</p>
                    <div class="row">
                        <div class="col col-6">
                            <div class="set">
                                <label for="">Fullname:</label>
                                <input class="effect" type="text" placeholder="name">
                                <span class="focus-border"></span>
                            </div>
                        </div>
                        <div class="col col-6">
                            <div class="set">
                                <label for="">Contact:</label>
                                <input class="effect" type="text" placeholder="regdate">
                                <span class="focus-border"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-6">
                            <div class="set">
                                <label for="">Email:</label>
                                <input class="effect" type="text" placeholder="regdate">
                                <span class="focus-border"></span>
                            </div>
                        </div>
                        <div class="col col-6">
                            <div class="set">
                                <label for="">Address:</label>
                                <input class="effect" type="text" placeholder="regdate">
                                <span class="focus-border"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-6">
                            <div class="set">
                                <label for="">Initials:</label>
                                <input class="effect" type="text" placeholder="regdate">
                                <span class="focus-border"></span>
                            </div>
                        </div>
                        <div class="col col-6">
                            <div class="set">
                                <label for="">Registration Date:</label>
                                <input class="effect" type="text" placeholder="regdate">
                                <span class="focus-border"></span>
                            </div>
                        </div>
                    </div>
                    <div class="form_footer"> 
                        <button type="reset" value="reset" class="reset">Reset</button>
                        <button type="submit" value="submit" class="submit bg-success"><i class="fa fa-pencil-square-o"></i> Update</button>
                    </div>
                </div>
                
            </div>
        </div>
        </form>
     </div>
 
    <div class="set-subject-teacher">
        <div class="bg-white">
            <div class="add_title">
                <i class="fa fa-pencil-square-o"></i>
            <span class="text-white">Subject</span> <h4> Teacher</h4>
            </div>

            <div class="card m-2" >
                <div class="card-head">
                    <div class="card-title bg-light p-1">
                    <p class="lead">Set teacher to a subject</p>
                    </div>
                </div>
                <div class="card-body">
                    <div class="set-teacher">
                        <div class="">
                            <label for="">Teacher: </label>
                            <select id="setteachers" class=" form-select form-select-sm shadow-none"  aria-label=".form-select-sm example">
                                    <option value="">Select Teacher</option>
                                    <option value="0">blue</option>
                                    <option value="1">red</option>
                                    <option value="2">green</option>
                                    <option value="3">yellow</option>
                                </select>
                        </div>
                        <div class="">
                            <label for="">Class:</label>
                            <select class="set-subject-class form-select form-select-sm shadow-none"  aria-label=".form-select-sm example">
                                    <option value="">Select Optionals</option>
                                    <option value="0">blue</option>
                                    <option value="1">red</option>
                                    <option value="2">green</option>
                                    <option value="3">yellow</option>
                                </select>
                        </div>
                        <div class="">
                            <label for="">Stream:</label>
                            <select class="set-subject-stream form-select form-select-sm shadow-none" disabled="disabled"  aria-label=".form-select-sm example">
                                    <option value="">Select Optionals</option>
                                    <option value="0">blue</option>
                                    <option value="1">red</option>
                                    <option value="2">green</option>
                                    <option value="3">yellow</option>
                                </select>
                        </div>
                        <div class="">
                            <label for="">Subject:</label>
                            <select class="set-subject-subject form-select form-select-sm shadow-none" disabled="disabled"  aria-label=".form-select-sm example">
                                    <option value="">Select Optionals</option>
                                    <option value="0">blue</option>
                                    <option value="1">red</option>
                                    <option value="2">green</option>
                                    <option value="3">yellow</option>
                                </select>
                        </div>
                        <div class="">
                            <button class="submit subject-tr-save" ><i class="fa fa-save"></i> Save <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span></button>
                        </div>
                    </div>

                    <div class="container set-teacher-subject-table bg-light mt-3">
                        <div>
                            <p>Table showing teachers and their subjects</p>
                        </div>
                        <table class="table subject-teacher-table">
                            <thead>
                                <th>#</th>
                                <th>Teacher</th>
                                <th>Subject</th>
                                <th>Class</th>
                                <th>Stream</th>
                                <th>Tool</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>sdsdsd</td>
                                    <td>sdsdsd</td>
                                    <td>asdas</td>
                                    <td>1ddsa</td>
                                    <td><i class="fa fa-pencil edit-subject-teacher"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
 


     <script src="js/teacherss.js"></script>
     <script src="js/func.js"></script>
 <script type="text/javascript">
        $(document).ready(function() {

            // initialize the datatables
            $('.teachers_table').DataTable({
                "order": [[ 3, "desc" ]],
                "paging":   true,
                "ordering": true,
                "info":     false,
                "sorting": true
            });

            //tooltips enabled
            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
            });  
        } );       
</script>
 