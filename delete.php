<?php
include 'config.php';

if(isset($_GET['deleteid'])){
    $ID = $_GET['deleteid'];

    $sql = "DELETE FROM user WHERE ID = '$ID'";
    $result = mysqli_query($conn, $sql);

    if($result){
        // echo "<script>alert('Deleted Successfully')</script>";
        header('Location: index.php');
    }else{
        echo "<script>alert('Something Went Wrong')</script>";
    }
}

?>