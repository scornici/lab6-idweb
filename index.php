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

echo "<h1><strong> Studentii restantieri:</strong></h1>";


echo ' <table border="2" style="width: 100%">
      <tr align="center">
          <td><b>ID</b></font> </td> 
          <td><b>Grupa</b></font> </td> 
          <td><b>NP</b></font> </td> 
          <td><b>Data Nasterii</b></font> </td> 

      </tr>';

while($i = mysqli_fetch_assoc($response))
{
    echo '<tr align="center">';
    echo "<td>".$i['id']."</td>";
    echo "<td>".$i['grupa']."</td>";
    echo "<td>".$i['NP']."</td>";
    echo "<td>".$i['data_nasterii']."</td>";
    echo "<tr>";
}