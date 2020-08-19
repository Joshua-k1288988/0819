<?php
  if(isset($_POST["okbtn"])){
    $firstname = $_POST["firstName"];
    $lastname = $_POST["lastName"];
    $cityid = $_POST["cityid"];
    echo "ok";
    $sqlsetconnect ="insert into employee(fristName, lastName, cityid) values ('$firstname', '$lastname', $cityid);
    ";
    require("conDB.php");
    mysqli_query($link, $sqlsetconnect);
    header("location: index.php");
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>New & Edit</title>
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
<form action = "" method = "post">
  <div class="form-group row">
    <label for="firstName" class="col-4 col-form-label">first name</label> 
    <div class="col-8">
      <input id="firstName" name="firstName" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="lastName" class="col-4 col-form-label">last name</label> 
    <div class="col-8">
      <input id="lastName" name="lastName" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">city</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="cityid" id="cityid_0" type="radio" class="custom-control-input" value="2"> 
        <label for="cityid_0" class="custom-control-label">Taipei</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="cityid" id="cityid_1" type="radio" class="custom-control-input" value="4"> 
        <label for="cityid_1" class="custom-control-label">Taichung</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="cityid" id="cityid_2" type="radio" checked="checked" class="custom-control-input" value="6"> 
        <label for="cityid_2" class="custom-control-label">Tainan</label>
      </div>
    </div>
  </div> 
  <div class="form-group row" >
    <div class="offset-4 col-8">
      <button name="okbtn" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</div>

</body>
</html>
