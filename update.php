<?php
include 'config.php';


$ID = $_GET['updateid'];
$sql = "SELECT * FROM user WHERE ID= '$ID'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$fullname = $row['fullname'];
$username = $row['username'];
$email = $row['email'];
$address = $row['address'];

if(isset($_POST['submit'])){
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    $sql = "UPDATE user SET ID = '$ID', fullname = '$fullname', username = '$username', email = '$email' WHERE ID = '$ID' ";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo "<script>alert('Update Successfully')</script>";
    }else{
        echo "<script>alert('Something Went Wrong')</script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- data table -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"></script>

    <style>
        #a{
            text-decoration: none;
            list-style: none;
            color: white;
        }
    </style>
    
</head>
<body>
    <div class="container">

    <h2>Update User</h2>
        <form action="" method="POST">
        <div class="mb-3">
                <label for="fullname" class="form-label">ID</label>
                <input type="text" class="form-control" name="ID" value="<?php echo $ID; ?>" disabled>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="fullname" class="form-label">Fullname</label>
                <input type="text" class="form-control" name="fullname" value="<?php echo $fullname; ?>" >
                <input type="hidden" name="user_id" value="<?php echo $ID; ?>">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" value="<?php echo $username; ?>" >
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" value="<?php echo $email; ?>" >
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" name="address" value="<?php echo $address; ?>" >
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <button type="submit" name="submit" class="btn btn-primary" >UPDATE</button>
            <button type="button" onclick="back()" class="btn btn-secondary">Back</button>
        </form>
    </div>


            <!-- pagination -->
            <script src="script.js"></script>
</body>
</html>