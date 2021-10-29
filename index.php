<?php
include "includes/header.php";
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM customers ORDER BY id DESC"); 
?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light main-nav">
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
    <table class="table table-light table-striped customer-table">
        <thead>
            <tr>
                <th>Title</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Address</th>
                <th>Town</th>
                <th>Zip</th>
                <th>Phone</th>
                <th>Update</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            while($res = mysqli_fetch_array($result)) { 		
                echo "<tr>";
                echo "<td>".$res['title']."</td>";
                echo "<td>".$res['fname']."</td>";
                echo "<td>".$res['lname']."</td>";	
                echo "<td>".$res['address']."</td>";
                echo "<td>".$res['town']."</td>";
                echo "<td>".$res['zip']."</td>";	
                echo "<td>".$res['phone']."</td>";
                echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
            }
        ?>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
