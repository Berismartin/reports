<?php include_once 'inc/header.php' ?> 
<div class="p-2 contain_all">
<?php
  if (isset($_GET['page']) && $_GET['page']=='teachers') {
    include_once 'teachers.php';

  }elseif (isset($_GET['page']) && $_GET['page']=='subjects') {
    include_once 'subjects.php';

  }elseif (isset($_GET['page']) && $_GET['page']=='years') {
    include_once 'years.php';

  }elseif (isset($_GET['page']) && $_GET['page']=='classes') {
    include_once 'classes.php';

  }elseif (isset($_GET['page']) && $_GET['page']=='exams') {
    include_once 'exams.php';

  }elseif (isset($_GET['page']) && $_GET['page']=='students') {
    include_once 'students.php';

  }elseif (isset($_GET['page']) && $_GET['page']=='setresults') {
    include_once 'results.php';

  }else{
    include_once 'dashboard_view.php';
  }

 ?> 

</div>





