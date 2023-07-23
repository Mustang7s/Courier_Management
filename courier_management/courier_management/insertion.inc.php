<?php 

session_start();

//Register User
if (isset($_POST['regu'])) {
 $fname = $_POST['fname'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $type = $_POST['type'];
 $password = $_POST['password'];
 $passwordconfirm = $_POST['cpassword'];
 $mod = $_POST['mod'];

 require_once 'dbconnection.inc.php';

 if ($password == $passwordconfirm) {
  if ($mod == 0) {
  $sql = "INSERT INTO `users`(`Fullname`, `Phone_Number`, `Email_Address`,`User_Type`, `Password`) VALUES ('$fname','$phone','$email','User',md5('$password'))";
     mysqli_query($conn, $sql);
  header("Location: index.html?userregistration=success");
  }else if($mod == 1){
  $sql = "INSERT INTO `users`(`Fullname`, `Phone_Number`, `Email_Address`, `User_Type`, `Password`) VALUES ('$fname','$phone','$email','$type',md5('$password'))";
     mysqli_query($conn, $sql);
  header("Location: index.php?userregistration=success");
  }
 }else{
  echo "Passwords do not match.";
 }
}

//Make An Order
if (isset($_POST['addo'])) {
 $uid = $_SESSION['username'];
 $quan = $_POST['pquan']; 
 $pid = $_POST['pid'];

 require_once 'dbconnection.inc.php';

 $sql1 = "SELECT * FROM `product` WHERE `Product_ID`='$pid'";
        $query = mysqli_query($conn,$sql1);
        if(mysqli_num_rows($query) > 0){
        $row = mysqli_fetch_assoc($query);
        $sid = $row['User_ID'];
        $price = $row['Price']; 
        $quan1 = $row['Quantity'];

        $tprice = $quan * $price;
        $quan2 = $quan1 - $quan;

        if ($quan2 > 0) {
  $sql = "INSERT INTO `order`(`User_ID`, `Supplier_ID`, `Product_ID`, `Total_Price`, `Quantity`) VALUES ('$uid','$sid','$pid','$tprice','$quan')";
     mysqli_query($conn, $sql);
             $sql1 = "UPDATE `product` SET `Quantity` = '$quan2 ' WHERE `Product_ID` = '$pid'";
        mysqli_query($conn, $sql1);    
  header("Location: index2.php?makeanorder=success");
        }else{
            echo "Quantity Ordered Exceeds what is in Stock, kindly try again with a lesser Quantity.";
        }
}
}

//Add A Product
if (isset($_POST['addp'])) {
 $pname = $_POST['pname'];
 $pquan = $_POST['pquan']; 
 $pprice = $_POST['pprice']; 
 $pdet = $_POST['pdet'];
 $uid = $_SESSION['courname'];

  if ($_FILES["image"]["error"] === 4) {
   echo "<script> alert('Image does not exist!'); </script>";
  }else{
  $uploads_dir = 'uploads';
  $fileName = $_FILES["image"]["name"];
  $fileSize = $_FILES["image"]["size"];
  $tmpName = $_FILES["image"]["tmp_name"];

  $validImageExtension = ['jpg', 'jpeg', 'png'];
  $imageExtension = explode('.', $fileName);
  $imageExtension = strtolower(end($imageExtension));

  if (!in_array($imageExtension, $validImageExtension)) {
    echo "<script> alert('Invalid Image Format!'); </script>";
  }else if($fileSize > 10000000){
    echo "<script> alert('Image is too large!'); </script>";
  }else{

    $newImgName = uniqid();
    $newImgName .= '.' . $imageExtension;

    move_uploaded_file($tmpName, "$uploads_dir/$newImgName");

 require_once 'dbconnection.inc.php';

$sql = "INSERT INTO `product`(`User_ID` ,`Name`, `Details`, `Image`, `Quantity`, `Price`) VALUES ('$uid','$pname','$pdet','$newImgName','$pquan','$pprice')";
     mysqli_query($conn, $sql);
  header("Location: index1.php?addproduct=success");
}
}
}

//Update A Product
if (isset($_POST['upp'])) {
 $pname = $_POST['pname'];
 $pquan = $_POST['pquan']; 
 $pprice = $_POST['pprice']; 
 $pdet = $_POST['pdet'];
 $pid = $_POST['pid'];

  if ($_FILES["image"]["error"] === 4) {
   echo "<script> alert('Image does not exist!'); </script>";
  }else{
  $uploads_dir = 'images';
  $fileName = $_FILES["image"]["name"];
  $fileSize = $_FILES["image"]["size"];
  $tmpName = $_FILES["image"]["tmp_name"];

  $validImageExtension = ['jpg', 'jpeg', 'png'];
  $imageExtension = explode('.', $fileName);
  $imageExtension = strtolower(end($imageExtension));

  if (!in_array($imageExtension, $validImageExtension)) {
    echo "<script> alert('Invalid Image Format!'); </script>";
  }else if($fileSize > 10000000){
    echo "<script> alert('Image is too large!'); </script>";
  }else{

    $newImgName = uniqid();
    $newImgName .= '.' . $imageExtension;

    move_uploaded_file($tmpName, "$uploads_dir/$newImgName");

 require_once 'dbconnection.inc.php';

$sql = "UPDATE `product` SET `Name` = '$pname', `Details` = '$pdet', `Image` = '$newImgName', `Quantity` = '$pquan', `Price` = '$pprice' WHERE `Product_ID` = '$pid'";
     mysqli_query($conn, $sql);
  header("Location: index1.php?updateproduct=success");
}
}
}

//Delete Functions

        if($_REQUEST['action'] == 'deleteU' && !empty($_REQUEST['id'])){ 
        require_once 'dbconnection.inc.php';
        $deleteItem = $_REQUEST['id'];
        $sql = "DELETE FROM `users` WHERE `User_ID` = '$deleteItem'";
        mysqli_query($conn, $sql); 
        header("Location: index.php?deleteuser=success");
        }

        if($_REQUEST['action'] == 'deleteO' && !empty($_REQUEST['id']) && !empty($_REQUEST['id1']) && !empty($_REQUEST['id2'])){ 
        require_once 'dbconnection.inc.php';
        $deleteItem = $_REQUEST['id'];
        $pid = $_REQUEST['id1'];
        $quan = $_REQUEST['id2'];        
        $sql1 = "UPDATE `product` SET `Quantity` = `Quantity` + '$quan' WHERE `Product_ID` = '$pid'";
        mysqli_query($conn, $sql1);     
        $sql = "DELETE FROM `order` WHERE `Order_ID` = '$deleteItem'";
        mysqli_query($conn, $sql); 
        header("Location: index2.php?deleteorder=success");
        }
        

        if($_REQUEST['action'] == 'deleteP' && !empty($_REQUEST['id'])){ 
        require_once 'dbconnection.inc.php';
        $deleteItem = $_REQUEST['id'];
        $sql = "DELETE FROM `product` WHERE `Product_ID` = '$deleteItem'";
        mysqli_query($conn, $sql); 
        header("Location: index1.php?deleteproduct=success");
        }

//Update Order

        if($_REQUEST['action'] == 'updateO' && !empty($_REQUEST['id']) && !empty($_REQUEST['id1'])){ 
        require_once 'dbconnection.inc.php';
        $updateItem = $_REQUEST['id'];
        $stat = $_REQUEST['id1']; 
        if ($stat != "Ongoing") {
        $sql = "UPDATE `order` SET `Status` = 'Ongoing' WHERE `Order_ID` = '$updateItem'";
        mysqli_query($conn, $sql); 
        header("Location: index1.php?updateOrder=success");                   
               }else{
                alert("Order is not Pending! Kindly try again with a different Order.");
               }       
        } 

        if($_REQUEST['action'] == 'updateO1' && !empty($_REQUEST['id']) && !empty($_REQUEST['id1'])){ 
        require_once 'dbconnection.inc.php';
        $updateItem = $_REQUEST['id'];
        $stat = $_REQUEST['id1']; 
        if ($stat != "Completed") {
        $sql = "UPDATE `order` SET `Status` = 'Completed' WHERE `Order_ID` = '$updateItem'";
        mysqli_query($conn, $sql); 
        header("Location: index1.php?updateOrder=success");                   
               }else{
                alert("Order is already Completed! Kindly try again with a different Order.");
               }       
        }         

//Update User
if (isset($_POST['upu'])) {
 $uid = $_POST['uid'];
 $fname = $_POST['fname'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 $passwordconfirm = $_POST['cpassword'];
 $phone = $_POST['phone'];
 $mod = $_POST['mod'];

 require_once 'dbconnection.inc.php';

 if ($password == $passwordconfirm) {
  if ($mod == 1) {
  $sql = "UPDATE `users` SET `Fullname`='$fname',`Email_Address`='$email',`Phone_Number`='$phone',`Password`=md5('$password') WHERE `User_ID`='$uid'";
     mysqli_query($conn, $sql);
  header("Location: index.php?updateadministrator=success");
  }else if ($mod == 2) {
  $sql = "UPDATE `users` SET `Fullname`='$fname',`Email_Address`='$email',`Phone_Number`='$phone',`Password`=md5('$password') WHERE `User_ID`='$uid'";
     mysqli_query($conn, $sql);
  header("Location: index1.php?updatecourier=success");
  }else if ($mod == 3) {
  $sql = "UPDATE `users` SET `Fullname`='$fname',`Email_Address`='$email',`Phone_Number`='$phone',`Password`=md5('$password') WHERE `User_ID`='$uid'";
     mysqli_query($conn, $sql);
  header("Location: index2.php?updateuser=success");
  }
 }else{
  echo "Passwords do not match.";
 }
}

 ?>