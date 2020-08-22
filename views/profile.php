<?php include "../database/conn.php"?>

<!DOCTYPE html>

<html>
<body>

   <table>
    <tr>
        <th> First Name </th>
        <th> Last Name </th>
        <th> Full Name </th>
    </tr>
    <tr>  
      <?php
        $sql = "SELECT ID, FIRSTNAME, LASTNAME FROM people";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            echo "id: " . $row["ID"]. " - Full Name: " . $row["FIRSTNAME"]. " " . $row["LASTNAME"]. "<br>";
          }
        } else {
          echo "0 results";
        }
      ?>
     </tr> 
   </table>

</body>
</html>