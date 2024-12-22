<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../SmartKey2/css/users.css">

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="shortcut icon" href="../images/logo2.png" type="image/x-icon">
    <title>Utilisateurs</title>
</head>

<body>


    <nav>
        <div class="logo-name">
            <div class="logo-image">
            <img src="../images/logo2.png" alt="">
            </div>

            <span class="logo_name">SmartKey</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="../index.php">
                        <i class="uil uil-estate"></i>
                        <span class="link-name">Tableau de bord</span>
                    </a></li>
                <li><a href="users.php">
                <i class='bx bx-user-circle'></i>
                        <span class="link-name">Utilisateurs</span>
                    </a></li>
              
                

               
            </ul>

            <ul class="logout-mode">
                <li><a href="#">
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

            <img src="../images/profile.jpg" alt="">
        </div>




        <br><br><br>
        <div class="content">
            <main>
                <div class="header">
                    <div class="left">
                        <h1>Utilisateurs</h1>
                    </div>
                </div>

                <!-- Insights -->
                <ul class="insights">
                    <li style="width: 400px;">
                        <a href="adduser.php"><i class='bx bx-user-plus'></i></a>
                        <span class="info">
                            <h3>Ajouter un utilisateur</h3>

                        </span>
                    </li>
                </ul>
                <div class="bottom-data">
                    <div class="orders">
                        <div class="header">
                            <i class='bx bxs-receipt'></i>
                            <h3>Nos utilisateurs</h3>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>Sexe</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Departement</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- #region -->
                                <?php
                                include '../page/database.php';
                                $pdo = Database::connect();
                                $sql = 'SELECT * FROM nodemcu_rfidrc522_mysql.utilisateurs;';
                                foreach ($pdo->query($sql) as $row) {
                                    echo '<tr>';
                                    echo '<td>' . $row['id'] . '</td>';
                                    echo '<td>' . $row['nom'] . '</td>';
                                    echo '<td>' . $row['prenom'] . '</td>';

                                    echo '<td>' . $row['sexe'] . '</td>';
                                    echo '<td>' . $row['email'] . '</td>';
                                    echo '<td>' . $row['mobile'] . '</td>';
                                    echo '<td>' . $row['departement'] . '</td>';
                                    echo '<td><a class="btn btn-success" href="user data edit page.php?id='.$row['id'].'">Edit</a>';
                                    echo ' ';
                                    echo '<a class="btn btn-danger" href="user data delete page.php?id='.$row['id'].'">Delete</a>';
                                    echo '</td>';
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

    </section>

    <script src="../../SmartKey2/js/script.js"></script>
</body>

</html>