<!DOCTYPE html>
<html>
 
<head>
    <title>Inserare date</title>
</head>
 
<body>
    <center>
        <?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "eurocup");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 3 values from the form data(input)
        $nume_echipa =  $_REQUEST['nume_echipa'];
        $tara_origine = $_REQUEST['tara_origine'];
        $coeficient =  $_REQUEST['coeficient'];
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO echipe  VALUES ('$nume_echipa',
            '$tara_origine','$coeficient')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
            echo nl2br("\n$nume_echipa\n $tara_origine\n "
                . "$coeficient\n");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>