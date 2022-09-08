<?php
$conn = mysqli_connect("localhost", "root", '', "libraryfpt");


if (isset($_GET["search"]) && !empty($_GET["search"])){
    $key = $_GET["search"];

    $sql = "select * from books where title like '%$key%'";
} else {
    $sql = "select * from books";
}

$result = mysqli_query($conn, $sql);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book Library</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h1>Book List</h1>
                </div>
                <form action="" method="get">
                    <input type="text" name="search" placeholder="Enter keywords" class="form-control" value="<?php if (isset($_GET["search"])){ echo$_GET["search"]; } ?>">
                    <input type="submit" class="btn btn-success" value="Tìm kiếm" style="margin: 10px 0px 20px 0px;">
                </form>
                <?php
                //title
                echo "<table class='table table-stripped table-bordered'>";
                echo "<thead>";
                echo "<tr>";
                echo "<th>BookID</th>";
                echo "<th>AuthorId</th>";
                echo "<th>Title</th>";
                echo "<th>ISBN</th>";
                echo "<th>Year</th>";
                echo "<th>Available</th>";
                echo "</tr>";
                echo "</thead>";
                //content
                echo "<tbody>";
                while ($row = mysqli_fetch_array($result)){
                    echo "<tr>";
                    echo "<td>". $row['bookid'] . "</td>";
                    echo "<td>". $row['authorid'] . "</td>";
                    echo "<td>". $row['title'] . "</td>";
                    echo "<td>". $row['ISBN'] . "</td>";
                    echo "<td>". $row['pub_year'] . "</td>";
                    echo "<td>". $row['avaiable'] . "</td>";
                    echo "</tr>";
                }
                echo "</tbody>";
                echo "</table>";
                ?>
            </div>
        </div>
    </div>
</body>
</html>