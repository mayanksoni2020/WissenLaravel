<?php 
session_start();
//@include('registrationuser')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Event Registration</title>

    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="https://img.icons8.com/nolan/64/000000/graduation-cap.png">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Khula:700&display=swap" rel="stylesheet">

</head>
<body>
    <!-- Header Starts-->
    @include('header')
    <!-- Header Ends -->

    <!-- Registration Form Starts -->
        <div class="container" id="formContainer">
            <div class="row" style="background-color: #0070A0;">
                <div class="col-md-3 col-sm-3" style="background-color: #0070A0; padding: 146.5px 20px; opacity: 1">
                    <div class="formOneContainer">
                        <h2>Hello Friend!</h2>
                        <h3 style="margin-bottom: 0px;">Let's Get</h3>
                        <h1 style="margin: 0px;">Started</h1>
                        <br>
                        <p>Enter Your Personal Details And Start Your Journey With Us</p>
                    </div>
                </div>
                <div class="col-md-9 col-sm-9" style="background-color: #48BCD6; padding: 20px; color: black;">
                    <div class="formTwoContainer">
                        <h3 style="text-align: center;">REGISTER WITH YOUR WORKING EMAIL ADDRESS</h3><br>

                        <form method="POST" action="{{ url('/eventregistration') }}" style="padding: 0px 35px;">@csrf

                            <div class="form-group col-md-6">
                              <label for="inputfname">First Name<span style="color: red;"> *</span></label>
                              <input type="text" class="form-control" name="inputfname" placeholder="First Name">
                              @error('inputfname')
                              <div style="color: red">*{{$message}}</div>
                              @enderror
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputlname">Last Name<span style="color: red;"> *</span></label>
                              <input type="text" class="form-control" name="inputlname" placeholder="Last Name">
                              @error('inputlname')
                              <div style="color: red">*{{$message}}</div>
                              @enderror
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputemail">Email<span style="color: red;"> *</span></label>
                              <input type="email" class="form-control" name="inputemail" placeholder="Email">
                              @error('inputemail')
                              <div style="color: red">*{{$message}}</div>
                              @enderror
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputreg">Registration Number<span style="color: red;"> *</span></label>
                              <input type="number" class="form-control" name="inputreg" placeholder="Registration Number">
                              @error('inputreg')
                              <div style="color: red">*{{$message}}</div>
                              @enderror
                            </div>
                            <div class="form-group col-md-12">
                              <label for="inputphone">Phone Number<span style="color: red;"> *</span></label>
                              <input type="number" class="form-control" name="inputphone" placeholder="Phone Number">
                              <p style="margin: 0px;">Please provide a valid phone number, we will contact you through this number.</p>
                              @error('inputphone')
                              <div style="color: red">*{{$message}}</div>
                              @enderror
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputteam">Team Name<span style="color: red;"> *</span></label>
                              <input type="text" class="form-control" name="inputteam" placeholder="Team Name"><br>
                              @error('inputteam')
                              <div style="color: red">*{{$message}}</div>
                              @enderror
                            </div>
                            <div class="form-group col-md-6" style="display: inline-block;">
                              <label style="display: block;" for="inputgender">Gender<span style="color: red;"> *</span></label>
                                <label class="radio-inline">
                                  <input type="radio" name="inputgender" value="Male" checked>Male
                                </label>
                                <label class="radio-inline">
                                  <input type="radio" name="inputgender" value="Female">Female
                                </label>
                                <label class="radio-inline">
                                  <input type="radio" name="inputgender" value="Others">Others
                                </label>
                              @error('inputgender')
                              <div style="color: red">*{{$message}}</div>
                              @enderror
                            </div>
                            <div class="form-group col-md-12" style="text-align: center;">
                              <button type="submit" class="btn btn-danger" name="proceed_pay">Submit</button>
                              <!-- <a class="btn btn-danger" href="http://localhost/Wissen/payment.php" name="proceed_pay">Proceed to Pay</a> -->

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <!-- Registration Form Ends -->

    <script>
      var msg = '{{Session::get('alert')}}';
      var exist = '{{Session::has('alert')}}';
      if(exist){
        alert(msg);
      }
    </script>
</body>
</html>