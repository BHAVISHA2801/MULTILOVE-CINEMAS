<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">MULTILOVE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About us</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Bookings</a>
           </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
  
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://upload.wikimedia.org/wikipedia/en/3/3d/Sadak_2_film_poster.jpeg" alt="SADAK 2" width="1100" height="500">
      <div class="carousel-caption">
        <h3>SADAK 2</h3>
         </div>   
    </div>

    <div class="carousel-item">
      <img src="https://mir-s3-cdn-cf.behance.net/project_modules/fs/25e98289942817.5e0705a50d2d2.png" alt="Dil Bechara" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Dil Bechara</h3>
     </div>   
    </div>

    <div class="carousel-item">
      <img src="https://www.filmibeat.com/ph-big/2019/09/shakuntala-devi_156861402000.jpg" alt="Shakuntala-devi" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Shakuntala-devi</h3>
      </div>   
    </div>

  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">About us</h2>
  </div>
<div class="container-fluid">
  <div class="row">
       <h2 class="display-4">MULTILOVE CINEMAS</h2>
       <div class="col-lg-6 col-md-6 col-12">
         <img src="https://cdn.proschoolonline.com/wp-content/uploads/2017/12/d1.png" class="img-fluid Aboutusimg">
       </div>
       <div class="col-lg-6 col-md-6 col-12">
         <p class="py-3">WELCOME , to our multilove cinema. This cinema is created just for the movies lovers, who love to watch movies. we hope you'll love the experience of MULTILOVE , and you'll definately want to come again and again. </p>

        <div class="col-lg-6 col-md-6 col-12">
         <img src="https://trak.in/wp-content/uploads/2020/10/Untitled-design-2-3-1.jpg" class="img-fluid Aboutusimg">
       </div>
       <div class="col-lg-6 col-md-6 col-12">
         <p class="py-3"> We are providing food bookings also. you can simply book food online by the bookings section. you can see options of food and can order whcih ever you want. we are garrenty you that you'll love our facility and we'll make sure you to provide you healthy food.</p>

        <div class="col-lg-6 col-md-6 col-12">
         <img src="https://i.cdn.newsbytesapp.com/images/158_4051598859216.jpg" class="img-fluid Aboutusimg">
       </div>
       <div class="col-lg-6 col-md-6 col-12">
         <p class="py-3">we make sure that you'll feel safe coming in our multiplex. we are senitizing all the seats before every show starts. Trust me you'll feel awesome coming in our MULTILOVE.</p>

        <div class="col-lg-6 col-md-6 col-12">
         <p class="py-3">THANK YOU...</p>

         <a href="about us.php" class="btn btn success"> check more...</a>
       </div>
  </div>
</div>
</section>


<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Bookings</h2>
  </div>

  <div class="container-fluid">
    <div class="row">
      

<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="/action_page.php">
      
        <div class="row">
          <div class="col-50">
           
           <form action="userinfo.php" method="POST">

            <div class="form-group">
            <label>Username</label>
            <input type="text" id="email" name="user" autocomplete="off" class="form-control" placeholder="abc">
            </div>

            <div>
            <label >Email</label>
            <input type="text" id="email" name="email" autocomplete="off" class="form-control" placeholder="abc@example.com">
          </div>

            <div>
            <label>Address</label>
            <input type="text" id="adr" name="address" autocomplete="off" class="form-control">
            </div>

            <div>
            <label>City</label>
            <input type="text" id="city" name="city" autocomplete="off" class="form-control" placeholder="MODASA">
            </div>

            <div>
            <label>Comments</label>
            <textarea class="form-control"></textarea>
            </div>

          
            </form>

              <div class="col-50">
                
              <label for="select">Choose a movie:</label>
              <select name="movies" id="select">
    <option value="SADAK 2">SADAK 2</option>
    <option value="DIL BECHARA">DIL BECHARA</option>
    <option value="SHAKUNTLA-DEVI">SHAKUNTLA-DEVI</option>
    <option value="PANGA">PANGA</option>
    <option value="MALANG">MALANG</option>
    <option value="LOVE AAJKAL 2">LOVE AAJKAL 2</option>
             </select>
             </div>

            <div class="col-50">
                
              <label for="select">Choose a movie time:</label>
              <select name="time" id="select">
    <option value="9am to 11:45am">9am to 12pm</option>
    <option value="12pm to 2:45pm">12pm to 2:45pm</option>
    <option value="3pm to 5:45pm">3pm to 5:45pm</option>
    <option value="6pm to 8:45pm ">6pm to 8:45pm</option>
    <option value="9pm to 11:45pm">9pm to 11:45pm</option>
             </select>
             </div>


            <div class="col-50">
              
              <label for="select">Choose food if you want:</label>
              <input type="select" name="Food">
              <select name="Food" id="select">
                <option value="Popcorn">Popcorn</option>
                <option value="cheese-popcorn">cheese-popcorn</option>
                <option value="cold-drink(fizz)">cold-drink(fizz)</option>
                <option value="cold-drink(maza)">cold-drink(maza)</option>
                <option value="cold-drink(coco-cola)">cold-drink(coco-cola)</option>
                <option value="cold-cofee">cold-cofee</option>
              </select>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" class="form-control" placeholder="Nayi Bhavisha">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" class="form-control" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" class="form-control" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" class="form-control" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" class="form-control" name="cvv" placeholder="352">
              </div>
              <div class="col-50">
                <label for="Payment">Total payment</label>
                <input type="payment" id="payment" name="payment">
              </div>
              <input type="submit" value="submit" class="btn">
            </div>
          </div>
          
        </div>
      </form>
    </div>
  </div>
  
</div>

<div class="col-25">
    <div class="container">
      <h4>Seat prices<span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b></b></span></h4>
      <p><a href="#">Box-office</a> <span class="price">$250</span></p>
      <p><a href="#">Gold</a> <span class="price">$200</span></p>
      <p><a href="#">Silver</a> <span class="price">$150</span></p>
      <p><a href="#">General</a> <span class="price">$100</span></p>
      <hr>
      
    </div>
  </div>

<div class="col-25">
    <div class="container">
      <h4>Food prices<span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b></b></span></h4>
      <p><a href="#">Popcorn</a> <span class="price">$100</span></p>
      <p><a href="#">cheese popcorn</a> <span class="price">$200</span></p>
      <p><a href="#">cold-drink(fizz)</a> <span class="price">$100</span></p>
      <p><a href="#">cold-drink(maza)</a> <span class="price">$50</span></p>
      <p><a href="#">cold-drink(coca-cola)</a> <span class="price">$50</span></p>
      <p><a href="#">cold-cofee</a> <span class="price">$150</span></p>
      <hr>
      
    </div>
  </div>



    </div>
  </div>

  <footer>
    <p class="p-3 bg-dark text-white text-center">@multilovecinemas</p>
  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
