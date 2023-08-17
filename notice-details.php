<?php
error_reporting(0);
include('includes/config.php'); 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>SRPS</title>
        
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        
        <link href="css/styles.css" rel="stylesheet" />

        <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
    </head>
    <body>
        
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="index.php">SRPS Notices</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link active" href="find-result.php">Students</a></li>
                        <li class="nav-item"><a class="nav-link active" href="admin-login.php">Admin</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <h2>School NoticeBoard</h2>
        </div>
        
        <section class="py-5">
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-10">

        <?php 
        $noticeid=$_GET['nid'];
        $sql = "SELECT * from tblnotice where id='$noticeid'";
        $query = $dbh->prepare($sql);
        $query->execute();
        $results=$query->fetchAll(PDO::FETCH_OBJ);
        $cnt=1;
        if($query->rowCount() > 0)
        {
            foreach($results as $result)
        {   ?>  

                        <h3><?php echo htmlentities($result->noticeTitle);?></h3>
                        <p><strong>Notice Posting Date:</strong>  <?php echo htmlentities($result->postingDate);?></p>
                            <hr color="#000" />
                    
                            <p><?php echo htmlentities($result->noticeDetails);?></p>
                            <?php }} ?>

                    </div>
                </div>
            </div>
        </section>


        <!-- Footer-->
        <footer id="footer" class="footer">

<div class="footer-content">
  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-5 col-md-12 footer-info">
        <a href="index.html" class="logo d-flex align-items-center">
          <span>SRPS</span>
        </a>
        <p>SRPS is a computerised system that generates results for students after doing their exams by loging in using their roll id to search results after they've been declared.</p>
        <div class="social-links d-flex  mt-3">
          <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>

      <div class="col-lg-2 col-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><i class="bi bi-dash"></i> <a href="index.php">Home</a></li>
          <li><i class="bi bi-dash"></i> <a href="admin-login.php">About us</a></li>
          <li><i class="bi bi-dash"></i> <a href="find-result.php">Students</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="footer-legal">
  <div class="container">
    <div class="copyright">
      &copy; <?php echo(date('Y'));?> Copyright  <strong><span>SRPS</span></strong>. All Rights Reserved
    </div>
    
  </div>
</div>
</footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
