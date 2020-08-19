<?php

$link = mysqli_connect("localhost", "root", "" , "data0818test" , 3306);
mysqli_query($link, "set names utf8");
$sqlsetconnect = <<<multi
    select employeeid, fristName, lastName, e.cityid, cityName
    from city c 
    join employee e on e.cityid = c.cityid;
multi;
$resulut = mysqli_query($link , $sqlsetconnect);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Employee List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<br><br>
<div class="container">
  <h2>Employee List
    <a href="addtable.php" class = "btn btn-outline-info btn-md float-right">New</a>
  </h2>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>City</th>
      </tr>
    </thead>
    <tbody>
    <?php while($row = mysqli_fetch_assoc($resulut)) { ?>
      <tr>
        <td><?php echo $row["fristName"] ?></td>
        <td><?php echo $row["lastName"] ?></td>
        <td><?php echo $row["cityName"] ?></td>
        <td>
            <span class = "float-right">
                <a href="./edittable.php?id=<?php echo $row["employeeid"] ?>" class = "btn-outline-success btn-sm">Edit</a>
                |
                <a href="./daletetable.php?id=<?php echo $row["employeeid"] ?>" class = "btn-outline-danger btn-sm">Delete</a>
            </span>
        </td>
      </tr>
    <?php } ?>
    </tbody>
  </table>
</div>

</body>
</html>