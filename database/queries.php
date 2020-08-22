<?php include "conn.php" ?>

<?php
    
    if(isset($_POST["toInsert"])){
        $fname = $_POST['firstName'];
        $lname = $_POST['lastName'];

        $sql = "INSERT INTO people(FIRSTNAME,LASTNAME) VALUES ('$fname', '$lname')";
    }

    if($conn->query($sql) === TRUE) echo "New record added!";
    else echo "Error:" .$sql. "<br>" .$conn->error; 
    
    header("Location: ../views/profile.php");
?>