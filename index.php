
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Spark Banks</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>
body{
    background-color: rgba(163, 199, 250, 0.41);


}
  h2{
      text-align: center;
  }

   .carousel-control.right, .carousel-control.left {
  background-image: none;
  color: #f4511e;
}

.carousel-indicators li {
  border-color: #f4511e;
}

.carousel-indicators li.active {
  background-color: #f4511e;
}

.item h4 {
  font-size: 19px;
  line-height: 1.375em;
  font-weight: 400;
  font-style: italic;
  margin: 70px 0;
}

.item span {
  font-style: normal;
}

.thumbnail {
  padding: 0 0 15px 0;
  border: none;
  border-radius: 0;
}

.thumbnail img {
  width: 100%;
  height: 100%;
  margin-bottom: 10px;
  background-color: aqua;
}
#amay{

    background-color:rgba(20, 101, 250, 0.2);
}
#cont{
    background-color: rgba(150, 3, 121, 0.17);

}
#branch{

    background-color:rgba(20, 101, 250, 0.2);
}
</style>



</head>
<body>
  
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">Welcome!</a>
          </div>
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.html">Home</a></li>
            <li><a href="createuser.php">Create User</a></li>
            <li><a href="transfermoney.php"> Make Transaction</a></li>
            <li><a href="transactionhistory.php">Transaction History</a></li>
          </ul>
        </div>
      </nav>
      <BR>


<div class="jumbotron text-center" id="amay">
    <br>
  <h1>The Sparks Bank</h1>
  <p></p> 
</div>
  
<div class="container" id="cont">
  <div class="row">
    <div class="col-sm-4">
      <h3>Create User</h3>
      <img src="img/c1.jfif">


      <p>Here. You can create a user</p>
      <a href="createuser.php">  <button type="button" class="btn btn-success">Create user</button></a>
     

    </div>
    <div class="col-sm-4">
      <h3>Make Transaction </h3><br>
      <img src="img/c2.jpg">
      <br>
      <p>Click,here to make one click Transaction</p>
      
      <a href="transfermoney.php">  <button type="button" class="btn btn-success">Make Transaction </button></a>
   
    </div>

    <div class="col-sm-4">
      <h3>Transaction History </h3>
    <br>
       <img src ="img/c3.jfif">       
      <p>Check your transaction history</p>
      <a href="transactionhistory.php">  <button type="button" class="btn btn-success">Check Transaction History </button></a>
      
    </div>
  </div>
</div>

<br>
<h2 >What our customers say</h2>
<div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
    <h4>"This Bank is the best. I am so happy with the result!"<br><span style="font-style:normal;">Aman Tripathi, Vice President, Tcs</span></h4>
    </div>
    <div class="item">
      <h4>"One word... WOW!!"<br><span style="font-style:normal;">Jignesh Mathure, COO, Infosys</span></h4>
    </div>
    <div class="item">
      <h4>"Could I... BE any more happy with this Bank?"<br><span style="font-style:normal;">Soham Kadam, HR, JIO.</span></h4>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="container-fluid text-center bg-grey">
  <h2>Branches</h2>
  <h4>Our  Head Branches Are in </h4>
  <div class="row text-center"id ="branch">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="img/p1.jfif" alt="singapore">
        <p><strong>Singapore</strong></p>
        <p>Our Main head Branch</p>
        
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="img/p2.jfif" alt="Mumbai " >
        <p><strong>Mumbai </strong></p>
        <p>We are in Mumbai</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="img/p3.jfif" alt="New York">
        <p><strong>New York</strong></p>
        <p>Yes, New York is ours</p>
      </div>
    </div>
</div>

</body>
</html>