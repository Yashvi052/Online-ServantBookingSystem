<?php
include"dbconfig.php";
$cat=$_REQUEST['cat'];
$id=$_REQUEST['id'];
$city=$_REQUEST['city'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Servant/Driver Finder</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Work+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/animate.css">
    
    
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="form.css" >
        <script src="form.js"></script>
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>




<div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
      <?php include"nav.php"?>





</br></br></br></br></br></br></br>
<div class="container">
<div class="row">
<div class="col-lg-3">


</div>

<div class="col-lg-6">
<div class="modal-content">
                        <div class="modal-header"><p style="font-weight:bold;font-size:18px;color:#3BB05D" class="modal-title">
                                Booking Form
                            </p>
                             
                        </div>
                        <div class="modal-body">
                            <form action="new.php" method="post" >
                                 <div class="form-group">
                                    <label for="name"> Name:</label>
                                    <input type="hidden" class="form-control" value="<?=$_REQUEST['cat']?>" name="cat" required >
                                    <input type="hidden" class="form-control"  value="<?=$_REQUEST['city']?>" name="city" required >
                                    <input type="hidden" class="form-control"  value="<?=$_REQUEST['id']?>" name="regid" required >
                                    <input type="text" class="form-control"  name="name" required >
                                </div>
                                <div class="form-group">
                                    <label for="mobile">Mobile:</label>
                                    <input type="mobile" class="form-control"  name="mobile" required >
                                </div>
								<div class="form-group">
                                    <label for="mobile">Address</label>
                                    <input type="mobile" class="form-control"  name="address" required >
                                </div>
                                <div class="form-group">
                                    <label for="date">Date</label>
                                    <input type="date" class="form-control"  name="date" required >
                                </div>
								 <div class="form-group">
                                    <label for="days">Days</label>
                                    <select class="form-control" name="days">
									<option>select days</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="4">4</option>
									<option value="7">7</option>
									<option value="15">15</option>
									<option value="30">30</option>
                                    </select>
                                </div>
								<div class="form-group">
                                    <label for="days">Hours</label>
                                    <select class="form-control" name="hours">
									<option >select Hours</option>
									<option value="1to2">1-2</option>
									<option value="2to4">2-4</option>
									<option value="4to6">4-6</option>
									<option value="6to8">6-8</option>
									</select>
                                </div>
<input type="submit" class="btn btn-success form-control" name="booknow" value="Book Now">                                
								</form> 
                            </div>
                    </div>

</div>
</div>
</div></br></br>

                    <!-- Modal content-->
      <?php include"footer.php";?>
  
  </div>               
                