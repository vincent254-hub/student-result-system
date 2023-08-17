<?php
error_reporting(0);
include('includes/config.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">


<title>noticeboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
</style>
</head>
<body>
   <div>
   <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h2>Notice Board</h2>
                        <hr color="#000" />
                        <marquee direction="up"  onmouseover="this.stop();" onmouseout="this.start();">
                   <ul>
                        <?php $sql = "SELECT * from tblnotice";
                            $query = $dbh->prepare($sql);
                            $query->execute();
                            $results=$query->fetchAll(PDO::FETCH_OBJ);
                            $cnt=1;
                            if($query->rowCount() > 0)
                            {
                            foreach($results as $result)
                            {   ?>                      
                            <li><a href="notice-details.php?nid=<?php echo htmlentities($result->id);?>" target="_blank"><?php echo htmlentities($result->noticeTitle);?></li>
                        <?php }} ?>

                   </ul>
               </marquee>

                    </div>
                </div>
            </div>

   </div>

</body>
</html>