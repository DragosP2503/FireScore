<?php>
// servername => localhost
        // username => root
        // password => empty
        // database name => eurocup
        $conn = mysqli_connect("localhost", "root", "", "eurocup");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
<php>
