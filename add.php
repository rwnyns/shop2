<?php
$con = mysqli_init();
mysqli_ssl_set($con,NULL,NULL, "{path to CA cert}", NULL, NULL);
mysqli_real_connect($conn, "shopappp-server.mysql.database.azure.com", "thlmplvgcj", "{your_password}", "{your_database}", 3306, MYSQLI_CLIENT_SSL);
  
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