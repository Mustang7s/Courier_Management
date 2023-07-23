<?php
require_once 'dbconnection.inc.php';
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.html");
}else{
  $filter = $_SESSION['username'];
  $query=mysqli_query($conn,"SELECT * FROM `users` WHERE `User_ID`='$filter'")or die(mysqli_error());
  $row=mysqli_fetch_array($query);
}
?>

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Courier Management System - User Homepage</title>

  <!-- slider stylesheet -->
  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>
            <script type="text/javascript">
function printData()
{
   var divToPrint=document.getElementById("printTable");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>
            <script type="text/javascript">
function printData1()
{
   var divToPrint=document.getElementById("printTable1");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>
            <script type="text/javascript">
function printData2()
{
   var divToPrint=document.getElementById("printTable2");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>
<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index2.php">
            <span>
              Courier Management System
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index2.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="#about"> About </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="logout.php"> Logout</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="box">
                <div class="row">
                  <div class="col-md-7">
                    <div class="detail-box">
                      <div>
                        <h1>
                          Courier Management System
                        </h1>
                        <h2>
                         Welcome <?php echo $row['User_Type']; ?>, <?php echo $row['Fullname']; ?>!
                        </h2>
                        <div class="">
                          <a href="#data">
                            Database
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="box">
                <div class="row">
                  <div class="col-md-7">
                    <div class="detail-box">
                      <div>
                        <h1>
                          Courier Management System
                        </h1>
                        <h2>
                          Welcome <?php echo $row['User_Type']; ?>, <?php echo $row['Fullname']; ?>!
                        </h2>
                        <div class="">
                          <a href="#mod">
                            My Module
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="box">
                <div class="row">
                  <div class="col-md-7">
                    <div class="detail-box">
                      <div>
                        <h1>
                          Courier Management System
                        </h1>
                        <h2>
                          Welcome <?php echo $row['User_Type']; ?>, <?php echo $row['Fullname']; ?>!
                        </h2>
                        <div class="">
                          <a href="#data">
                            Database
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="box">
                <div class="row">
                  <div class="col-md-7">
                    <div class="detail-box">
                      <div>
                        <h1>
                          Courier Management System
                        </h1>
                        <h2>
                          Welcome <?php echo $row['User_Type']; ?>, <?php echo $row['Fullname']; ?>!
                        </h2>
                        <div class="">
                          <a href="#mod">
                            My Module
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="box">
                <div class="row">
                  <div class="col-md-7">
                    <div class="detail-box">
                      <div>
                        <h1>
                          Courier Management System
                        </h1>
                        <h2>
                          Your Modern Courier Management Solution.
                        </h2>
                        <div class="">
                          <a href="logout.php">
                            Logout
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- about section -->

  <section class="about_section layout_padding-bottom" id="about">
    <div class="container">
      <div class="heading_container">
        <h2>
          About Us
        </h2>
      </div>
      <div class="box">
        <div class="img-box">
          <img src="images/about.jpg" alt="">
        </div>
        <div class="detail-box">
          <br>
          <br>
          <p>
            Our aim is to provide parcel delivery services that are more efficient and reliable service to the customers in Kenya. The objectives of our system include:
            <br>
            <br>
• To automate the delivery process by developing a web-based system that can track packages from pickup to delivery.
<br>
<br>
• To provide real-time notifications to customers on their package's delivery status.
<br>
<br>
• To improve communication channels between the service providers and customers.
<br>
<br>
• To ensure timely and safe delivery of packages by providing a secure and standardized system.
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- end about section -->


  <!-- auto section -->

  <section class="auto_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          My Details
        </h2>
      </div>
      <div class="box">
        <div class="detail-box">
 <table id="printTable">
<tr style="text-align: left;
  padding: 8px;">
<th style="text-align: left;
  padding: 8px;">User ID</th>
<th style="text-align: left;
  padding: 8px;">Fullname</th>
  <th style="text-align: left;
  padding: 8px;">Email Address</th>
 <th style="text-align: left;
  padding: 8px;">Phone Number</th>
  <th style="text-align: left;
  padding: 8px;">User Type</th>
</tr>

<?php
$conn = mysqli_connect("localhost", "root", "", "courier");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT `User_ID`, `Fullname`, `Phone_Number`, `Email_Address`, `User_Type` FROM `users` WHERE `User_ID` = '$filter'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
?>
<tr>
<td><?php echo($row["User_ID"]); ?></td>
<td><?php echo($row["Fullname"]); ?></td>
<td><?php echo($row["Email_Address"]); ?></td>
<td><?php echo($row["Phone_Number"]); ?></td>
<td><?php echo($row["User_Type"]); ?></td>
</tr>
<?php
}
} else { echo "No results"; }
$conn->close();
?>

</table>
          <div class="btn-box">
            <a href="" onclick="printData();">
              Print Now
            </a>
          </div>
        </div>
      </div>
    </div>
    <br>
    <br>
    <div class="container">
      <div class="heading_container">
        <h2>
          List of Products In Stock
        </h2>
      </div>
      <div class="box">
        <div class="detail-box">
 <table id="printTable1">
<tr style="text-align: left;
  padding: 8px;">
<th style="text-align: left;
  padding: 8px;">Product ID</th>
<th style="text-align: left;
  padding: 8px;">Name</th>
  <th style="text-align: left;
  padding: 8px;">Details </th>
  <th style="text-align: left;
  padding: 8px;">Image </th>  
 <th style="text-align: left;
  padding: 8px;">Quantity </th>
  <th style="text-align: left;
  padding: 8px;">Price </th>
</tr>

<?php
$conn = mysqli_connect("localhost", "root", "", "courier");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT `Product_ID`, `Name`, `Details`, `Image`, `Quantity`, `Price` FROM `product` WHERE `Quantity` > 0";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
?>
<tr>
<td><?php echo($row["Product_ID"]); ?></td>
<td><?php echo($row["Name"]); ?></td>
<td><?php echo($row["Details"]); ?></td>
<td><img src="uploads/<?php echo($row["Image"]); ?>" title="<?php echo($row["Image"]); ?>"></td>
<td><?php echo($row["Quantity"]); ?></td>
<td><?php echo($row["Price"]); ?></td>
</tr>
<?php
}
} else { echo "No results"; }
$conn->close();
?>

</table>
          <div class="btn-box">
            <a href="" onclick="printData1();">
              Print Now
            </a>
          </div>
        </div>
      </div>
    </div>
      <br>
    <br>
    <div class="container">
      <div class="heading_container">
        <h2>
          My Orders
        </h2>
      </div>
      <div class="box">
        <div class="detail-box">
 <table id="printTable2">
<tr style="text-align: left;
  padding: 8px;">
<th style="text-align: left;
  padding: 8px;">Order ID</th>
<th style="text-align: left;
  padding: 8px;">User ID</th>
<th style="text-align: left;
  padding: 8px;">Supplier ID</th>  
<th style="text-align: left;
  padding: 8px;">Product ID</th>
  <th style="text-align: left;
  padding: 8px;">Total Price </th> 
 <th style="text-align: left;
  padding: 8px;">Quantity </th>
  <th style="text-align: left;
  padding: 8px;">Status </th>
  <th style="text-align: left;
  padding: 8px;"> </th> 
</tr>

<?php
$conn = mysqli_connect("localhost", "root", "", "courier");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT `Order_ID`, `User_ID`, `Supplier_ID`, `Product_ID`, `Total_Price`, `Quantity`, `Status` FROM `order` WHERE `User_ID` = '$filter'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
?>
<tr>
<td><?php echo($row["Order_ID"]); ?></td>
<td><?php echo($row["User_ID"]); ?></td>
<td><?php echo($row["Supplier_ID"]); ?></td>
<td><?php echo($row["Product_ID"]); ?></td>
<td><?php echo($row["Total_Price"]); ?></td>
<td><?php echo($row["Quantity"]); ?></td>
<td><?php echo($row["Status"]); ?></td>
<td><button class="btn btn-primary py-3 px-5" onclick="return confirm('Are you sure you want to delete this order?')?window.location.href='insertion.inc.php?action=deleteO&id=<?php echo($row["Order_ID"]); ?>&id1=<?php echo($row["Product_ID"]); ?>&id2=<?php echo($row["Quantity"]); ?>':true;" title='Delete Order'>Delete</button></td>
</tr>
<?php
}
} else { echo "No results"; }
$conn->close();
?>

</table>
          <div class="btn-box">
            <a href="" onclick="printData2();">
              Print Now
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end auto section -->

    <!-- client section -->

  <section class="client_section layout_padding-bottom" id="start">
    <div class="container">
      <div class="heading_container">
        <h2>
          Update My Details
        </h2>
      </div>
      <div class="box">
        <div class="client_detail">
<div class="info_form ">
            <form action="insertion.inc.php" method="POST">
              <input type="text" placeholder="Enter your fullname" required  name="fname" />
              <input type="hidden" value="3" name="mod">
              <input type="hidden" value="<?php echo $filter; ?>" name="uid">
              <br>
              <br>
              <input type="text" placeholder="Enter your phone number" required  name="phone" />
              <br>
              <br>                            
              <input type="email" placeholder="Enter your email" required  name="email" />
              <br>
              <br>
              <input type="password" placeholder="Enter your password" required  name="password" />
              <br>
              <br>
              <input type="password" placeholder="Confirm your password" required  name="cpassword" />     
              <br>                       
      <div class="btn-box">
        <button href="" name="upu" type="submit">
          Update
        </button>
      </div>
            </form>
          </div>
        </div>
      </div>
    </div>
        <div class="container">
      <div class="heading_container">
        <h2>
          Make an Order
        </h2>
      </div>
      <div class="box">
        <div class="client_detail">
<div class="info_form ">
            <form action="insertion.inc.php" method="POST">
                <select name="pid" required>
                                <option selected disabled value="0">Select A Product</option>
                                     <?php
                                      $con = mysqli_connect("localhost","root","","courier");
                                      $sql = "SELECT * FROM `product` WHERE `Quantity` > '0'";
                                      $all_categories = mysqli_query($con,$sql);
                                      while ($category = mysqli_fetch_array(
                                              $all_categories,MYSQLI_ASSOC)):;
                                  ?>
                                  <option value="<?php echo $category["Product_ID"];?>"><?php echo $category["Name"];?></option>
                                  <?php
                                      endwhile;
                                  ?>
                </select>
                <br>
                <br>        
              <input type="number" placeholder="Enter order quantity" required  name="pquan" />  
              <br>                     
      <div class="btn-box">
        <button href="" name="addo" type="submit">
          Order
        </button>
      </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- end client section -->

  <!-- info section -->
  <section class="info_section layout_padding" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="info_contact">
            <div class="info_logo">
              <a href="index.html">
                <span>
                  Courier Management System
                </span>
              </a>
            </div>
            <h5>
              Contact Us
            </h5>
            <div>
              <div class="img-box">
                <img src="images/location.png" width="18px" alt="" />
              </div>
              <p>
                Nairobi, KENYA.
              </p>
            </div>
            <div>
              <div class="img-box">
                <img src="images/phone.png" width="18px" alt="" />
              </div>
              <p>
                +254 7234567890
              </p>
            </div>
            <div>
              <div class="img-box">
                <img src="images/envelope.png" width="18px" alt="" />
              </div>
              <p>
                courier_system@gmail.com
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="info_links">
            <h5>
              Useful Links
            </h5>
            <ul>
              <li>
                <a href="#">
                  Home
                </a>
              </li>
              <li>
                <a href="#about">
                  About Us
                </a>
              </li>
              <li>
                <a href="#testimonial">
                  Testimonial
                </a>
              </li>
              <li>
                <a href="#start">
                  Get Started
                </a>
              </li>
              <li>
                <a href="#contact">
                  Contact Us
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->

  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      &copy; 2023 All Rights Reserved.
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- owl carousel script 
    -->
  <script type="text/javascript">
    $(".owl-carousel").owlCarousel({
      loop: true,
      margin: 0,
      navText: [],
      center: true,
      autoplay: true,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1
        },
        1000: {
          items: 3
        }
      }
    });
  </script>
  <!-- end owl carousel script -->
</body>

</html>