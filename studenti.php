<?php
include 'main.php';
$connect = mysqli_connect(
    'db', # service name
    'php_docker', # username
    'password', # password
    'php_docker' # db table
);

$table_name = "php_docker_table";


$query = "SELECT * FROM $table_name";


$response = mysqli_query($connect, $query);
$title = "Studentii FI-201";
    echo "<h1 style='text-align: center; font-size: 5em; padding-top: 1em'><strong>$title</strong></h1>";

//while ($row = $response->fetch_assoc()) {
//      echo '<div class="image-row">';
//      echo '<div class="image-container">';
//      echo '<div class="description">' . $row['NP'] . ' [ ' . $row['grupa'] . ',  ' . $row['data_nasterii'] . ' ] ' . '</div>';
//      echo '</div>';
//      echo '</div>';
//    }
?>

<html>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<div class="row">
    <div class="col text-center">
        <div class="gallery">
            <img src="images/Vanea.jpg" alt="Vanea" width="400" height="400">
            <span class="caption">Ivan Scornici</span> </div>
        <div class="gallery">
            <img src="images/Ana.jpg" alt="Ana" width="400" height="400">
            <span class="caption">Ana Mititelu</span> </div>
        <div class="gallery">
            <img src="images/Grigore.jpg" alt="Grigore" width="400" height="400">
            <span class="caption">Grigore Macovei</span> </div>
        <div class="gallery">
            <img src="images/Cristi.jpg" alt="Cristi" width="400" height="400">
            <span class="caption">Cristian Arteni</span> </div>
        <div class="gallery">
            <img src="images/Dina.jpg" alt="Dina" width="400" height="400">
            <span class="caption">Dina Buza</span> </div>
        <div class="gallery">
            <img src="images/Daniel.jpg" alt="Daniel" width="400" height="400">
            <span class="caption">Daniel Marandici</span> </div>
    </div>
</div>

</html>

