<?php require_once('db-connect.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Book Here| Riot Music Room Studio </title>

  <!-- Favicons -->
  <link href="img/main_img/logo.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Modal CSS -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>


  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Scheduling</title>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./fullcalendar/lib/main.min.css">

  <script src="./js/jquery-3.6.0.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>
  <script src="./fullcalendar/lib/main.min.js"></script>

      <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Kelly - v4.9.1
  * Template URL: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <style>  
        table, tbody, td, tfoot, th, thead, tr {
            border-color: #ededed !important;
            border-style: solid;
            border-width: 1px !important;
        }

  </style>

</head>
      
<body>

  <header id="header" class="fixed-top" style="background-image: url('img/about_img/about_bg_3rd.gif'); 
    background-repeat: no-repeat;background-size: cover;">
    <div class="container-fluid d-flex justify-content-between align-items-center">

        <!-- ======= logo ======= -->
        <a href="index.html"><img src="img/main_img/logo.png" class="img-fluid" width="100" height="70"></a>

          <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
              <li><a href="index.php">HOME</a></li>
              <li><a href="about.php">ABOUT US</a></li>
              <li><a class="active" href="book.php">BOOK NOW</a></li>
              <li><a href="explore.php">EXPLORE</a></li>
              <li><a href="contact.php">CONTACT US</a></li>
            </ul>
              <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->

      <div class="header-social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://www.facebook.com/MNVBandRehearsal" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
      </div> 
    </div>

  </header>

<!-- header section ends -->

<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
   
</div>

<!-- booking section starts  -->
      <br><br><br>
     <div class="container py-5" id="page-container">
        <div class="row">
            <div class="col-md-9">
                <div id="calendar"></div>
            </div>
            <div class="col-md-3">
                <div class="cardt rounded-0 shadow">
                    <div class="card-header bg-gradient bg-primary text-light">
                        <h5 class="card-title">Schedule Form</h5>
                    </div>
                    <div class="card-body">
                        <div class="container-fluid">
                            <form action="save_schedule.php" method="post" id="schedule-form">
                                <input type="hidden" name="id" value="">
                                <div class="form-group mb-2">
                                    <label for="title" class="control-label">Bandname</label>
                                    <input type="text" class="form-control form-control-sm rounded-0" name="title" id="title" placeholder="Enter your bandname" required>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="description" class="control-label">Information<br> 
                                        <p style="font-size:13px;">Format: Fullname/ Contact Number/ E-mail Address</p>
                                    </label>
                                    <textarea rows="3" class="form-control form-control-sm rounded-0" name="description" id="description" placeholder="Enter your Information with the format above." required></textarea>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="start_datetime" class="control-label">Start</label>
                                    <input type="datetime-local" class="form-control form-control-sm rounded-0" name="start_datetime" id="start_datetime" required>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="end_datetime" class="control-label">End</label>
                                    <input type="time" class="form-control form-control-sm rounded-0" name="end_time" id="end_time" required>
                                </div>
                        </div>
                         <div class="card-footer">
                        <div class="text-center">
                            <div class="container">
  
                    <!-- Button to Open the Modal -->
                    <button type="button" class="btn btn-primary btn-sm rounded-0" data-toggle="modal" data-target="#myModal" style="font-size:12px;">Confirm</button>

                    <!-- The Modal -->
                    <div class="modal" id="myModal">
                        <div class="modal-dialog">
                         <div class="modal-content">
      
                     <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">PAYMENT DETAILS</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                     <!-- Modal Body -->
                    <div class="cardt rounded-0 shadow">
                    <div class="card-header bg-gradient bg-primary text-light" >
                        <h5 class="card-title" >Payment Form</h5>
                    </div>
                    <div class="card-body">
                        <div class="container-fluid">
                            <form  method="post" >
                                <input type="hidden" name="id" value="">
                                <div>
                                    <p style="color:red;"><i>Note: please settle 100 pesos downpayment to secure the slot of your reservation.</i> <a href="Payment.php" style="font-size:12px;">Learn more about payments.</p></a>


                                    <label for="payment_reference_number"><b style="font-size:15px;">PAYMENT REFERENCE NUMBER</b></label>
                                    <input type="number" class="form-control form-control-sm rounded-0" placeholder="Enter your payment reference number" name="payment_reference_number" id="payment_reference_number" required>
                                   
                                    <br>
                                     <button class="btn btn-primary btn-sm rounded-0" type="submit" form="schedule-form"><i class="fa fa-save"></i> Reserve</button>
                                </div>
                                    <br>
                                 <div class="card-header bg-gradient bg-primary text-light" style="border-radius: 10px; color:#fff;">
                                    <b>GCASH DETAILS</b> <br>
                                    <p style="font-size: 20px; color:#fff; font-family: sans-serif;">Gcash Number: <i style="font-size:20px;">09277971990</i></p> 
                                    <p style="font-size: 20px; color:#fff; font-family: sans-serif;">Gcash Name: <i style="font-size:20px;">DA***O V.</i></p> 
                                    <p style="font-size: 15px; color:#fff; font-family: sans-serif; margin-top:20px;"><b>You can also SCAN the Gcash QR Code below.</p></b>

                                    <center><img src="img/gcash/gcash.png" width="380" height="450" class="qrcode"></center></td>
                                    <br>
                                    <a href="Payment.php"><p style="text-decoration: none; color: #fff;">Learn more about payment.</p></a>
                                    
                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">  

                                </div>
                            </form>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                                   
                </div>
            </div>
        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Event Details Modal -->
    <div class="modal fade" tabindex="-1" data-bs-backdrop="static" id="event-details-modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0">
                <div class="modal-header rounded-0">
                    <h5 class="modal-title">Schedule Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body rounded-0">
                    <div class="container-fluid">
                        <dl>
                            <dt class="text-muted">Title</dt>
                            <dd id="title" class="fw-bold fs-4"></dd>
                            <dt class="text-muted">Description</dt>
                            <dd id="description" class=""></dd>
                            <dt class="text-muted">Start</dt>
                            <dd id="start" class=""></dd>
                            <dt class="text-muted">End</dt>
                            <dd id="end" class=""></dd>
                            <dt class="text-muted">Status</dt>
                            <dd id="status" class=""></dd>
                        </dl>
                    </div>
                </div>
                <div class="modal-footer rounded-0">
                    <div class="text-end">
                        <button type="button" class="btn btn-danger btn-sm rounded-0" id="delete" data-id="">Delete</button>
                        <button type="button" class="btn btn-secondary btn-sm rounded-0" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Event Details Modal -->

<?php 
$schedules = $conn->query("SELECT * FROM `schedule_list`");
$sched_res = [];
foreach($schedules->fetch_all(MYSQLI_ASSOC) as $row){
    $row['sdate'] = date("F d, Y h:i A",strtotime($row['start_datetime']));
    $row['edate'] = date(" h:i A",strtotime($row['end_time']));

    $sched_res[$row['id']] = $row;
}
?>
<?php 
if(isset($conn)) $conn->close();
?>
</body>

<!--- JS to Calendar --->
<script>
    var scheds = $.parseJSON('<?= json_encode($sched_res) ?>')
</script>
<script src="./js/script.js"></script>

<!-- Disable past dates-->


</html>