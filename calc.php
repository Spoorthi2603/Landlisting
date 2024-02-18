

<?php 
    // Start session and include configuration file
    ini_set('session.cache_limiter','public');
    session_cache_limiter(false);
    session_start();
    include("config.php");

    // Calculate EMI
    if(isset($_REQUEST['calc'])) {
        $amount = $_REQUEST['amount'];
        $mon = $_REQUEST['month'];
        $int = $_REQUEST['interest'];
        
        // Calculate interest
        $interest = $amount * $int / 100;
        $pay = $amount + $interest;
        $month = $pay / $mon;
    }   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>EMI Calculator</title>

    <!-- Stylesheets -->
   
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="css/layerslider.css">
<link rel="stylesheet" type="text/css" href="css/color.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/login.css">

</head>
<body>

<div id="page-wrapper">
    <div class="row"> 
        <!-- Header -->
		<?php include("include/header.php");?>
        <!-- Header End -->
        
        <!-- EMI Calculator Section -->
        <div class="full-row bg-gray">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-12">
                        <h2 class="text-secondary double-down-line text-center">EMI Calculator</h2>
                    </div>
                </div>
                <center>
                    <!-- Display Calculation Results -->
                    <table class="items-list col-lg-6 table-hover" style="border-collapse:inherit;">
                        <thead>
                            <tr class="bg-secondary">
                                <th class="text-white font-weight-bolder">Term</th>
                                <th class="text-white font-weight-bolder">Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Display calculated values -->
                            <tr class="text-center font-18">
                                <td><b>Amount</b></td>
                                <td><b><?php echo '$'.$amount ; ?></b></td>
                            </tr>
                            <tr class="text-center">
                                <td><b>Total Duration</b></td>
                                <td><b><?php echo $mon.' Months' ; ?></b></td>
                            </tr>
                            <tr class="text-center">
                                <td><b>Interest Rate</b></td>
                                <td><b><?php echo $int.'%' ; ?></b></td>
                            </tr>
                            <tr class="text-center">
                                <td><b>Total Interest</b></td>
                                <td><b><?php echo '$'.$interest ; ?></b></td>
                            </tr>
                            <tr class="text-center">
                                <td><b>Total Amount</b></td>
                                <td><b><?php echo '$'.$pay ; ?></b></td>
                            </tr>
                            <tr class="text-center">
                                <td><b>Pay Per Month (EMI)</b></td>
                                <td><b><?php echo '$'.$month ; ?></b></td>
                            </tr>
                        </tbody>
                    </table> 
                </center>
            </div>
        </div>
        <!-- EMI Calculator Section End -->
        
        <!-- Footer -->
		<?php include("include/footer.php");?>
		<!-- Footer End -->
        
        <!-- Scroll to top --> 
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
        <!-- End Scroll To top --> 
    </div>
</div>

<script src="js/jquery.min.js"></script> 
<!--jQuery Layer Slider --> 
<script src="js/greensock.js"></script> 
<script src="js/layerslider.transitions.js"></script> 
<script src="js/layerslider.kreaturamedia.jquery.js"></script> 
<!--jQuery Layer Slider --> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="js/tmpl.js"></script> 
<script src="js/jquery.dependClass-0.1.js"></script> 
<script src="js/draggable-0.1.js"></script> 
<script src="js/jquery.slider.js"></script> 
<script src="js/wow.js"></script> 
<script src="js/custom.js"></script>
</body>
</html>


</body>
</html>