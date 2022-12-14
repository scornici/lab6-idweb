<html>
<head>
    <title>Laboratorul 6</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        <?php include 'styles.css'; ?>
    </style>
</head>
<body>
<div id="wrapper" class="toggled">
    <div class="section">
        <div class="top_navbar">
            <div class="hamburger" data-toggle="collapse">
                <a href="#">
                    <i class="fas fa-bars"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="sidebar">
        <div class="profile">
            <img src="https://utm.md/wp-content/uploads/2020/05/r_Filiera-Informatica.png" alt="profile_picture">
            <h3>Filiera Francofonă Informatica</h3>
            <p>UTM</p>
        </div>
        <ul>
            <li>
                <a href="index.php" >
                    <span class="icon"><i class="fas fa-home"></i></span>
                    <span class="item">Home</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"><i class="fas fa-desktop"></i></span>
                    <span class="item">Noutăți</span>
                </a>
            </li>
            <li>
                <a href="studenti.php">
                    <span class="icon"><i class="fas fa-user-friends"></i></span>
                    <span class="item">Studenții</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"><i class="fas fa-tachometer-alt"></i></span>
                    <span class="item">Perfomance</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"><i class="fas fa-database"></i></span>
                    <span class="item">Development</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"><i class="fas fa-chart-line"></i></span>
                    <span class="item">Reports</span>
                </a>
            </li>
        </ul>
    </div>
    <h1>Filiera Francofonă Informatica</h1>

</div>

<script>
    <?php include 'script.js'; ?>
</script>
</body>
</html>
<?php

$connect = mysqli_connect(
    'db', # service name
    'php_docker', # username
    'password', # password
    'php_docker' # db table
);

$table_name = "php_docker_table";


$query = "SELECT * FROM $table_name";


$response = mysqli_query($connect, $query);


//echo "<h1><strong> Studentii restantieri:</strong></h1>";
//
//
//echo ' <table border="2" style="width: 100%">
//      <tr align="center">
//          <td><b>ID</b></font> </td>
//          <td><b>Grupa</b></font> </td>
//          <td><b>NP</b></font> </td>
//          <td><b>Data Nasterii</b></font> </td>
//
//      </tr>';
//
//while($i = mysqli_fetch_assoc($response))
//{
//    echo '<tr align="center">';
//    echo "<td>".$i['id']."</td>";
//    echo "<td>".$i['grupa']."</td>";
//    echo "<td>".$i['NP']."</td>";
//    echo "<td>".$i['data_nasterii']."</td>";
//    echo "<tr>";
//}
//

