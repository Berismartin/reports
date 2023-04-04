<!doctype html>
<html lang="en">
  <head> 
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BERIS mgnt</title>
    <link rel="stylesheet" href="assets/bootstrap5.3/dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="assets/font-awesome/css/fontawesome.css">
     <link rel="stylesheet" href="assets/jbox/css/jbox.css">
     <link rel="stylesheet" href="assets/app-set-icons/simple-icons.css">
     <link rel="stylesheet" href="assets/app-set-icons/colors.css">
     <link rel="stylesheet" href="assets/font-awesome/css/all.css">
     <link rel="stylesheet" type="text/css" href="assets/datatables/DataTables-1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/alerts.css">
    <link rel="stylesheet" href="css/dashboards.css">
    <link rel="stylesheet" href="css/teachers.css">
    <link rel="stylesheet" href="css/subjectss.css">
    <link rel="stylesheet" href="css/student.css">
    <link rel="stylesheet" href="css/classes.css">
    <link rel="stylesheet" href="css/notices.css">
    <link rel="stylesheet" href="css/years.css">
    <link rel="stylesheet" href="css/exams.css">
    <link rel="stylesheet" href="css/activity.css">
    <link rel="stylesheet" href="css/result.css">
  </head>
  <body>
  <input type="checkbox" class="check" id="check" >
    <?php include 'inc/nav-bar.php'; ?>
    <!-- side bar -->
    <div class="side-bar" >
      <div class="side-bar-title"  >
        <img src="img/refs/koala.jpg" alt="">
        <div>
          <p>Beris <span class="text-dark">martin</span></p>
          <span>Administrator</span>
        </div>
      </div>
        <div class="link-list">
          <ul>
          <li class="tooltip-bottom"  title="dashboard"> <a href="dashboard.php"> <i class="fa fa-dashboard "></i><span>Dashboard</span> </a> </li>
          <li>
              <button class="btn d-inline-flex align-items-center collapsed border-0" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#forms-collapse" aria-controls="forms-collapse"><i class="fa fa-chevron-right"></i><span>School Files</span></button>
              <ul class="list-unstyled  collapse" id="forms-collapse">
                  <li> <a href="dashboard.php?page=teachers"> <i class="fa fa-user"></i> <span>Teachers</span></a> </li>
                  <li> <a href="dashboard.php?page=subjects"> <i class="fa fa-book"></i><span>Subjects </span> </a> </li>
                  <li> <a href="dashboard.php?page=years"> <i class="fa fa-calendar"></i> <span>Years</span></a> </li>
                  <li> <a href="dashboard.php?page=classes"> <i class="fa fa-crosshairs"></i><span>classes</span> </a> </li>
              </ul>
            </li> 
          <li> <a href="dashboard.php?page=exams"> <i class="fa fa-file"></i> <span>Exams</span></a> </li>   
          <li> <a href="dashboard.php?page=students"> <i class="fa fa-users"></i> <span>students</span></a> </li>
          <li> <a href="dashboard.php?page=setresults"> <i class="fa fa-users"></i> <span>Results</span></a> </li>
          </ul>
          <div  class="notice notice-success target-notice">Click me</div>
        </div> 
    </div>

    <?php include 'inc/script.php'?>
    
 