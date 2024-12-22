<?php 

    require("connection.php");

    if(isset($_POST["name"]) ) {

        $name = $_POST['name'];

        $sql = "INSERT INTO users VALUES('', '$name', '', '')";
        $sql_query = mysqli_query($con, $sql);

    }

?>


<form action="index.php" method="POST">

    Name: <input type="text" name="name">
    <input type="Submit" value="Submit">

</form>