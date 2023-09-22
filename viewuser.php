<?php
include('admin/includes/header.php');
include('admin/includes/sidebar.php');
include('admin/includes/topbar.php');
require('config.php');

$fetch = "SELECT * FROM `user` where Status = '1' ";

$data = mysqli_query($connection, $fetch);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">
                <h2>Registerd users</h2>
                <hr>
                <table class="table table-warning">
                    <thead class="bg-warning p-2 text-dark bg-opacity-10" style="opacity: 75%;">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                            <th scope="col">Update</th>
                            <th scope="col">Trash</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_assoc($data)) {

                            ?>
                            <tr>
                                <th scope="row">
                                    <?php echo $row['id'] ?>
                                </th>
                                <td>
                                    <?php echo $row['fname'] ?>
                                </td>
                                <td>
                                    <?php echo $row['lname'] ?>
                                </td>
                                <td>
                                    <?php echo $row['email'] ?>
                                </td>
                                <td><a href="updateuser.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Update</a>
                                </td>
                                <td><a href="trash.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Trash</a></td>
                                <?php
                        }
                        ?>
                    </tbody>
                </table>

            </div>

        </div>

    </div>


</body>

</html>










<?php
include('admin/includes/footer.php');


?>