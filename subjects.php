 
    <!-- mini-nav-bar -->

    <div class="page-navigation nav-subject">
            <span><i class="fa fa-arrow-left" id="back"></i></span>
            <div class="navigation">
                <span class="dash"> <i class="fa fa-dashboard"></i> Dashboard</span>
                <span> <i class="fa fa-angle-right "></i>Subjects</span>  
            </div>
        </div>
 
 <div class="action-bar">
     <button class="button-add" id="subject_add">Add Subject</button>
 </div>

<div class="subject_all bg-white">
        <!-- view all subjects -->
        <div class="subject_view">
            <div class="add_title">
                <i class="fa fa-book"></i>
                <span class="text-white">System</span> <h4> Subjects</h4>
            </div>
            <div class="container bg-white pt-3 pb-3 d-flex justify-content-around">
                <div class="table_container p-3">
                    <div class="table-responsive ">
                        <table class="table table-sm subjects_table">
                            <thead>
                                <th>#</th> 
                                <th>Code</th>
                                <th>Class</th>
                                <th>Subject</th> 
                                <th>Tool</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td> ss</td>
                                    <td>dffdssaadssd</td> 
                                    <td>dffdssaadssd</td>
                                    <td>
                                        <i class="fa fa-pencil text-primary edit" data-toggle="tooltip" data-placement="bottom" title="Edit"></i> 
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- edit section -->
                <div class="edit_bar text-center">
                    <p>Edit S1 subject</p>
                    <span>&times;</span>
                     <div>
                     <div class=" ">
                            <label for="">Registration Date:</label>
                            <input class="effect" type="text" placeholder="regdate"> 
                        </div>
                        <div class=" ">
                            <label for="">Fullname</label>
                            <input class="effect" type="text" placeholder="Enter your names"> 
                        </div>
                     </div>
                    <div class="set form-check form-switch mb-0">
                        <input class="form-check-input shadow-none" role="switch" id="optional" type="checkbox">
                        <label for="optional">Is subject optional!</label>
                    </div>
                    <div class="form_footer">
                        <button type="submit" value="submit" class="submit bg-success"><i class="fa fa-check-square-o"></i> Update</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- add subjects -->
        <div class="subject_add">
            <div class="add_title">
                    <i class="fa fa-book"></i>
                <span class="text-white">Add System</span> <h4> Subjects</h4>
            </div>

            <div class="container bg-white">
                <form action="" method="POST" id="subject_add">
                    <div class="subject_form pb-3">
                        <div class="left">
                            <div class="set">
                                <label for="">Subject Name:</label>
                                <input  class="effect subject is-invalid" name="subject" type="text" placeholder="subject name" >
                                <span class="focus-border"></span>
                            </div>
                            <div class="set">
                                <label for="">Paper Code:</label>
                                <input class="effect paper_code" name="paper_code" type="text" placeholder="Enter paper code" >
                                <span class="focus-border"></span>
                            </div>
                            <div class="set form-check form-switch">
                                <input class="form-check-input shadow-none" role="switch" id="optional" type="checkbox">
                                <label for="optional">Check if subject is optional</label>
                            </div>
                            <div class="form_footer"> 
                                <button type="reset" value="reset" class="reset">Reset</button>
                                <button type="submit" value="submit" class="submit new_subject"><i class="fa fa-save"></i> Save</button>
                            </div>
                        </div>

                        <div class="right">
                            <div class="set">
                                <input id="s1" type="checkbox">
                                <label for="s1">Senior one</label>
                            </div>
                            <div class="set">
                                <input id="s2" type="checkbox">
                                <label for="s2">Senior two</label>
                            </div>
                            <div class="set">
                                <input id="s3" type="checkbox">
                                <label for="s3">Senior three</label>
                            </div>
                            <div class="set">
                                <input id="s4" type="checkbox">
                                <label for="s4">Senior four</label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
</div>


<script src="js/subjectsss.js"></script>
<script type="text/javascript">
        $(document).ready(function() {

            // initialize the datatables
            $('.subjects_table').DataTable({
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