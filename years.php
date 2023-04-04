<div class="page-navigation nav-teachers">
    <span><i class="fa fa-arrow-left" id="back"></i></span>
    <div class="navigation">
        <span class="dash"> <i class="fa fa-dashboard"></i> Dashboard</span>
         <span> <i class="fa fa-angle-right "></i>Years & Terms</span>  
    </div>
 </div>

 <div class="action-bar">
     <button class="button-add" id="year_update">Update Year</button>
     <button class="button-add" id="year_add">Add Year</button>
     <button class="button-add" id="term_add">Add Term</button>
     <button class="button-add" id="term_update">Update Term</button>
 </div>

 <div class="years_all bg-white">
 <div class="add_title">
         <i class="fa fa-pencil-square-o"></i>
         <span class="text-white">System configure</span> <h4> Years & Terms</h4>
      </div>
    <!-- years section -->
    <div class="d-flex justify-content-between"> 
            <div class="years">
            <h5 class=" ms-3 mt-2">System Year</h5>
               <div class="system-years text-center">
                  <div class="year-add">
                     <div class="set">
                        <label for="">Year:</label>
                        <input class="effect" type="text" placeholder="regdate"> 
                        <button class="submit"><i class="fa fa-add"></i>Add year</button>
                     </div>
                  </div>
                  <div class="year-update set">
                     <label for="">Teacher: </label>
                     <select id="setteachers" class=" form-select form-select-sm shadow-none"  aria-label=".form-select-sm example">
                           <option value="">Select Teacher</option>
                           <option value="0">blue</option>
                           <option value="1">red</option>
                           <option value="2">green</option>
                           <option value="3">yellow</option>
                        </select>
                        <button class="mt-2 submit"><i class="fa fa-save"></i> Update</button>
                  </div>
            </div>

            <div class="year-table px-2">
               <div class="bg-light text-center p-1">
                  <p>Manage system years</p>
               </div>
               <div class="mx-3">
                     <table class="table text-center">
                        <thead>
                           <th width="5% ">#</th>
                           <th>Year</th>
                           <th width="5%">Tool</th>
                        </thead>
                        <tbody>
                           <tr>
                              <td>1</td>
                              <td>2022</td>
                              <td><i class="fa fa-trash text-danger"></i></td>
                           </tr>
                        </tbody>
                     </table>
               </div>
            </div>
    </div>

    <div class="terms">
      <h5 class=" ms-3 mt-2">System Terms</h5> 
               <div class="system-terms text-center">
                  <div class="term-add">
                     <div class="set">
                        <label for="">Year:</label>
                        <input class="effect" type="text" placeholder="regdate"> 
                        <button class="submit"><i class="fa fa-add"></i>Add year</button>
                     </div>
                  </div>
                  <div class="term-update set">
                     <label for="">Teacher: </label>
                     <select id="setteachers" class=" form-select form-select-sm shadow-none"  aria-label=".form-select-sm example">
                           <option value="">Select Teacher</option>
                           <option value="0">blue</option>
                           <option value="1">red</option>
                           <option value="2">green</option>
                           <option value="3">yellow</option>
                        </select>
                        <button class="submit mt-2"><i class="fa fa-save"></i> Update</button>
                  </div>
            </div>
            <div class="year-table px-2">
               <div class="bg-light text-center p-1">
                  <p>Manage system terms</p>
               </div>
               <div class="mx-3">
                     <table class="table text-center">
                        <thead>
                           <th width="5% ">#</th>
                           <th>Term</th>
                           <th width="5%">Tool</th>
                        </thead>
                        <tbody>
                           <tr>
                              <td>1</td>
                              <td>Term 1</td>
                              <td><i class="fa fa-trash text-danger"></i></td>
                           </tr>
                        </tbody>
                     </table>
               </div>
            </div>
    </div>

  </div>
    </div>
 </div>

 <script src="js/year.js"></script> 