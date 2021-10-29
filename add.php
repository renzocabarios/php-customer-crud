<?php
include "includes/header.php";
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM customers ORDER BY id DESC"); 
?>

<body>
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
        <form action="added.php" method="post" name="form1" class="create">
            <input name="title" class="form-control form-control-lg my-3" type="text" placeholder="Title" aria-label=".form-control-lg example">
            <input name="fname" class="form-control form-control-lg my-3" type="text" placeholder="First Name" aria-label=".form-control-lg example">
            <input name="lname" class="form-control form-control-lg my-3" type="text" placeholder="Last Name" aria-label=".form-control-lg example">
            <input name="address" class="form-control form-control-lg my-3" type="text" placeholder="Address" aria-label=".form-control-lg example">
            <input name="town" class="form-control form-control-lg my-3" type="text" placeholder="Town" aria-label=".form-control-lg example">
            <input name="zip" class="form-control form-control-lg my-3" type="text" placeholder="Zip Code" aria-label=".form-control-lg example">
            <input name="phone" class="form-control form-control-lg my-3" type="text" placeholder="Phone" aria-label=".form-control-lg example">
            <button type="submit" class="btn btn-dark py-3 px-5" name="Submit">Create</button>
        </form>
    </div>
</body>
