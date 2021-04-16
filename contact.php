<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body  style="background-color:black">

   

    <?php include 'menu.php'; ?>

<div class="jumbotron">
<h1> OUR VISION </h1>
<p>Our vision is "To be a globally respected corporation that provides the best and economical wire mesh products
which will be delivered by best in-class people"</p>
</div>

<div class="container">
<div class="row">
<div class="col-md-6">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14889.959462563744!2d80.8902338!3d21.0930276!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x91b8c93fdf0b487f!2sSteel%20Factory%20Tumdibod!5e0!3m2!1sen!2sin!4v1613107570832!5m2!1sen!2sin" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
<div class="col-md-6">
<h3 style="color:white;"> CONTACT INFORMATION </h3>
</br></br>
<P style="color:white;">
CONTACT NUMBER: 9876543210</br>
</br>
EMAIL ADDRESS: yadav.rajmani@gmail.com </br>
</br>
ADDRESS: DONGARGARH MAIN ROAD, TUMDIBOD.</br>
</br>
</P>
</div>
</div>
</div>


<section class="my-3">
    <div class="py-5">
        <h3 class="text-center" style="color:white;">CONTACT US</h3>
    </div>

    <div class="w-50 m-auto">
    <form action="userinfo.php" method="post">
    <div class="form-group">
    <label style="color:white;">USERNAME:</label>
    <input type="text" name="user" autocomplete="off" class="form-control">
    </div>

    <div class="form-group">
    <label style="color:white;">EMAIL ID:</label>
    <input type="text" name="email" autocomplete="off" class="form-control">
    </div>

    <div class="form-group">
    <label style="color:white;">CONTACT NUMBER: </label>
    <input type="text" name="mobile" autocomplete="off" class="form-control">
    </div> 

    <div class="form-group">
    <label style="color:white;">COMMENT: </label>
    <textarea class="form-control" name="comments">
    </textarea>
    </div>
 <button type="submit" class="btn btn-secondary"> SUBMIT
    </button>
   </form>
    </div>
</section>
<footer>
<p class="p-3 bg-dark text-white text-center">  @idont know</p>
</footer>
</body>
</html>