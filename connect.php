<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "db15";
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (isset($_POST['deposit'])) {
        $deposit = $_POST['deposit'];
    } else {
        echo 'You need to input all the details.';
    }

    $sql = "INSERT INTO poker (deposit)
    VALUES ('$deposit')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // $sql = "SELECT deposit FROM poker";
    // $result = $conn->query($sql);
    // $total=0;
    // if ($result->num_rows > 0){
    //     while($row = $result->fetch_assoc()) {
    //         $total=$total+$row['deposit'];
    //     }
    // }
    // echo json_encode($total);

    //close connection
    mysqli_close($conn);
?>