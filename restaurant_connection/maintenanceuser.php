<?php
include "connectionuser.php";
?>

<html lang="en">
<head>
<title>Bburmsam</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/59c8d2dc7b.js" crossorigin="anonymous"></script>
</head>
<body>

<!--Nav Bar-->
<nav class="navbar navbar-expand-lg bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#" style="color: white"><img src="loggo.png" alt="logo" width="60" height="54" class="logob d-inline-block align-text">
       <b><i>BBURMSAM</i></b> Restaurant</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">   
          <li class="nav-item">
            <a class="nav-link" href="indexes.php" style="color: white">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="productuser.html" style="color: white">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="reservationuser.html" style="color: white">Reservations</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="aboutuser.html" style="color: white">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="maintenanceuser.php" style="color: white">Maintenance</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" style="color: white" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fa-solid fa-user"></i>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
              <li><a class="dropdown-item" href="login_form.php">Log Out</a></li>
              <li><a class="dropdown-item" href="contact.html">Contact Us</a></li>
              <li><a class="dropdown-item" href="members.html">Members</a></li>
            </ul>
          </li>
        </ul>           
      </div>
    </div>
  </nav>
<!--Header of About us--> 
<header class="page-header header container-fluid" style="height: 947px;">
        <div class="overlay"></div>
        <div class="description">
            <h1>Maintenance</h1>
            <p>Let us help you.</p>
          </div>    
      </div>
</header>

<!--form section-->
<center>
<div class="maintain">
<div class="col-lg-4">
<h2>User Maintenance</h2>
<form action="" name="form1" method="post">
<div class="form-group">
<label for="email">firstname</label>
<input type="text" class="form-control" id="firstname" placeholder="Enter firstname" name="firstname">
</div>
<div class="form-group">
<label for="pwd">lastname</label>
<input type="text" class="form-control" id="lastname" placeholder="Enter lastname" name="lastname">
</div>
<div class="form-group">
<label for="pwd">email</label>
<input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
</div>
<div class="form-group">
<label for="pwd">contact</label>
<input type="text" class="form-control" id="contact" placeholder="Enter contact" name="contact">
</div>

<button type="submit" name="insert" class="btn btn-dark">Insert</button>
<button type="submit" name="update" class="btn btn-dark">Update</button>
<button type="submit" name="delete" class="btn btn-dark">Delete</button>
</form>
</div>
</div>
</center>
<div class="col-lg-12">
<table class="table table-bordered">
<thead>
<tr>
<th>Id</th>
<th>Firstname</th>
<th>Lastname</th>
<th>Email</th>
<th>Contact</th>
<th>Edit</th>
</tr>
</thead>
<tbody>


<?php
$res=mysqli_query($link,"select * from user_maintenance");
while($row=mysqli_fetch_array($res))
{
echo "<tr>";
echo "<td>"; echo $row["id"]; echo "</td>";
echo "<td>"; echo $row["firstname"]; echo "</td>";
echo "<td>"; echo $row["lastname"]; echo "</td>";
echo "<td>"; echo $row["email"]; echo "</td>";
echo "<td>"; echo $row["contact"]; echo "</td>";
echo "<td>"; ?> <a href="edituser.php?id=<?php echo $row["id"]; ?>"<button type="button" class="btn btn-success">Edit</button></a> <?php echo "</td>";


echo "</tr>";
}
?>
</tbody>
</table>
</div>

</body>
<!--PHP-->
<?php
if(isset($_POST["insert"]))
{
mysqli_query($link,"insert into user_maintenance
values(NULL,'$_POST[firstname]','$_POST[lastname]','$_POST[email]','$_POST[contact]')");
?>
<script type="text/javascript">
window.location.href=window.location.href;
</script>
<?php
}

if(isset($_POST["delete"]))
{
mysqli_query($link, "delete from user_maintenance where firstname='$_POST[firstname]'") or
die(mysqli_error($link));
?>
<script type="text/javascript">
window.location.href=window.location.href;
</script>
<?php
}

if(isset($_POST["update"]))
{
mysqli_query($link, "update user_maintenance set firstname='$_POST[lastname]' where
firstname='$_POST[firstname]'") or die(mysqli_error($link));
?>
<script type="text/javascript">
window.location.href=window.location.href;
</script>
<?php
}


?>


</html>