<?php
include 'config.php';

$sql = "SELECT * FROM user";
$result = mysqli_query($conn, $sql);

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
            <input type="button" class="btn btn-primary" value="Add" type="submit" onclick="add()"/>
            <table id="exampleTable" class="table table-striped table-bordered" style="width: 70%">
                <thead id="thead">
                <tr style="background-color: #1573ff">
                    <th>ID</th>
                    <th>Fullname</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <?php while($row = mysqli_fetch_array($result)): ?>
                    
                    <td><?php echo $row['ID']?></td>
                    <td><?php echo $row['fullname']?></td>
                    <td><?php echo $row['username']?></td>
                    <td><?php echo $row['email']?></td>
                    <td><?php echo $row['address']?></td>
                    <td>
                        
                        <form action="delete.php" method="POST">
                            <button type="button" name="delete" onclick="update()" class="btn btn-primary"><a id="a" href="update.php?updateid=<?php echo $row['ID']; ?>">UPDATE</a></button>
                        <input type="hidden" name="ID" value="<?php echo $row['ID'];?>">
                        <button type="button" name="delete" class="btn btn-danger"><a id="a" href="delete.php?deleteid=<?php echo $row['ID']; ?>">DELETE</a></button>
                    </form>
                </td>
                </tr>

                <?php endwhile; ?>
                </tbody>
                <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Fullname</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
                </tfoot>
            </table>
        </div>


        <!-- pagination -->
        <script src="script.js"></script>

        <!-- data table script -->
    <script>
        $(document).ready(function() {
        $('#exampleTable').DataTable();
    } );
    </script>
    
</body>
</html>