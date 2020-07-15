<?php
  include ("Connection.php");
  session_start();

  if(isset($_POST["submit"])) {  
    $Check = "SELECT id FROM products
    WHERE name= '".$_POST["pName"]."' ";

    $check_Query = mysqli_query($Connection, $Check); 
    $num_Rows = mysqli_num_rows($check_Query);

    if ($num_Rows > 0) {
      header("location:Product.php?Error=404");
    }
    else {
      $avatar_path = $Connection->real_escape_string('Products/'.$_FILES['pimg']['name']);

      if(copy($_FILES['pimg']['tmp_name'], $avatar_path)){
        $Query = "INSERT INTO products (name, price, image)
          VALUES(
            '".$_POST["pName"]."',
            '".$_POST["pPrice"]."',
            '$avatar_path'
          )";
          header("location:Product.php?Success=Update");
      }
      else{
        header("location:Product.php?Error1=Update");  
      }
    }
  }

  mysqli_query($Connection, $Query) or die(mysqli_error($Connection));  
?>