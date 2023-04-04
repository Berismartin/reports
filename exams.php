<?php 
if(isset($_GET['clas'])){
    include_once 'exam_view.php';
}else{

?>
<div class="page-navigation nav-teachers">
            <span><i class="fa fa-arrow-left" id="back"></i></span>
            <div class="navigation">
                <span class="dash"> <i class="fa fa-dashboard"></i> Dashboard</span>
                <span> <i class="fa fa-angle-right "></i>Exams</span>  
            </div>
        </div>


<div class="exam_all">
    <div class="add_title">
        <i class="fa fa-person"></i>
         <h4> Exam</h4><span class="text-white"> Management Section</span>
    </div>

    <div class="bg-white">
        <div class="container exam">
            <div class="text-center   mt-4 exam-form">
                <p class="p-2 text-white">Select Class:</p>
                <div class="">
                    <label for="">Class:</label>
                    <select class="exam_class form-select form-select-sm shadow-none"  aria-label=".form-select-sm example">
                            <option value="">Select Optionals</option>
                            <option value="0">blue</option>
                            <option value="1">red</option>
                            <option value="2">green</option>
                            <option value="3">yellow</option>
                        </select>
                </div>               
                 
                <button type="reset" value="reset" class="my-3 generate" id="generate_exam_activity">Generate</button>               
            </div>
        </div>
    </div>
    
</div>

<?php }?>



<script src="js/exams.js"></script>