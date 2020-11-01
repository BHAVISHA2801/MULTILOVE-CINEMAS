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


<section class="my-5">
  <div class="py-5">
    <a href="Bookings.php"></a>
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
            </div>
          </div>
          
        </div>
        
        <input type="submit" value="submit" class="btn">
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

</section>
</body>
</html>






