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
            <div class="hamburger">
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
            <li>
                <a href="#">
                    <span class="icon"><i class="fas fa-user-shield"></i></span>
                    <span class="item">Admin</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"><i class="fas fa-cog"></i></span>
                    <span class="item">Settings</span>
                </a>
            </li>
        </ul>
    </div>

</div>

<script>
    <?php include 'script.js'; ?>
</script>
</body>
</html>