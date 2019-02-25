<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Movies - X-men Films</title>
</head>
<body>

<header>


</header>
<main>
    <h2>Movies</h2>
    <ul>

        <li><a href="index.php">Home</a></li>
        <li><a href="all_movies.php">All Movies</a></li>
        <li><a href="marvel-movies.php">Marvel Studios Movies</a></li>
        <li><a href="after2010.php">Movies after 2010</a></li>
        <li><a href="xmen-films.php">X-men Films</a></li>


    </ul>
</main>
<h3>X-men Films</h3>
<p>Here you see all X-men films.</p>

<?php
require_once('db.php');

// check connection
if ($db === false) {
    die("Error: could not connect. " . mysqli_connect_error());
}
$sql = "SELECT * from marvelmovies 
WHERE title = 'x-men'";
if ($result = mysqli_query($db, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Year Released</th>";
        echo "<th>Title</th>";
        echo "<th>Production Studio</th>";
        echo "<th>Notes</th>";
        echo "</tr>";
        // while (row = mysqli_fetch_array($result)) {
        while ($row = $result->fetch_array()){
            echo "<tr>";
            echo "<td>" . $row['marvelMovieID'] . "</td>";
            echo "<td>" . $row['yearReleased'] . "</td>";
            echo "<td>" . $row['title'] . "</td>";
            echo "<td>" . $row['productionStudio'] . "</td>";
            echo "<td>" . $row['notes'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // free result set
        mysqli_free_result($result);
    }
}else{
    echo "No records matching your query were found.";
}

//

?>
<footer>
    <p><p>&copy; <?php echo date ("Y"); ?>. Movies.me</p>
</footer>
</body>
