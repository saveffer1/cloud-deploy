<?php include('../connect.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-page my web</title>
    <link rel="stylesheet" href="../css/home.css">
</head>
<body>
    <!-- header -->
    <header>
        <hw class="logo-icon"><a href="">My-Web</a></hw>
        <nav class="navigation">
            <a href="../index.html"><button class="login-menu-btn">Logout</button></a>
        </nav>
    </header>
    <!-- header end -->
        <?php
            $sql = "SELECT id , uname FROM member";
            $resault = mysqli_query($conn,$sql);

            if($res = mysqli_query($conn,$sql)){
                if(mysqli_num_rows($res) > 0){
                    echo "<table>";
                        echo "<tr class='head'>";
                            echo "<th>Id</th>";
                            echo "<th>Name</th>";
                        echo "</tr>";
                    while($row = mysqli_fetch_array($res)){
                        echo "<tr>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td>" . $row['uname'] . "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                }
                else{
                    echo "No records matching your query were found.";
                }
            }
            else{
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
            }
        mysqli_close($conn);
        ?>
    <script src="js/index.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>