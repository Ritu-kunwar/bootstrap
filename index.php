<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <nav class="navbar navbar-expand-sm bg-primary navbar-dark fixed-top nab ">
    <div class="container">
      <!-- Brand/logo -->
      <!-- <a class="navbar-brand" href="#">
        <img src="bird.jpg" alt="logo" style="width:40px;">
      </a> -->
      
      <!-- Links -->
      <ul class="navbar-nav ">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact Us</a>
        </li>
      </ul>
    </div>
    </nav>

    <!-- banner -->

    <section class="banner">
      
            <div class="jumbotron jumbotron-fluid jumbo">
              <div class="container py-5 text-center">
                <h1>Welcome to Our Culture - Ritu</h1>      
                <h1>Welcome to Our Culture - Sudesh</h1>                      
            </div>
            
    </section>

    <!-- aboutus -->
    <section class="about-us">
       <div class="container">
              <div class="row py-5 ">
              <div class="col text-center ">

              <h3>About Us Ritu</h3>
              </div>
              </div>
         <div class="row">
              
           <div class="col-lg-6 col-md-6 ">
           <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical
            Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney
             College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage,
            and going through the cites of the word in classical literature, discovered the undoubtable source</p>
           
           
           
           </div>
           <div class="col-lg-6 col-md-6  pb-5">
            <img src="img/nepal.jpg" alt="nepal"  class="img-fluid img-thumbnail">
           
           </div>
         </div>
       </div>
    
    
    </section>

    <!-- cards -->
    <section class="cards my-5">
      <div class="container ">
        <div class="row">
          <div class="col-lg-4 ">
          <div class="card" style="width:360px">
              <img class="card-img-top" src="img/nepal.jpg" alt="Card image">
              <div class="card-body">
                <h4 class="card-title ">Temple <span class="badge badge-danger">SALE</span></h4>
                <p class="card-text">It is the most famous place of our country.</p>
                <a href="#" class="btn btn-primary">See Profile</a>
              </div>
            </div>
          
          
          </div>
          <div class="col-lg-4">
          
          <div class="card" style="width:360px">
              <img class="card-img-top" src="img/allah.jpg" alt="Card image">
              <div class="card-body">
                <h4 class="card-title">Temple</h4>
                <p class="card-text">It is the most famous place of our country.</p>
                <a href="#" class="btn btn-primary">See Profile</a>
              </div>
            </div>
          
          </div>
          <div class="col-lg-4">
          
          <div class="card" style="width:360px">
              <img class="card-img-top" src="img/bible.jpg" alt="Card image">
              <div class="card-body">
                <h4 class="card-title">Temple</h4>
                <p class="card-text">It is the most famous place of our country.</p>
                <a href="#" class="btn btn-primary">See Profile</a>
              </div>
            </div>
          
          </div>
      
        </div>
      </div>
    </section>
    <!-- table -->
    <section class="about-us">

    <div class="container">
  <h2 class="text-center py-5">Devoter's name</h2>
           <div class="row text-center py-5"> 
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>
           </div>
</div>
<div class="progress">
  <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:70%"></div>
</div>

</section>


<section class="details" id="contact">
  <div class="container">
  <h2 class="text-center py-5">Stacked form</h2>
    <div class="row py-5">
    <div class="col-6">


    <img src="img/lama.jpg"  title="lamapicture"  class="img-fluid img-thumbnail">
    
    
    
    </div>
    
    

  <div class="col-6">
  <form action="/action_page.php">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary">
    <span class="spinner-border spinner-border-sm"></span>
    
    
    Submit</button>
  </form>
</div>

    
    
    </div>
  </div>
</section>

<section class="footer-top bg-primary py-5">
  <div class="container">
    <div class="row">
      <div class="col-4">

      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3513.971061162178!2d83.9482377145512!3d28.268894307197563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399593efb19d3587%3A0xfa81117e8f4ad440!2sBishnu%20Paduka%20School!5e0!3m2!1sen!2snp!4v1612596479523!5m2!1sen!2snp" width="100%" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

      </div>
      <div class="col-4">
      <h4>Contact Information</h4>
                     <ul>
                         <li><i class="fa fa-home"></i> culture ,Pokhara,Nepal</li>
                         <li><i class="fa fa-phone"></i> +97706111111</li>
                         <li><i class="fa fa-envelope"> culture@gmail.com</i></li>
                     </ul>

      </div>
      <div class="col-4">

      <h4>Travel Agency</h4>
                 <p>
                 Latin words, combined with 
                 a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.

             </p>

      </div>
     
    </div>
  </div>


></section>


        
   






    


<!-- scripts -->

<script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>