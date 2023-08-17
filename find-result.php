<?php
session_start();
include('includes/config.php');?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Student Results Processing System</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/icheck/skins/flat/blue.css" >
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
    </head>
    <body class="">
        <div class="main-wrapper">

            <div class="login-bg-color bg-black-300">
                <div class="row">
                    <!-- new griding -->
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4">
                        
                            <h2>Student Login</h2>
                        <form action="result.php" method="post">
                                	<div class="form-group">
                                		<label for="rollid">Enter Roll Id</label>
                                        <input type="text" class="form-control" id="rollid" placeholder="Enter adm No" autocomplete="off" name="rollid">
                                	</div>
                                    <div class="form-group">
                                        <label for="default" class="col-sm-2 control-label">Course</label>
                                        <select name="class" class="form-control" id="default" required="required">
                                            <option value="">Select Course</option>
                                            <?php $sql = "SELECT * from tblclasses";
                                            $query = $dbh->prepare($sql);
                                            $query->execute();
                                            $results=$query->fetchAll(PDO::FETCH_OBJ);
                                            if($query->rowCount() > 0)
                                            {
                                            foreach($results as $result)
                                            {   ?>
                                            <option value="<?php echo htmlentities($result->id); ?>"><?php echo htmlentities($result->ClassName); ?>&nbsp; Semester-<?php echo htmlentities($result->Section); ?></option>
                                            <?php }} ?>
                                        </select>
                                    </div>

    
                                    <div class="form-group mt-20">
                                        <div class="">
                                      
                                            <button type="submit" class="btn btn-success btn-labeled pull-right">Search<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>

                                       <div class="col-sm-6">
                                       <h3><a href="index.php">Back to Home</a></h3> 
                                       
                                                            </div>
                                </form>
                       
                    </div>
                    <div class="col-lg-4">

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

        
        <script src="js/icheck/icheck.min.js"></script>

       
        <script src="js/main.js"></script>
        <script>
            $(function(){
                $('input.flat-blue-style').iCheck({
                    checkboxClass: 'icheckbox_flat-blue'
                });
            });
        </script>

       
    </body>
</html>
