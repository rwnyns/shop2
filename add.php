<?php
  $conn = mysqli_init();
mysqli_ssl_set($conn,NULL,NULL, NULL, NULL);
mysqli_real_connect($conn, "shopdb1.mysql.database.azure.com", "rwn", "root123456789.", "shopdb1", 3306);
    
   
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: ". $conn->connect_error);
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
        // collect value of input field
        
        $productName = $_REQUEST['productName'];
        $ProductColor = $_REQUEST['productcolor'];
        $ProductCatID = $_REQUEST['catID'];
        
        
        $sqlquery = "INSERT INTO products (Pname, color, catID) VALUES ('$productName','$ProductColor' , '$ProductCatID' )";
        
        if ($conn->query($sqlquery) == TRUE) {
            echo "record inserted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }  

   }

?>
