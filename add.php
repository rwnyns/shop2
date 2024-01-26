<?php
$servername = "shopappp-server.mysql.database.azure.com";
    $username = "thlmplvgcj";
    $password = "root123456789.";
    $dbname = "shopappp-database";
    
    // Create connection
    $con = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($con->connect_error) {
        die("Connection failed: ". $con->connect_error);
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
        // collect value of input field
        
        $productName = $_REQUEST['productName'];
        $ProductColor = $_REQUEST['productcolor'];
        $ProductCatID = $_REQUEST['catID'];
        
        
        $sqlquery = "INSERT INTO products (Pname, color, catID) VALUES ('$productName','$ProductColor' , '$ProductCatID' )";
        
        if ($con->query($sqlquery) == TRUE) {
            echo "record inserted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }  

   }

?>
