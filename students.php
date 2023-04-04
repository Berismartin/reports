 
    <!-- mini-nav-bar -->

    <div class="page-navigation nav-student">
            <span><i class="fa fa-arrow-left" id="back"></i></span>
            <div class="navigation">
                <span class="dash"> <i class="fa fa-dashboard"></i> Dashboard</span>
                <span> <i class="fa fa-angle-right "></i>Students</span>  
            </div>
        </div>
 
 <div class="action-bar">
 <button class="button-add" id="student_multiple_add">Add Multiple Students</button>
    <button class="button-add" id="student_add">Add Single Student</button>
    
 </div>
 
 <div class="student_all bg-white">
 <!-- table for the student -->
    <div class="container student_view">
        <div class="add_title">
            <i class="fa fa-users"></i>
           <span class="text-white">Manage</span> <h4> Students</h4>
        </div>
        <div class="container bg-white pt-3">
            <div class="table-responsive">
                <table class="table table-sm student_table">
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
                            <td> <img alt=""></td>
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

  
    <!-- student add  section -->
    <div class="student_add_section">
        <div class="add_title">
            <i class="fa fa-user-plus"></i>
            <h4>Add new Student</h4>
        </div>
        <div class="container bg-white">
            <!-- form starts here -->
            <form action="" method="POST" id="student_add_form">
                <div class="container std_form p-0">
                    <div class="std_form_left">
                        <div class="set">
                            <label for="">Registration Date:</label>
                            <input class="effect" type="text" placeholder="regdate">
                            <span class="focus-border"></span>
                        </div>
                        <div class="set">
                            <label for="">Index no:</label>
                            <input class="effect" type="text" placeholder="Enter Index number">
                            <span class="focus-border"></span>
                        </div>
                        <div class="set">
                            <label for="">Fullname:</label>
                            <input class="effect" type="text" placeholder="Enter Student Names">
                            <span class="focus-border"></span>
                        </div>
                        <div class="set">
                         <label for="">Photo:</label>
                         <input class="effect form-control" type="file" placeholder="Enter Username">
                        </div>
                    </div>
                   <div class="student_sidefor">
                        <div class="set">
                            <label for="">Class:</label>
                            <select id="asian_animals" class="block form-select form-select-sm shadow-none select_class" aria-label=".form-select-sm example">
                                <option value="">Select Class</option>
                                <option value="0">s1</option>
                                <option value="1">s2</option>
                                <option value="2">s3</option>
                                <option value="3">s4</option>
                            </select>
                        </div>
                        <div class="set">
                            <label for="">Stream</label>
                            <select class="form-select form-select-sm shadow-none select_stream" disabled="disabled" aria-label=".form-select-sm example">
                                <option selected>Select Stream</option>
                                <option >blue</option>
                                <option value="1">red</option>
                                <option value="2">green</option>
                                <option value="3">yellow</option>
                            </select>
                            
                        </div>
                        <div class="set">
                            <label for="">House</label>
                            <select class="form-select form-select-sm shadow-none select_house" aria-label=".form-select-sm example">
                                <option selected>Select House</option>
                                <option >George</option>
                                <option value="1">Impala</option>
                                <option value="2">Kob</option>
                                <option value="3">Armitage</option>
                            </select>
                            
                        </div>
                        <div class="set form-check form-switch my-2">
                            <input class="form-check-input shadow-none" id="set_current" role="switch" id="optional" type="checkbox" checked="checked">
                            <label for="optional"><span>Current term and year</span></label>
                        </div>
                        <div class="form_footer"> 
                            <button type="reset" value="reset" class="reset">Reset</button>
                            <button type="submit" value="submit" class="submit"><i class="fa fa-check"></i> Submit</button>
                        </div>
                    </div>

                    <div class="form_Set_right">
                        <p>Optionals</p>
                            <!-- <div id="asian_animals" class="block">
                    <select class="option_select form-control mb-3">
                        <option>Select an Asian Animal</option>
                        <option value="0">Snow Leopard</option>
                        <option value="1">Red Panda</option>
                        <option value="2">Bengal Tiger</option>
                        <option value="3">Indian Rhinoceros</option>
                        <option value="4">Asian Elephant</option>
                        <option value="5">Clouded Leopard</option>
                    </select>

                    <div class="alert alert-success">
                        <div class="option_element" data-option="0">
                            <h2>Snow Leopard</h2>
                            <p>Size: 1-1,3m</p>
                            <p>Weight: 50-75 kg</p>
                        </div>
                    </div>
                </div> -->
                        <div class="set_optionals">
                            <div class="set">
                                <label for="">Optional subject 1:</label>
                                <select class="form-select form-select-sm shadow-none"  aria-label=".form-select-sm example">
                                    <option >Select Optionals</option>
                                    <option value="0">blue</option>
                                    <option value="1">red</option>
                                    <option value="2">green</option>
                                    <option value="3">yellow</option>
                                </select>
                                
                            </div>
                            <div class="set">
                                <label for="">Optional subject 2:</label>
                                <select class="form-select form-select-sm shadow-none"  aria-label=".form-select-sm example">
                                    <option >Select Optionals</option>
                                    <option value="0">blue</option>
                                    <option value="1">red</option>
                                    <option value="2">green</option>
                                    <option value="3">yellow</option>
                                </select>
                                
                            </div>
                        </div>

                        <div class="set_entry_data">
                            <span></span>
                        <div class="set">
                                <label for="">Year of Entry:</label>
                                <select class="form-select form-select-sm shadow-none"  aria-label=".form-select-sm example">
                                    <option >Select Year</option>
                                    <option value="0">2019</option>
                                    <option value="1">2020</option>
                                    <option value="2">2021</option>
                                    <option value="3">2022</option>
                                </select>
                                
                            </div>
                            <div class="set">
                                <label for="">Term of entry:</label>
                                <select class="form-select form-select-sm shadow-none"  aria-label=".form-select-sm example">
                                    <option >Select Term</option>
                                    <option value="0">term 1</option>
                                    <option value="1">term 2</option>
                                    <option value="2">term 3</option> 
                                </select>
                                
                            </div>
                        </div>
                
                    </div>
                 </div> 
            </form>
        
        </div>
     </div>

     <div class="student_edit">
        <div class="add_title">
            <i class="fa fa-pencil-square-o"></i>
           <span class="text-white">Edit Sysytem </span> <h4> Student</h4>
        </div>
        <form action="">
        <div class="container student_profile bg-white p-4">
            <div class="left">
                <div class="student_profile_left pb-3 text-center pt-4">
                    <p class="lead">Profile</p>
                    <img src="img/refs/koala.jpg" alt="">
                    <p>Beris martin</p>
                    <input type="file" class="form-control">
                </div>
            </div>
            <div class="right">
                <div class="student_profile_right pt-4 ps-3">
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

     <div class="students_multiple_add">
        <div class="add_title">
            <i class="fa fa-user-plus"></i>
            <h4>Add Multiple Students</h4>
        </div>
        <div class="container bg-white ">
            <div class="text-center student_mult">
                <div>
                <label for="">Year of Entry:</label>
                    <select class="form-select select_year form-select-sm shadow-none"  aria-label=".form-select-sm example">
                        <option value="" >Select Year</option>
                        <option value="0">2019</option>
                        <option value="1">2020</option>
                        <option value="2">2021</option>
                        <option value="3">2022</option>
                    </select>
                </div> 
                <div>
                <label for="">Term of Entry:</label>
                    <select class="form-select select_term form-select-sm shadow-none"  aria-label=".form-select-sm example">
                        <option value="">Select Term</option>
                        <option value="0">2019</option>
                        <option value="1">2020</option>
                        <option value="2">2021</option>
                        <option value="3">2022</option>
                    </select>
                </div>
                <div>
                <label for="">Class:</label>
                    <select class="form-select select_class form-select-sm shadow-none"  aria-label=".form-select-sm example">
                        <option value="">Select Class</option>
                        <option value="0">s1</option>
                        <option value="1">s2</option>
                        <option value="2">s3</option>
                        <option value="3">s4</option>
                    </select>
                </div>
                <div>
                <label for="">Stream:</label>
                    <select disabled="disabled" class="form-select form-select-sm shadow-none select_stream"  aria-label=".form-select-sm example">
                        <option value="">Select stream</option>
                        <option value="0">red</option>
                        <option value="1">blue</option>
                        <option value="2">north</option>
                        <option value="3">south</option>
                    </select>
                </div>
                <div>
                <label for="">House:</label>
                    <select class="form-select form-select-sm select_house shadow-none"  aria-label=".form-select-sm example">
                        <option value="">Select House</option>
                        <option value="0">red</option>
                        <option value="1">blue</option>
                        <option value="2">armitage</option>
                        <option value="3">kob</option>
                    </select>
                </div>
                <div>
                <label for="">Number:</label>
                     <input type="number"  class="number_of_rows" placeholder="Enter number of students" >
                </div>
                <div class="form_footer_multiple text-center py-3"> 
                <button type="reset" value="reset" class="reset">Reset</button> 
                <button type="reset" value="reset" class="generate" id="generate">Generate</button> 
            </div>
            
                
            </div>
            <div class="generated_multiple">
                <div class="container p-3">
                    <p class="lead text-center">Add many students at a time</p>
                    <div class="container p-3">
                        <div class="row text-center">
                            <div class="col col-5">
                                <label for="" >Index No</label>
                            </div>
                            <div class="col col-5">
                                <label for="">Fullname</label>
                            </div>
                        </div>
                        <div class="row setform justify-content-center">

                        </div>
                        <div class="form_footer"> 
                        <button type="reset" value="reset" class="reset">Reset</button>
                        <button type="submit" value="submit" class="submit bg-success"><i class="fa fa-save"></i> Save</button>
                    </div>
                    </div>
                </div>
            </div>
            
        </div>
     </div>
 

 

<script src="js/studen.js"></script>
<script src="js/select_student.js"></script>
 <script type="text/javascript">
        $(document).ready(function() {

            // initialize the datatables
            $('.student_table').DataTable({
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
 