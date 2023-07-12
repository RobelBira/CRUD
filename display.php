<?php
include 'connect.php';

?>

<!doctype html>
<html lang="en">

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>crud</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="my-5">
  <div style="margin:'10px;'">
    <button type="button" name="submit" class="btn btn-primary my-5"> <a href="user.php" class="text-light">Add user
      </a></button>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">No.</th>
          <th scope="col">Name</th>
          <th scope="col">Sex</th>
          <th scope="col">Age</th>
        </tr>
      </thead>
      <tbody>

        <?php
        $sql = "SELECT * FROM table1";
        $result = mysqli_query($con, $sql);
        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $name = $row['name'];
            $sex = $row['sex'];
            $age = $row['age'];

            echo '
      <tr>
      <th scope="row">' . $id . '</th>
      <td>' . $name . '</td>
      <td>' . $sex . '</td>
      <td>' . $age . '</td>
      <td>
      <button type="button"  class="btn btn-danger "><a href="delete.php?deleteid=' . $id . '" class="text-light" >delete</a></button>
      <button type="button"  class="btn btn-primary"><a href="update.php?updateid=' . $id . '"  class="text-light" >update</a></button>
      </td>
       
    </tr>
      ';

          }

        }
        ?>
      </tbody>
    </table>
  </div>


</body>

</html>