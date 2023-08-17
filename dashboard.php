<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])=="")
{   header("Location: index.php"); }else{
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SRPS-Admin | Dashboard</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="css/toastr/toastr.min.css" media="screen" >
        <link rel="stylesheet" href="css/icheck/skins/line/blue.css" >
        <link rel="stylesheet" href="css/icheck/skins/line/red.css" >
        <link rel="stylesheet" href="css/icheck/skins/line/green.css" >
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
    </head>
    <body class="top-navbar-fixed">
        <div class="main-wrapper">
              <?php include('includes/topbar.php');?>
            <div class="content-wrapper">
                <div class="content-container">

                    <?php include('includes/leftbar.php');?>  

                    <div class="main-page">
                        <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-sm-6">
                                    <h2 class="title">Admin Dashboard</h2>
                                  
                                </div>
                                
                            </div>
                            
                      
                        </div>
                        

                        <section class="section">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-primary" href="manage-students.php">
                                        <?php 
                                            $sql1 ="SELECT StudentId from tblstudents ";
                                            $query1 = $dbh -> prepare($sql1);
                                            $query1->execute();
                                            $results1=$query1->fetchAll(PDO::FETCH_OBJ);
                                            $totalstudents=$query1->rowCount();
                                        ?>

                                            <span class="number counter"><?php echo htmlentities($totalstudents);?></span>
                                            <span class="name">Students</span>
                                            <span class="bg-icon"><i class="fa fa-users" style="margin:12px;"></i></span>
                                        </a>
                                        
                                    </div>
                                    

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" >
                                        <a class="dashboard-stat bg-black" href="manage-subjects.php">
                                        <?php 
                                            $sql ="SELECT id from  tblsubjects ";
                                            $query = $dbh -> prepare($sql);
                                            $query->execute();
                                            $results=$query->fetchAll(PDO::FETCH_OBJ);
                                            $totalsubjects=$query->rowCount();
                                        ?>
                                            <span class="number counter"><?php echo htmlentities($totalsubjects);?></span>
                                            <span class="name">Units Listed</span>
                                            <span class="bg-icon"><i class="fa fa-book " style="margin:12px;"></i></span>
                                        </a>
                                        
                                    </div>
                                   

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-top:1%;">
                                        <a class="dashboard-stat bg-warning" href="manage-classes.php">
                                        <?php 
                                            $sql2 ="SELECT id from  tblclasses ";
                                            $query2 = $dbh -> prepare($sql2);
                                            $query2->execute();
                                            $results2=$query2->fetchAll(PDO::FETCH_OBJ);
                                            $totalclasses=$query2->rowCount();
                                        ?>
                                            <span class="number counter"><?php echo htmlentities($totalclasses);?></span>
                                            <span class="name">Total Courses</span>
                                            <span class="bg-icon"><i class="fa fa-home" style="margin:12px;"></i></span>
                                        </a>
                                        
                                    </div>
                                    

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"  style="margin-top:1%">
                                        <a class="dashboard-stat bg-success" href="manage-results.php">
                                        <?php 
                                            $sql3="SELECT  distinct StudentId from  tblresult ";
                                            $query3 = $dbh -> prepare($sql3);
                                            $query3->execute();
                                            $results3=$query3->fetchAll(PDO::FETCH_OBJ);
                                            $totalresults=$query3->rowCount();
                                        ?>

                                            <span class="number counter"><?php echo htmlentities($totalresults);?></span>
                                            <span class="name">Results Declared</span>
                                            <span class="bg-icon"><i class="fa fa-file-text" style="margin:12px;"></i></span>
                                        </a>
                                        
                                    </div>
                                    

                                </div>
                                
                            </div>
                            
                        </section>
                        

                    </div>
                    

                    
                </div>
                
            </div>
            

        </div>
        
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/jquery-ui/jquery-ui.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>

        
        <script src="js/prism/prism.js"></script>
        <script src="js/waypoint/waypoints.min.js"></script>
        <script src="js/counterUp/jquery.counterup.min.js"></script>
        <script src="js/amcharts/amcharts.js"></script>
        <script src="js/amcharts/serial.js"></script>
        <script src="js/amcharts/plugins/export/export.min.js"></script>
        <link rel="stylesheet" href="js/amcharts/plugins/export/export.css" type="text/css" media="all" />
        <script src="js/amcharts/themes/light.js"></script>
        <script src="js/toastr/toastr.min.js"></script>
        <script src="js/icheck/icheck.min.js"></script>

        
        <script src="js/main.js"></script>
        <script src="js/production-chart.js"></script>
        <script src="js/traffic-chart.js"></script>
        <script src="js/task-list.js"></script>
        <script>
            $(function(){

                $('.counter').counterUp({
                    delay: 10,
                    time: 1000
                });
                toastr.options = {
                  "closeButton": true,
                  "debug": false,
                  "newestOnTop": false,
                  "progressBar": false,
                  "positionClass": "toast-top-center",
                  "preventDuplicates": false,
                  "onclick": null,
                  "showDuration": "300",
                  "hideDuration": "1000",
                  "timeOut": "5000",
                  "extendedTimeOut": "1000",
                  "showEasing": "swing",
                  "hideEasing": "linear",
                  "showMethod": "fadeIn",
                  "hideMethod": "fadeOut"
                }
                toastr["success"]( "Welcome to student Result Processing System Dashboard, You can setup and manage resources from here");

            });
        </script>
    </body>
</html>
<?php } ?>