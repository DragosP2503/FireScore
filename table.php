<DOCTYPE html>
<html>
    
<head>
    
</head>

<body style="margin: 50px;">
   <h1>Tabel inscriere echipe</h1>
   <br>
   <table class="table">
    <thead>
        <tr>
            <th>Nume Echipa</th>
            <th>Tara</th>
            <th>Coeficient</th>
        </tr>
    </thead>
    
    <tbody>
        <?php include 'db.php';

        $sql = "SELECT * FROM echipe";
        $result = $conn->query($sql);

        if (!$result){
            die("Invalid query: " . $conn->error);

        }

        while($row = $result->fetch_assoc()){
            echo "<tr>
            <td>" . $row["nume_echipa"] . "</td>
            <td>" . $row["tara_origine"] . "</td>
            <td>" . $row["coeficient"] . "</td>
            </tr>";
        }
    
        ?>
    </tbody>
    </table>
</html>    





