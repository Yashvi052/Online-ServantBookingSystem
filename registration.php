<?php
include"dbconfig.php";
$result=select("select city from country_state_city");
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
    
    
    
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
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
  
  
    <div style="height: 113px;"></div>

    <div class="unit-5 overlay" style="background-image: url('images/p2.jpg');">
      <div class="container text-center">
        <h2 class="mb-0">Registration</h2>
        <p class="mb-0 unit-6"><a href="index.php">Home</a> <span class="sep"></span> <span>Registration</span></p>
      </div>
    </div>

    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-8 mb-5">
          
            
            <form  enctype="multipart/form-data" method="post" class="p-5 bg-white">

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Name</label>
                  <input type="text" id="email" name="first" class="form-control" placeholder="Name">
                </div>
              </div>
			  <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Mobile</label>
                  <input type="text" id="email" name="mobile" class="form-control" placeholder="Mobile Number">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Email</label>
                  <input type="email" id="email" name="email" class="form-control" placeholder="Email Address">
                </div>
              </div>
			  
			  <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Password</label>
                  <input type="password" id="fullname" name="password" class="form-control" placeholder="Password">
                </div>
              </div>
			  <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">City</label>
<select class="form-control" name="city">

<option>Select City</option>
<?php
while($r=mysqli_fetch_array($result))
{
	
?>
<option value="<?=$r[0]?>"><?=$r[0]?></option>
<?php

}
?>
</select>                
				</div>
              </div>
			  <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Address</label>
                  <input type="text" name="address" id="email" class="form-control" placeholder="Address">
                </div>
              </div>
			  <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold"   for="email">Experience</label>
<select class="form-control" name="experience"> 
<option>Experience In Year                
</option>
<option value="1">1                
</option>                
<option value="2">2                
</option>                
<option value="3">3                
</option>                
<option value="4">4                
</option>                
<option value="5">5                
</option>                
<option value="6">6                
</option>                
<option value="7">7                
</option>                
<option value="8">8                
</option>                
<option value="9">9                
</option>                
<option value="10">10                
</option>                
<option value="11">11               
</option>                
<option value="12">12              
</option>                
</select>                 
</div></div>
<div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">ID Proof</label>
<select class="form-control" name="id_proof"> 
<option>Any ID Proof               
</option>
<option value="Adhaar">Adhaar(UID)</option>                
<option value="driving">Driving License</option>                
<option value="Election">Election Commission ID Card</option>                
<option value="Pan">PAN Card                
</option>                
               
</select>                 
</div></div>
<div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Photo of selected Id Proof</label>
                  <input type="file" name="id_picture" class="form-control" >
                </div>
              </div>
			  <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Work Type</label>
<select class="form-control" name="work"> 
<option>Select Any               
</option>
<option value="Cooking">Cooking</option>                
<option value="Elderly_Care">Elderly Care</option>                
<option value="Cleaning">Cleaning</option>                
<option value="Gardner">Gardner</option>                
<option value="Baby_Sitting">Baby Sitter</option>                
<option value="Driver">Driver</option>                
               
</select>                 
</div></div>
<div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Upload Your Picture</label>
                  <input type="file"  name="picture" class="form-control" >
                </div>
              </div>


              

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" name="registration" value="Ragister" class="btn btn-primary pill px-4 py-2">
                </div>
              </div>

  
            </form>
			 
               
          </div>
<?php

if(isset($_REQUEST['registration']))
{
	extract($_REQUEST);
	$error=$_FILES["id_picture"]["error"];
$name=$_FILES["id_picture"]["name"];
$type=$_FILES["id_picture"]["type"];
$size=$_FILES["id_picture"]["size"];
$tmp_name=$_FILES["id_picture"]["tmp_name"];
$rerror=$_FILES["picture"]["error"];
$rname=$_FILES["picture"]["name"];
$rtype=$_FILES["picture"]["type"];
$rsize=$_FILES["picture"]["size"];
$rtmp_name=$_FILES["picture"]["tmp_name"];

	 echo $query="INSERT INTO `registration`
	(`name`, `mobile`, `email`, `password`, `city`, `address`, `experience`, `id_proof`, `id_picture`, `work_type`, `picture`) 
	VALUES ('$first','$mobile','$email','$password','$city','$address','$experience','$id_proof','$name','$work','$rname')";

	if(move_uploaded_file($tmp_name,"images/$name"))
	{
		if(move_uploaded_file($rtmp_name,"images/$rname"))
		{
	$n=iud($query);
	 if($n==1)
	 {
		 echo"<script>alert('Registration successfully');
		 window.location='login.php';
		 </script>";
	 }
	
	}
	}
	else
	{
		echo"Something Wrong";
	}
	
	
	
	
}
?>
          <div class="col-lg-4">
            <div class="p-4 mb-3 bg-white" style="width:425px">
              <img src="images/per.jpeg" style="width:400px; ">

            </div>
            
            <div class="p-4 mb-3 bg-white" style="width:425px;height:520px">
              <img src="images/per2.jpeg" style="width:400px; ">

			  </div>
          </div>
        </div>
      </div>
    </div>

    


    


    
   <?php include"footer.php";?>
  
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  
  <script src="js/mediaelement-and-player.min.js"></script>

  <script src="js/main.js"></script>
    

  <script>
      document.addEventListener('DOMContentLoaded', function() {
                var mediaElements = document.querySelectorAll('video, audio'), total = mediaElements.length;

                for (var i = 0; i < total; i++) {
                    new MediaElementPlayer(mediaElements[i], {
                        pluginPath: 'https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/',
                        shimScriptAccess: 'always',
                        success: function () {
                            var target = document.body.querySelectorAll('.player'), targetTotal = target.length;
                            for (var j = 0; j < targetTotal; j++) {
                                target[j].style.visibility = 'visible';
                            }
                  }
                });
                }
            });
    </script>


    <script>
      // This example displays an address form, using the autocomplete feature
      // of the Google Places API to help users fill in the information.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };

      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
      }

      function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
          document.getElementById(component).value = '';
          document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
          }
        }
      }

      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&libraries=places&callback=initAutocomplete"
        async defer></script>

  </body>
</html>