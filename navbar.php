<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><b>Food Club</b></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php"><b>Menu</b></a></li>
        <li><a href="order.php"><b>Order</b></a></li>
        <li><a href="contactus.php"><b>Contact Us</b></a></li>
        
      </ul>

      <ul class="nav navbar-nav navbar-right "> 

      <li><form class="form-inline mr-auto" method="post" action="">
  <input name="search"class="form-control mr-sm-2" type="text" required placeholder="Search Foods" aria-label="Search">

  <button name="button" class="btn btn-success blue-gradient btn-rounded btn-sm my-0" type="submit">Search </button>
  <br>
</form>
<br>

<?php

$con=mysqli_connect('localhost', 'root', '','foodsys');



if(isset($_POST['button'])){    //trigger button click

  $search=$_POST['search'];
  echo "<h4><br>Searching Result</b></h4>";

  $query=mysqli_query($con,"select * from product where productname like '%{$search}%' ");

if (mysqli_num_rows($query) > 0) {
  while ($row = mysqli_fetch_array($query)) 
  {
      
    echo "<table id='mytable' class='table table-bordred table-striped'>
    <tr>
    <td><b>Product Name</td>
    <td><b>Price </td>
   
    </tr>
    <br>"."<tr>
    <td>".$row['productname']."</td>
    <td>".$row['price']."</td>
    
    </tr>
    </table>";
  }
}else{
    echo "</br><br>No Products Found<br><br>";
  }


}/*else{                          //while not in use of search  returns all the values
  $query="select * from products";
  $datas=mysqli_query($con,$query);

  while ($row = mysqli_fetch_array($datas)) {
    echo "<tr><td>".$row['product_name']."</td><td></td><td>".$row['brand_name']."</td></tr>";
  }
}
*/

mysqli_close($con);
?>
</li>

      <li><a href="login.php"><b>Logout</b></a></li>
      
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>