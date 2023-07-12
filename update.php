<?php
include 'connect.php';
$id = $_GET['updateid'];

$sql="select * from `table1` where id=$id";
$result = mysqli_query($con, $sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$sex = $row['sex'];
$age = $row['age'];




if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $sex = $_POST['sex'];
    $age = $_POST['age'];

    $sql = "update `table1` set id=$id ,name='$name',sex='$sex',age='$age' where id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "data inserted successfully";
        header('location: display.php');
    } else {
        die(mysqli_error($con));
    }

}
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <form class="my-5" method="post">
        <div class="mb-3">
            <label class="form-label">Name </label>
            <input type="text" class="form-control " name="name" value=<?php
            echo $name;
            ?>>

        </div>
        <div class="mb-3">
            <label class="form-label">Age</label>
            <input type="number" class="form-control" name="age" 
            value=<?php 
            echo $age;
            ?>>

        </div>
        <div class="mb-3">
            <label class="form-label">Sex</label>
            <input type="text" class="form-control" name="sex" value=<?php
            echo $sex;
            ?>>

        </div>



        <button type="submit" name="submit" class="btn btn-primary">Update</button>
    </form>

</body>

</html>