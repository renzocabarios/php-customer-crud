<?php
include "includes/header.php";
include_once("config.php");

$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM customers WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
    $id = $res['id'];
	$title = $res['title'];
	$fname = $res['fname'];
	$lname = $res['lname'];
    $address = $res['address'];
	$town = $res['town'];
	$zip = $res['zip'];
    $phone = $res['phone'];
}

?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Customer CRUD</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">View</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="add.php">Create</a>
            </li>
        </ul>
        </div>
    </div>
</nav>

<div class="create-container">
    <form name="form1" method="post" action="edited.php" class="create">
        <input value="<?php echo $id;?>" name="id" readonly class="form-control form-control-lg my-3" type="text" placeholder="ID" aria-label=".form-control-lg example">   
        <input value="<?php echo $title;?>" name="title" class="form-control form-control-lg my-3" type="text" placeholder="Title" aria-label=".form-control-lg example">
        <input value="<?php echo $fname;?>" name="fname" class="form-control form-control-lg my-3" type="text" placeholder="First Name" aria-label=".form-control-lg example">
        <input value="<?php echo $lname;?>" name="lname" class="form-control form-control-lg my-3" type="text" placeholder="Last Name" aria-label=".form-control-lg example">
        <input value="<?php echo $address;?>" name="address" class="form-control form-control-lg my-3" type="text" placeholder="Address" aria-label=".form-control-lg example">
        <input value="<?php echo $town;?>" name="town" class="form-control form-control-lg my-3" type="text" placeholder="Town" aria-label=".form-control-lg example">
        <input value="<?php echo $zip;?>" name="zip" class="form-control form-control-lg my-3" type="text" placeholder="Zip Code" aria-label=".form-control-lg example">
        <input value="<?php echo $phone;?>" name="phone" class="form-control form-control-lg my-3" type="text" placeholder="Phone" aria-label=".form-control-lg example">
        <button type="submit" class="btn btn-dark py-3 px-5" name="Submit">Update</button>
    </form>
</div>