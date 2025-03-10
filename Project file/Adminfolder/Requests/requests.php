<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../static/images/book.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Book List</title>
    <style>
        table  td, table th{
        vertical-align:middle;
        text-align:center;
        padding:20px!important;
        color:white;
        }
        table th{
            text-decoration: underline;
        }
        body{
            background-color: rgb(32, 1, 1);
            color:white;
        }
    </style>
</head>
<body>
    <div class="container my-4">
        <header class="d-flex justify-content-between my-4">
            <h1>Requests</h1>
            <div>
            <a href="../../Admin1.php" class="btn btn-primary">Back</a>
            </div>
        </header>
        <table class="table table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile Number</th>
                <th>Book Name</th>
                <th>Author</th>
                <th>Edition</th>
                <th>Year</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
        include('../../database.php');
        $sqlSelect = "SELECT * FROM reservebooks";
        $result = mysqli_query($conn,$sqlSelect);
        while($data = mysqli_fetch_array($result)){
        ?>
            <tr>
                <td><?php echo $data['id']; ?></td>
                <td><?php echo $data['name']; ?></td>
                <td><?php echo $data['email']; ?></td>
                <td><?php echo $data['mobile']; ?></td>
                <td><?php echo $data['bookName']; ?></td>
                <td><?php echo $data['authorName']; ?></td>
                <td><?php echo $data['edition']; ?></td>
                <td><?php echo $data['year']; ?></td>
                <td>
                <a href="accept.php?id=<?php echo $data['id']; ?>" class="btn btn-success">Accept</a>
                <a href="decline.php?id=<?php echo $data['id']; ?>" class="btn btn-danger">Decline</a>
                </td>
            </tr>
            <?php
        }
        ?>
        </tbody>
        </table>
    </div>
</body>
</html>