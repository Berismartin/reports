    <!-- mini-nav-bar -->
    <?php include_once 'inc/class_modal.php'?>
    <div class="page-navigation nav-streams">
            <span><i class="fa fa-arrow-left" id="back"></i></span>
            <div class="navigation">
                <span class="dash"> <i class="fa fa-dashboard"></i> Dashboard</span>
                <span> <i class="fa fa-angle-right "></i>Classes</span>  
            </div>
            
        </div>
       
        <div class="action-bar"> 
        <button type="button" class="button-add" data-bs-toggle="modal" data-bs-target="#class_add_modal">
            Add Class
          </button>
    
 </div>

<div class="streams_all bg-white">
    <div class=" p-0">
        <div class="add_title">
                <i class="fa fa-calendar-o"></i>
            <span class="text-white">System</span> <h4> Classes</h4>
            </div>
        </div> 

        <div class="bd-example-snippet bd-code-snippet"><div class="bd-example">
        <nav>
          <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">S1</button>
            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</button>
            <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button>
          </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
             <!-- data for s1 -->

             <div class="p-3 container ">
              <div class="container d-flex justify-content-around mb-5">
                  <!-- classes section -->
                  <div class="classes">
                    <div class="container">
                      <div class="row">
                        <div class="col-6">
                          <div class="card p-2 mb-2">
                            <h4>89</h4>
                            <p>No. of teachers</p>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="card p-2 mb-2">
                            <h4>45</h4>
                            <p>No. of students</p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6">
                          <div class="card p-2 ">
                            <h4>66</h4>
                            <p>No. of Subjects</p>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="card p-2 ">
                            <h4>33</h4>
                            <p>No. of Streams</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>



                  <!-- streams section -->
                  <div class="streams d-flex justify-content-between">
                    <div class="class-actions text-center pt-2">
                      <div class="class-details">
                      <p class="lead">Leadership</p>
                          <p class="lead">Board</p>
                        <div>  
                        <p>Class Teacher:</p>
                        <p>Beris Martin</p>
                        </div>
                        <div>
                        <p>Class Monitor:</p>
                        <p>Beris Martin</p>
                        </div>
                        <div>
                        <p>Class Council:</p>
                        <p>Beris Martin</p>
                        </div>
                         
                      </div>
                    <div class="set mt-2">
                            <label for="">Set Class Teacher:</label>
                            <select class="  form-select form-select-sm shadow-none  "  >
                                <option value="">Select Class</option>
                                <option value="0">s1</option>
                                <option value="1">s2</option>
                                <option value="2">s3</option>
                                <option value="3">s4</option>
                            </select>
                        </div>
                        <div>
                          <button class="button-add">View Students</button>
                        </div>
                    </div>
                    

                    <div class="container-md stream_list">
                     <p class="lead">Streams</p>
                        <ul class="list-group">
                          <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span>Cras justo odio</span>
                            <div class="ms-2">
                            <span class="badge   badge-pill">14</span>
                            <span class="badge badge-pill"><i class="fa fa-pencil stream_edit"></i></span>
                            </div>
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span class="str">Dapibus ac facilisis in</span>
                            <div class="ms-2">
                            <span class="badge   badge-pill">34</span>
                            <span class="badge badge-pill"><i class="fa fa-pencil stream_edit "></i></span>
                            </div>
                          </li>
                           
                        </ul>
                        <div class="stream_add">
                          <input type="text" class="stream">
                          <button class="button-add" id="stream_add"><i class="fa fa-plus"></i></button>
                          <button class="button-add d-none" id="stream_edit"><i class="fa fa-save"></i></button>
                        </div>
                    </div>
                  </div>
              </div>

              <!-- table of teachers teaching that class -->

              <div class="class-stream">
                <div class="class-table mt-3">
                  <div>
                  <div class="px-3  table-head bg-white ">
                      <h6>Photo</h6>
                      <h6>Teacher</h6>
                      <h6>Subject</h6> 
                      <h6>Status</h6>
                      <h6>Tools</h6>
                </div>
                      <ul id="myUL" class="list px-3 bg-white ">
                              <li class="mb-3 table">
                              <div>
                                  <img src="img/refs/koala.jpg">
                                </div>
                                <div><p>dfg</p></div> 
                                <div><p>gfd</p></div>
                                <div><span class="green text-light fw-bolder px-3">voted</span></div>
                                <div>
                                      <a class="platform" data-id=""><i class="fa fa-pencil pri"></i></a>
                                      <i class="fa fa-edit text-success edit"></i>
                                      <a  href="voter_delete.php?delete"><i class="fa fa-trash text-danger"></i></a>		 	  			
                                </div> 
                      
                                </li>  
                      </ul>
                  </div>
                </div>
              </div>
             </div>
          </div>
          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <p>This is sdlder content the <p>Profile tab's</p> associated content. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
          </div>
          <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
            <p>dof this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
          </div>
        </div>
        </div>
    </div>


    </div>
</div>

<script src="js/strea.js"></script>

 