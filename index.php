
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../SmartKey2/css/index.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


     <link rel="shortcut icon" href="images/logo2.png" type="image/x-icon">

    <title>SmartKey</title>
</head>

<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="images/logo2.png" alt="">
            </div>

            <span class="logo_name">SmartKey</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="#">
                        <i class="uil uil-estate"></i>
                        <span class="link-name">Tableau de bord</span>
                    </a></li>
                <li><a href="page/users.php">
                <i class='bx bx-user-circle'></i>
                        <span class="link-name">Utilisateurs</span>
                    </a></li>
              
            </ul>

            <ul class="logout-mode">
                <li><a href="page/login.php">
                        <i class="uil uil-signout"></i>
                        <span class="link-name">Deconnexion

                        </span>
                    </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                        <span class="link-name">Dark Mode</span>
                    </a>

                    <div class="mode-toggle">
                        <span class="switch"></span>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>

            <img src="images/profile.jpg" alt="">
            


             
        </div>

                
                <div class="content">
                    <main>
                    <div class="header">
                <div class="left">
  <br> 
  <br><br>
                    <h1>Dashboard</h1>
                   
                </div>
                    <ul class="insights">
                <li>
                    <i class='bx bx-street-view'></i>
                    <span class="info">
                        <?php
                        include 'page/database.php';
                        $pdo = Database::connect();
                        $sql = "SELECT COUNT(*) AS total_records FROM nodemcu_rfidrc522_mysql.utilisateurs";
                        $stmt = $pdo->prepare($sql);
                        $stmt->execute();
                        $total_records = $stmt->fetchColumn();
                        echo '<h3> ' . $total_records . '</h3>';
                        Database::disconnect();
                        ?>
                        <p>Utilisateurs</p>
                    </span>
                </li>

                <li>
                <i class='bx bx-calendar'></i>
                    <span class="info">
                    <h3>
        <?php
        // Définir le fuseau horaire
        date_default_timezone_set('Europe/Paris');

        // Obtenir la date actuelle et la formater
        $dateDuJour = date('d/m/Y');

        // Afficher la date
        echo $dateDuJour;
        ?>
    </h3>
                        <p>Dates</p>
                    </span>
                </li>

                <li>
                    <i class='bx bxs-show'></i>
                    <span class="info">
                    <?php
                       
                        $pdo = Database::connect();
                        $sql = "SELECT COUNT(*) AS total_recordsSELECT  FROM nodemcu_rfidrc522_mysql.operation;";
                        $stmt = $pdo->prepare($sql);
                        $stmt->execute();
                        $total_records = $stmt->fetchColumn();
                        echo '<h3> ' . $total_records . '</h3>';
                        Database::disconnect();
                        ?>
                        <p>Operation</p>
                    </span>
                </li>

            </ul>
           
                    
                        <div class="bottom-data">
                            <div class="orders">
                                <div class="header">
                                    <i class='bx bxs-receipt'></i>
                                    <h3>Journal d'ouvertures</h3>
                                </div>
                                <table>
                                    <thead>
                                        <tr>
                                            <th>N°</th>
                                            <th>Id agents</th>
                                            <th>Prenom</th>
                                            <th>Nom</th>
                                            <th>Departements</th>
                                            <th>Mobile</th>
                                            <th>Date ouvertures</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- #region -->
                                        <?php

                                        $pdo = Database::connect();
                                        $sql = 'SELECT * FROM nodemcu_rfidrc522_mysql.operation ORDER BY date_ouv DESC; ';
                                        foreach ($pdo->query($sql) as $row) {
                                            echo '<tr>';
                                            echo '<td>' . $row['id'] . '</td>';
                                            echo '<td>' . $row['id_agent'] . '</td>';
                                            echo '<td>' . $row['prenom'] . '</td>';
                                            echo '<td>' . $row['nom'] . '</td>';
                                            echo '<td>' . $row['departement'] . '</td>';
                                            echo '<td>' . $row['mobile'] . '</td>';
                                            echo '<td>' . $row['date_ouv'] . '</td>';
                                            echo '</tr>';
                                        }
                                        Database::disconnect();
                                        ?>


                                    </tbody>

                                </table>
                            </div>


                        </div>

                    </main>
                </div>
                <script src="../SmartKey2/js/script.js"></script>
</body>

</html>