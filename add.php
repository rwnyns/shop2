<?php
    /*$servername = "shopdb1.mysql.database.azure.com";
    $username = "rwn";
    $password = "123";
    $dbname = "shopdb1";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: "
            . $conn->connect_error);
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {*/
    
    // collect value of input field
    $Productid = $_REQUEST['producID'];
    $ProductName = $_REQUEST['productName'];
    $ProductColor = $_REQUEST['productcolor'];
    $ProductCatID = $_REQUEST['catID'];
    echo  $Productid;
    
   /*  $sqlquery = "INSERT INTO products VALUES ( $Productid,  $ProductName, $ProductColor,  $ProductCatID )";
    
    if ($conn->query($sql) === TRUE) {
        echo "record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }  */

   // }

?>
